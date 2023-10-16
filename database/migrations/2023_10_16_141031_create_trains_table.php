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
            $table->string('Azienda', 50);
            $table->enum('Stazione di partenza', ['Torino Porta Nuova', 'Torino Porta Susa', 'Torino Lingotto', 'ecc..']);
            $table->enum('Stazione di arrivo', ['Milano Centro', 'Milano Rho', 'ecc..']);
            $table->string('Orario di partenza');
            $table->string('Orario di arrivo');
            $table->string('Codice Treno', 25);
            $table->float('Numero Carrozze');
            $table->string('In orario', 50);
            $table->string('Cancellato', 50);
            $table->float('Prezzo Biglietto', 5, 2);
            $table->string('Codice Biglietto', 50);
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