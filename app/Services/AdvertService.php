<?php

namespace App\Services;

use App\Entities\Advert;
use App\Models\AdvertModel;
use CodeIgniter\Config\Factories;

class AdvertService
{
    private $user;
    private AdvertModel $advertModel;

    public const SITUATION_NEW = 'new';
    public const SITUATION_USED = 'used';

    public function __construct()
    {
        //TODO: alterar para auth('api')->user() quando for usar em API
        $this->user = service('auth')->user();
        $this->advertModel = Factories::models(AdvertModel::class);
    }

    public function getAllAdverts(
        bool $showBtnArchive = true,
        bool $showBtnViewAdvert = true,
        bool $showBtnQuestion = true,
        string $classBtnActions = 'btn btn-primary btn-sm',
        string $sizeImage = 'small'
    ): array {
        $adverts = $this->advertModel->getAllAdverts();
        $baseRouteToEditImages = $this->user->isSuperAdmin() ? 'adverts.manager.edit.images' : 'adverts.may.edit.images';
        $baseRouteToQuestions = $this->user->isSuperAdmin() ? 'adverts.manager.edit.questions' : 'adverts.may.edit.questions';

        $data = [];
        foreach ($adverts as $advert) {
            if ($showBtnArchive) {
                $btnArchive = form_button(
                    [
                        'data-id' => $advert->id,
                        'id' => 'btnEditArchiveAdvert',
                        'class' => 'dropdown-item '
                    ],
                    lang('App.btn_archive')
                );
            }

            $btnEdit = form_button(
                [
                    'data-id' => $advert->id,
                    'id' => 'btnEditAdvert',
                    'class' => 'dropdown-item '
                ],
                lang('App.btn_edit')
            );

            $finalRouteToEditImages = route_to($baseRouteToEditImages, $advert->id);

            $btnEditImages = form_button(
                [
                    'class' => 'dropdown-item',
                    'onclick' => "location.href='{$finalRouteToEditImages}'"
                ],
                lang('Adverts.btn_edit_images')
            );

            if ($showBtnViewAdvert && $advert->is_published) {
                $routeToViewAdvert = route_to('adverts.details', $advert->code);

                $btnViewAdvert = form_button(
                    [
                        'class' => 'dropdown-item',
                        'onclick' => "window.open('{$routeToViewAdvert}', '_blank')"
                    ],
                    lang('Adverts.btn_view_advert')
                );
            }

            if ($showBtnQuestion && $advert->is_published) {
                $finalRouteToEditQuestions = route_to($baseRouteToQuestions, $advert->code);

                $btnViewQuestions = form_button(
                    [
                        'class' => 'dropdown-item',
                        'onclick' => "location.href='{$finalRouteToEditQuestions}'"
                    ],
                    lang('Adverts.btn_view_questions')
                );
            }

            $btnActions = '<div class="dropdown dropup">';
            $attrBtnActions = [
                'type'              => 'button',
                'id'                => 'actions',
                'class'             => "dropdown-toggle {$classBtnActions}",
                'data-bs-toggle'    => 'dropdown', // Bootstrap 5
                'data-toggle'       => 'dropdown', // Bootstrap 4
                'aria-haspopup'     => 'true',
                'aria-expanded'     => 'false',
            ];
            $btnActions .= form_button($attrBtnActions, lang('App.btn_actions'));

            $btnActions .= '<div class="dropdown-menu" aria-labelledby="actions">';
            $btnActions .= $btnEdit;
            $btnActions .= $btnEditImages;

            if ($showBtnViewAdvert && $advert->is_published) {
                $btnActions .= $btnViewAdvert;
            }

            if ($showBtnQuestion && $advert->is_published) {
                $btnActions .= $btnViewQuestions;
            }

            if ($showBtnArchive) {
                $btnActions .= $btnArchive;
            }

            $btnActions .= '</div>';
            $btnActions .= '</div>';


            $data[] = [
                'image'         => $advert->image(),
                'title'         => $advert->title,
                'code'         => $advert->code,
                'category'     => $advert->category,
                'is_published' => $advert->isPublished(),
                'address'       => $advert->address(),
                'actions'      => $btnActions,
            ];
        }

        return $data;
    }

    public function getAdvertById(int $id, bool $withDeleted = false)
    {
        $advert = $this->advertModel->getAdvertById(id: $id, withDeleted: $withDeleted);

        if (is_null($advert)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Anúncio não encontrado");
        }

        return $advert;
    }

    public function getDropdownSituations(?string $advertSituation = null): string
    {
        $options = [];
        $selected = [];

        $options = [
            '' => lang('Adverts.label_situation'),
            self::SITUATION_NEW => lang('Adverts.text_new'),
            self::SITUATION_USED => lang('Adverts.text_used'),
        ];

        if (is_null($advertSituation)) {
            return form_dropdown('situation', $options, $selected, ['class' => 'form-control']);
        }

        $selected[] = match ($advertSituation) {
            self::SITUATION_NEW     => self::SITUATION_NEW,
            self::SITUATION_USED    => self::SITUATION_USED,
            default                 => throw new \Exception("Unsupported {$advertSituation} situation")
        };

        return form_dropdown('situation', $options, $selected, ['class' => 'form-control']);
    }

    public function trySaveAdvert(Advert $advert, bool $protect = true, bool $notifyUserIfUnpublished = false)
    {
        try {
            $advert->unsetAuxiliaryAttributes();

            if ($advert->hasChanged()) {
                $this->advertModel->trySaveAdvert($advert, $protect);

                //TODO: enviar email para o usuário avisando que o anúncio foi despublicado
            }
        } catch (\Exception $e) {
            die('Erro ao salvar o anúncio');
        }
    }
}
