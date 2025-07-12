<?php

namespace App\Enums\RH;

enum TypeContratSalarie: string
{
    case CDI = "cdi";
    case CDD = "cdd";

    public function label()
    {
        return match ($this) {
            self::CDI => "Contrat à durée indeterminé",
            self::CDD => "Contrat à durée déterminé"
        };
    }
}
