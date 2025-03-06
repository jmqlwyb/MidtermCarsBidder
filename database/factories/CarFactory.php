<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    protected $model = Car::class;

    public function definition()
    {
        return [
            'make' => $this->faker->randomElement(['Toyota', 'Honda', 'Ford', 'Chevrolet', 'Nissan']),
            'model' => $this->faker->word,
            'year' => $this->faker->numberBetween(2000, 2023),
            'miles' => $this->faker->numberBetween(10000, 200000),
        ];
    }
}
