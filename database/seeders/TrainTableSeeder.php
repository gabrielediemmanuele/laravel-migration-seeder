<?php

namespace Database\Seeders;

use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train();
        $train->azienda = "";
        $train->stazione_di_partenza = "";
        $train->stazione_di_arrivo = "";
        $train->orario_di_partenza = "";
        $train->orario_di_arrivo = "";
        $train->codice_treno = "";
        $train->numero_carrozze = "";
        $train->in_orario = "";
        $train->cancellato = "";
        $train->prezzo_biglietto = "";
        $train->codice_biglietto = "";
    }
}