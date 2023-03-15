<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Plan extends Entity
{
    private const INTERVAL_MONTHLY = 1; //Mensal
    private const INTERVAL_QUARTERLY = 3; // Trimestral
    private const INTERVAL_SEMESTER = 6; //Semestral
    private const INTERVAL_YEARLY = 12; //Anual

    public const OPTION_MONTHLY = 'monthly'; //Mensal
    public const OPTION_QUARTERLY = 'quarterly'; // Trimestral
    public const OPTION_SEMESTER = 'semester'; //Semestral
    public const OPTION_YEARLY = 'yearly'; //Anual

    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [
        'plan_id' => 'interger',
        'adverts' => '?interger',
        'is_highlighted' => 'boolean',
    ];

    public function setValue(string $value)
    {
        $this->attributes['value'] = str_replace(',', '', $value);

        return $this;
    }

    public function setAdverts(string $adverts)
    {
        $this->attributes['adverts'] = $adverts ? (int) $adverts : null;

        return $this;
    }

    public function setIsHighlighteds(string $isHighlighted)
    {
        $this->attributes['is_highlighted'] = (bool) $isHighlighted;

        return $this;
    }

    public function setIntervalRepeats()
    {
        $this->repeats = null;

        $this->attributes['interval'] = match ($this->attributes['recorrence']) {

            'monthly' => self::INTERVAL_MONTHLY,
            'quarterly' => self::INTERVAL_QUARTERLY,
            'semester' => self::INTERVAL_SEMESTER,
            'yearly' => self::INTERVAL_YEARLY,
            default => throw new \InvalidArgumentException("Unsupported {$this->attributes['recorrence']}")
        };

        return $this;
    }

    public function recover()
    {
        $this->attributes['deleted_at'] = null;
    }

    public function isHighlighted()
    {
        return $this->attributes['is_highlighted'] ? lang('Plans.text_is_highlighted') : lang('Plans.text_no_highlighted');
    }

    public function adverts()
    {
        return $this->attributes['adverts'] ?? lang('Plans.text_unlimited_adverts');
    }

    public function details()
    {
        //TODO: alterar conforme o idioma

        return number_to_currency($this->value, 'BRL', 'pt-BR', 2) . ' /'.$this->recorrence;
    }
}
