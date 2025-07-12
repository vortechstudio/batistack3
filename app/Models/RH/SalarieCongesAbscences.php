<?php

namespace App\Models\RH;

use App\Enums\RH\CongeTypeSalarie;
use Illuminate\Database\Eloquent\Model;

class SalarieCongesAbscences extends Model
{
    protected $guarded = [];
    public function salarie()
    {
        return $this->belongsTo(Salarie::class);
    }

    protected function casts()
    {
        return [
            'date_debut' => 'datetime',
            'date_fin' => 'datetime',
            'valide' => 'boolean',
            'type' => CongeTypeSalarie::class,
        ];
    }
}
