<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Beca;

class BecaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $becas = [
            ['Type' => 'Beca de Mérito Académico'],
            ['Type' => 'Beca de Honor'],
            ['Type' => 'Beca de Asistencia Económica'],
            ['Type' => 'Beca a la Diversidad'],
            ['Type' => 'Beca para Mujeres en STEM'],
            ['Type' => 'Beca Deportiva'],
            ['Type' => 'Beca para Atletas de Alto Rendimiento'],
            ['Type' => 'Beca para Estudiantes Extranjeros'],
            ['Type' => 'Becas de Investigación de Grado'],
            ['Type' => 'Beca de Investigación en Ciencias'],
            ['Type' => 'Beca de Proyectos'],
            ['Type' => 'Beca de Servicio Comunitario'],
            ['Type' => 'Beca de Voluntariado'],
            ['Type' => 'Beca de Compromiso Social'],
            ['Type' => 'Beca para Estudiantes con Discapacidades'],
            ['Type' => 'Beca Inclusiva'],
            ['Type' => 'Beca para Diversidad Funcional'],
            ['Type' => 'Beca de Intercambio Internacional'],
            ['Type' => 'Beca Erasmus+'],
            ['Type' => 'Beca de Movilidad'],
        ];

        foreach ($becas as $beca) {
            Beca::create($beca);
        }
    }
} 