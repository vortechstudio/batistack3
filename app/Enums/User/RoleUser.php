<?php

namespace App\Enums\User;

enum RoleUser: string
{
    case ADMIN = 'admin';
    case TIERS = 'tiers';
    case STAFF = 'staff';
    case COUNTERMASTER = 'countermaster';

    public function label()
    {
        return match ($this) {
            self::ADMIN => 'Administrateur',
            self::TIERS => 'Tiers',
            self::STAFF => 'Employer',
            self::COUNTERMASTER => 'Chef de chantiers',
        };
    }
}
