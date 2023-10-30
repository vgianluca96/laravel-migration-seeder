<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newtrain = new Train();
            $newtrain->company = $faker->randomElement(['Trenitalia S.p.A', 'Italo S.p.A']);
            $newtrain->departure_station = $faker->randomElement(['Venezia', 'Padova', 'Rovigo', 'Brescia', 'Bergamo', 'Milano', 'Roma', 'Napoli', 'Torino', 'Firenze']);
            $newtrain->arrival_station = $faker->randomElement(['Venezia', 'Padova', 'Rovigo', 'Brescia', 'Bergamo', 'Milano', 'Roma', 'Napoli', 'Torino', 'Firenze']);
            $newtrain->departure_hour = $faker->time();
            $newtrain->arrival_hour = $faker->time();
            $newtrain->train_code = $faker->bothify('??######');
            $newtrain->wagons_num = $faker->numberBetween(2, 20);
            $newtrain->on_time = $faker->boolean();
            $newtrain->canceled = $faker->boolean();
            $newtrain->save();
        }
    }
}
