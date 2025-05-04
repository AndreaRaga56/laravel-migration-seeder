<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++) {
            $newTrain = new Train();
            $newTrain->azienda = $faker->company();
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->orario_di_partenza = $faker->dateTimeThisYear('+2 months');
            do {
                $newTrain->orario_di_arrivo = $faker->dateTimeThisYear('+2 months');
            } while ($newTrain->orario_di_partenza >= $newTrain->orario_di_arrivo);
            // Il do-while ripete il codice finchè la condizione non è falsa
            $newTrain->codice_treno = $faker->randomNumber(5, true);
            $newTrain->totale_carrozze = $faker->numberBetween(1, 20);
            $newTrain->is_in_orario = $faker->boolean();
            $newTrain->is_cancellato = $faker->boolean();
            $newTrain->save();
        }
    }
}
