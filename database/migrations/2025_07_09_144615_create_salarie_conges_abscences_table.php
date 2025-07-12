<?php

use App\Models\RH\Salarie;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('salarie_conges_abscences', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->dateTime('date_debut');
            $table->dateTime('date_fin');
            $table->text('motif')->nullable();
            $table->boolean('valide');
            $table->foreignIdFor(Salarie::class)->constrained('salaries');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('salarie_conges_abscences');
    }
};
