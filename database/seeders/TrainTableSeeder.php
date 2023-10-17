<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {

            $train = new Train();

            $train->azienda = $faker->word();
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = $faker->randomNumber(5);
            $train->numero_carrozze = $faker->randomDigit();
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->prezzo_biglietto = $faker->randomFloat(8, 2);
            $train->codice_biglietto = $faker->randomNumber(10);

            $train->save();
        }
    }
}