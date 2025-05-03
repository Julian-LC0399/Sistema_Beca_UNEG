<?php

namespace Database\Factories;

use App\Models\Campus;
use Illuminate\Database\Eloquent\Factories\Factory;

class CampusFactory extends Factory
{
    protected $model = Campus::class;

    public function definition()
    {
        $campuses = [
            'Campus Upata' => 'Av. Principal de Upata, Estado Bolívar',
            'Campus Puerto Ordaz' => 'Av. Atlántico, Puerto Ordaz, Estado Bolívar',
            'Campus Ciudad Bolívar' => 'Av. Germania, Ciudad Bolívar, Estado Bolívar'
        ];

        $name = $this->faker->randomElement(array_keys($campuses));
        
        return [
            'Name' => $name,
            'Address' => $campuses[$name],
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
} 