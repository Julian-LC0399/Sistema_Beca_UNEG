<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Campus;
use App\Models\Career;
use App\Models\Student;
use App\Models\Beca;
use App\Models\StuBeca;
use App\Models\StuCareer;
use App\Models\StuCampus;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear usuario administrador
        User::create([
            'name' => 'Admin',
            'email' => 'admin@uneg.edu.ve',
            'password' => Hash::make('12345678'),
        ]);

        // Crear campus usando el seeder personalizado
        $this->call(CampusSeeder::class);
        $campuses = Campus::all();

        // Crear carreras usando el seeder personalizado
        $this->call(CareerSeeder::class);
        $careers = Career::all();

        // Crear becas usando el seeder personalizado
        $this->call(BecaSeeder::class);
        $becas = Beca::all();

        // Crear 200 estudiantes con sus relaciones
        Student::factory(200)->create()->each(function ($student) use ($campuses, $careers, $becas) {
            try {
                // Asignar un campus aleatorio
                StuCampus::create([
                    'Student_id' => $student->id,
                    'Campus_id' => $campuses->random()->id,
                ]);

                // Asignar una carrera aleatoria
                StuCareer::create([
                    'Student_id' => $student->id,
                    'Career_id' => $careers->random()->id,
                ]);

                // Asignar una beca aleatoria (80% de probabilidad)
                if (rand(1, 100) <= 80) {
                    StuBeca::create([
                        'Student_id' => $student->id,
                        'Beca_id' => $becas->random()->id,
                    ]);
                }
            } catch (\Exception $e) {
                \Log::error("Error creando relaciones para estudiante {$student->id}: " . $e->getMessage());
            }
        });
    }
}
