<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition()
    {
        return [
            'First_name' => $this->faker->firstName(),
            'Suname' => $this->faker->lastName(),
            'Identification_card' => $this->faker->unique()->numerify('V########'),
            'Phone' => $this->faker->numerify('0424#######'),
            'Room_telephone' => $this->faker->numerify('0285######'),
            'Email' => $this->faker->unique()->safeEmail(),
            'Semeter' => $this->faker->numberBetween(1, 10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
} 