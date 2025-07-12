<?php

namespace App\Models\RH;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Salarie extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function contrats()
    {
        return $this->hasMany(SalarieContrat::class);
    }

    public function absences()
    {
        return $this->hasMany(SalarieCongesAbscences::class);
    }

    protected function casts()
    {
        return [
            'date_naissance' => 'date',
            'date_entre' => 'date',
            'date_sortie' => 'date',
        ];
    }
}
