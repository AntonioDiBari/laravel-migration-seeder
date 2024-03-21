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
        for ($i = 0; $i < 10; $i++) {
            $train = new Train;

            $train->azienda = $faker->company();
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->orario_partenza = $faker->date() . " " . $faker->time();
            $train->orario_arrivo = $faker->date() . " " . $faker->time();
            $train->codice_treno = $faker->bothify('??###?');
            $train->anni_servizio = $faker->numberBetween(1, 25);
            $train->carrozze = $faker->numberBetween(5, 16);
            $train->on_time = $faker->boolean();
            $train->canceled = $faker->boolean();

            $train->save();
        }
    }
}
