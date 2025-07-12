<?php

use App\Models\RH\Salarie;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('salarie_contrats', function (Blueprint $table) {
            $table->id();
            $table->string('type_contrat');
            $table->string('poste')->nullable();
            $table->date('date_debut');
            $table->date('date_fin')->nullable();
            $table->integer('heure_travail_hebdo')->default(39);
            $table->decimal('salaire_brut_mensuel', 12, 0);
            $table->string('status')->default('draft');
            $table->foreignIdFor(Salarie::class)->constrained('salaries');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('salarie_contrats');
    }
};
