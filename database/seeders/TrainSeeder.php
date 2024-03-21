<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $file = fopen(__DIR__ . "/../csv/trains.csv", "r");
        $first_row = true;

        while (!feof($file)) {
            $train_data = (fgetcsv($file));
            if (!$first_row) {
                $train = new Train;
                $train->azienda = $train_data[0];
                $train->stazione_partenza = $train_data[1];
                $train->stazione_arrivo = $train_data[2];
                $train->orario_partenza = $train_data[3];
                $train->orario_arrivo = $train_data[4];
                $train->codice_treno = $train_data[6];
                $train->anni_servizio = $train_data[5];
                $train->carrozze = $train_data[7];
                $train->on_time = $train_data[8];
                $train->canceled = $train_data[9];

                $train->save();
            }

            $first_row = false;

        }




        // for ($i = 0; $i < 10; $i++) {
        //     $train = new Train;

        //     $train->azienda = $faker->company();
        //     $train->stazione_partenza = $faker->city();
        //     $train->stazione_arrivo = $faker->city();
        //     $train->orario_partenza = $faker->date() . " " . $faker->time();
        //     $train->orario_arrivo = $faker->date() . " " . $faker->time();
        //     $train->codice_treno = $faker->bothify('??###?');
        //     $train->anni_servizio = $faker->numberBetween(1, 25);
        //     $train->carrozze = $faker->numberBetween(5, 16);
        //     $train->on_time = $faker->boolean();
        //     $train->canceled = $faker->boolean();

        //     $train->save();
        // }
    }
}
