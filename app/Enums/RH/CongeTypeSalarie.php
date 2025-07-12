<?php

namespace App\Enums\RH;

enum CongeTypeSalarie: string
{
    case CONGE = 'conge';
    case ABSENCE = 'absence';
    case MALADIE = 'maladie';
    case AUTRES = 'autres';


    public function label()
    {
        return match ($this) {
            self::CONGE => __('Conge'),
            self::ABSENCE => __('Absence'),
            self::MALADIE => __('Maladie'),
            self::AUTRES => __('Autres'),
        };
    }
}
