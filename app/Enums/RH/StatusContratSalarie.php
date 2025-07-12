<?php

namespace App\Enums\RH;

enum StatusContratSalarie: string
{
    case DRAFT = 'draft';
    case PROGRESS = 'progress';
    case EXPIRED = 'expired';
    case CANCELLED = 'cancelled';

    public function label()
    {
        return match ($this) {
            self::DRAFT => __('Brouillon'),
            self::PROGRESS => __('En cours'),
            self::EXPIRED => __('Expiré'),
            self::CANCELLED => __('Annulé'),
        };
    }

    public function color()
    {
        return match ($this) {
            self::DRAFT => "gray",
            self::PROGRESS => "amber",
            self::EXPIRED, self::CANCELLED => "red",
        };
    }
}
