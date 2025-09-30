<?php

namespace App\Models;

use App\Entities\Advert;

class AdvertModel extends MyBaseModel
{
    private $user;

    public function __construct()
    {
        parent::__construct();
        //TODO: $this->user = service('auth')->user() ?? auth('api')->user();
        $this->user = service('auth')->user();
    }

    protected $DBGroup          = 'default';
    protected $table            = 'adverts';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       =  Advert::class;
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'user_id',
        'category_id',
        'code',
        'title',
        'description',
        'price',
        //'is_published',
        'situation',
        'zipcode',
        'street',
        'number',
        'neighborhood',
        'city',
        'city_slug',
        'state',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ['escapeDataXSS', 'generateCitySlug', 'generateCode', 'setUserId'];
    protected $beforeUpdate   = ['escapeDataXSS', 'generateCitySlug', 'unPublish'];

    protected function generateCitySlug(array $data): array
    {
        if (isset($data['data']['city'])) {
            $data['data']['city_slug'] = mb_url_title($data['data']['city'], "-", true);
        }
        return $data;
    }

    protected function generateCode(array $data): array
    {
        if (isset($data['data'])) {
            $data['data']['code'] = mb_strtoupper(uniqid('ADVERT_', true));
        }
        return $data;
    }

    protected function setUserId(array $data): array
    {
        if (isset($data['data'])) {
            $data['data']['user_id'] = $this->user->id;
        }
        return $data;
    }

    protected function unPublish(array $data): array
    {
        if (isset($data['data']['title']) || isset($data['data']['description'])) {
            $data['data']['is_published'] = false;
        }
        return $data;
    }

    /**
     * Retorna todos os anúncios do usuário logado ou todos os anúncios se for admin
     *
     * @param boolean $onlyDeleted
     * @return array
     */
    public function getAllAdverts(bool $onlyDeleted = false): array
    {
        $this->setSQLMode();

        $builder = $this;
        if ($onlyDeleted) {
            $builder->onlyDeleted();
        }

        $tableFields = [
            'adverts.*',
            'categories.name AS category',
            'adverts_images.image AS images',
        ];

        $builder->select($tableFields);

        if (!$this->user->isSuperAdmin()) {
            $builder->where('adverts.user_id', $this->user->id);
        }
        $builder->join('categories', 'categories.id = adverts.category_id');
        $builder->join('adverts_images', 'adverts_images.advert_id = adverts.id', 'left');
        $builder->groupBy('adverts.id');
        $builder->orderBy('adverts.id', 'DESC');

        return $builder->findAll();
    }

    /**
     * Retorna o anúncio de acordo com o ID informado
     *
     * @param integer $id
     * @param boolean $withDeleted
     * @return object|null
     */
    public function getAdvertById(int $id, bool $withDeleted = false)
    {

        $builder = $this;

        $tableFields = [
            'adverts.*',
            'users.email',
        ];

        $builder->select($tableFields);
        $builder->withDeleted($withDeleted);

        if (!$this->user->isSuperAdmin()) {
            $builder->where('adverts.user_id', $this->user->id);
        }

        $builder->join('users', 'users.id = adverts.user_id');
        $advert = $builder->find($id);

        if (!is_null($advert)) {
            $advert->images = $this->getAdvertImages($advert->id);
        }

        return $advert;
    }

    public function getAdvertImages(int $advertId): array
    {
        return $this->db->table('adverts_images')
            ->where('advert_id', $advertId)
            ->get()
            ->getResult();
    }

    public function trySaveAdvert(Advert $advert, bool $protect = true)
    {
        try {
            $this->db->transStart();

            $this->protect($protect)->save($advert);

            $this->db->transComplete();
        } catch (\Exception $e) {
            log_message('error', '[ERROR] - {exception}', ['exception' => $e]);
            die('Erro ao salvar anúncio.');
        }
    }
}
