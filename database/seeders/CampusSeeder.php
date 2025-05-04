<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Campus;

class CampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $campuses = [
            [
                'Name' => 'CIUDAD UNIVERSITARIA',
                'Address' => 'Ciudad Bolívar',
            ],
            [
                'Name' => 'GUASIPATI',
                'Address' => 'Guasipati',
            ],
            [
                'Name' => 'JARDÍN BOTÁNICO',
                'Address' => 'Ciudad Bolívar',
            ],
            [
                'Name' => 'EL PALMAR',
                'Address' => 'El Palmar',
            ],
            [
                'Name' => 'EL CALLAO',
                'Address' => 'El Callao',
            ],
            [
                'Name' => 'VILLA ASIA',
                'Address' => 'Ciudad Bolívar',
            ],
            [
                'Name' => 'MENCA DE LEONI',
                'Address' => 'Ciudad Bolívar',
            ],
        ];

        foreach ($campuses as $campus) {
            Campus::create($campus);
        }
    }
} 