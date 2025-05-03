<?php

namespace Database\Factories;

use App\Models\Career;
use Illuminate\Database\Eloquent\Factories\Factory;

class CareerFactory extends Factory
{
    protected $model = Career::class;

    public function definition()
    {
        return [
            'name' => $this->faker->randomElement([
                'Ingeniería Informática',
                'Ingeniería Industrial',
                'Ingeniería Civil',
                'Administración',
                'Contaduría Pública'
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
} 