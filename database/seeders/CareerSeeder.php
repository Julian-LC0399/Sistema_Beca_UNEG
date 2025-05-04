<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Career;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $careers = [
            'Licenciatura En Gestión De Alojamiento Turístico',
            'Ciencias Ambientales',
            'Educación Integral',
            'Educación. Mencion Educación Física, Deporte Y Recreación',
            'Educación. Mención Lengua Y Literatura',
            'Educación. Mención Matemática',
            'Educación En Ciencias: Física, Química Y Biología',
            'Administración De Empresas',
            'Administracion Mención Banca Y Finanzas',
            'Ciencias Fiscales',
            'Contaduría Pública',
            'Ingeniería En Informática',
            'Ingeniería En Materiales',
            'Ingeniería Industrial',
            'Tecnología En Producción Agropecuaria'
        ];

        foreach ($careers as $careerName) {
            Career::create([
                'name' => $careerName
            ]);
        }
    }
} 