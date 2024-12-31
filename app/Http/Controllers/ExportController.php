<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;

class ExportController extends Controller
{
    // public function exportToCsv()
    // {
    //     // Obtén los datos desde el modelo
    //     $stuBecas = \App\Models\StuBeca::with('student', 'beca')->get()->map(function ($stuBeca) {
    //         return [
    //             'ID' => $stuBeca->Student_id,
    //             'Nombre' =>  $stuBeca->student->First_name,
    //             'Apellido' =>  $stuBeca->student->Suname,
    //             'Cédula del estudiante' => $stuBeca->student->Identification_card,
    //             'Telefono' =>  $stuBeca->student->Phone,
    //             'Email' =>  $stuBeca->student->Email,
    //             'Semestre' =>  $stuBeca->student->Semeter,
    //             'Beca' => $stuBeca->beca->Type,
    //             'Carrera' => $careers -> Name,
    //         ];
    //     });

    public function exportToCsv()
    {
        // Obtén los datos desde el modelo
        $stuBecas = \App\Models\StuBeca::with('student', 'beca')->get()->map(function ($stuBeca) {
            // Buscar el Career_id en la tabla stu_careers
            $career = \App\Models\StuCareer::where('Student_id', $stuBeca->Student_id)->first();
            
            // Si se encuentra el Career_id, buscar el nombre de la carrera
            $careerName = $career ? \App\Models\Career::where('id', $career->Career_id)->value('name') : 'Sin carrera';

            return [
                'ID' => $stuBeca->Student_id,
                'Nombre' => $stuBeca->student->First_name,
                'Apellido' => $stuBeca->student->Suname,
                'Cédula del estudiante' => $stuBeca->student->Identification_card,
                'Teléfono' => $stuBeca->student->Phone,
                'Email' => $stuBeca->student->Email,
                'Semestre' => $stuBeca->student->Semeter,
                'Beca' => $stuBeca->beca->Type,
                'Carrera' => $careerName, 
            ];
        });
    
    
        // Define el nombre del archivo
        $filename = 'Estudiantes_Becas.csv';
    
        // Crear un archivo CSV en memoria
        $handle = fopen('php://output', 'w');
        ob_start(); // Captura la salida del archivo en un buffer
    
        // Agregar encabezados al CSV
        fputcsv($handle, ['ID', 'Nombre', 'Apellido', 'Cédula del estudiante', 'Telefono', 'Email', 'Semestre', 'Beca', 'Carrera']);
    
        // Agregar los datos al CSV
        foreach ($stuBecas as $row) {
            fputcsv($handle, $row);
        }
    
        fclose($handle);
        $csvOutput = ob_get_clean(); // Captura el contenido generado
    
        // Generar la respuesta para la descarga
        return response($csvOutput)
            ->header('Content-Type', 'text/csv')
            ->header('Content-Disposition', "attachment; filename=\"$filename\"");
    }
    
}
