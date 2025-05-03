<?php

namespace Database\Factories;

use App\Models\Beca;
use Illuminate\Database\Eloquent\Factories\Factory;

class BecaFactory extends Factory
{
    protected $model = Beca::class;

    public function definition()
    {
        return [
            'Type' => $this->faker->randomElement([
                'Ayudantía',
                'Preparaduría',
                'Beca Trabajo',
                'Beca Estudio'
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
} 