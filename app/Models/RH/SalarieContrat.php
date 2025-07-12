<?php

namespace App\Models\RH;

use App\Enums\RH\StatusContratSalarie;
use App\Enums\RH\TypeContratSalarie;
use Illuminate\Database\Eloquent\Model;

class SalarieContrat extends Model
{
    protected $guarded = [];
    public function salarie()
    {
        return $this->belongsTo(Salarie::class);
    }

    protected function casts()
    {
        return [
            'date_debut' => 'date',
            'date_fin' => 'date',
            'type_contrat' => TypeContratSalarie::class,
            'status' => StatusContratSalarie::class,
        ];
    }
}
