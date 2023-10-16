<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 50);
            $table->enum('stazione_di_partenza', ['Torino Porta Nuova', 'Torino Porta Susa', 'Torino Lingotto', 'ecc..']);
            $table->enum('stazione_di_arrivo', ['Milano Centro', 'Milano Rho', 'ecc..']);
            $table->string('orario_di_partenza');
            $table->string('orario_di_arrivo');
            $table->string('codice_treno', 25);
            $table->float('numero_carrozze');
            $table->string('in_orario', 50);
            $table->string('cancellato', 50);
            $table->float('prezzo_biglietto', 5, 2);
            $table->string('codice_biglietto', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};