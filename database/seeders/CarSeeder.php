<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    public function run()
    {
        Car::create([
            'make' => 'Toyota',
            'model' => 'Corolla',
            'year' => 2020,
            'miles' => 15000
        ]);

        Car::create([
            'make' => 'Honda',
            'model' => 'Civic',
            'year' => 2019,
            'miles' => 20000
        ]);


        \App\Models\Car::factory(10)->create();
    }
}
