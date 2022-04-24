<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $aziende = ['Trenitalia SpA', 'Trentino Trasporti', 'Trenord SpA', 'Ferroviaria Italiana'];

        for ($i=0; $i < 30; $i++) {

            $train = new Train();

            $train->azienda = $faker->randomElement($aziende);
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = $faker->numberBetween(0, 9999);
            $train->numero_carrozze = $faker->numberBetween(1, 5);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();

            $train->save();
        }

    }
}
