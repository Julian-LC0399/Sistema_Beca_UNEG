<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use App\Models\StuBeca;
use App\Models\StuCampus;
use App\Models\StuCareer;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function exportToCsv(Request $request)
    {
        // Iniciar la consulta
        $query = StuBeca::query();
        
        // Aplicar los mismos filtros que en la tabla
        if ($request->has('beca_id') && $request->beca_id != '') {
            $query->where('Beca_id', $request->beca_id);
        }

        if ($request->has('campus_id') && $request->campus_id != '') {
            $studentIds = StuCampus::where('Campus_id', $request->campus_id)
                                 ->pluck('Student_id');
            $query->whereIn('Student_id', $studentIds);
        }

        if ($request->has('career_id') && $request->career_id != '') {
            $studentIds = StuCareer::where('Career_id', $request->career_id)
                                 ->pluck('Student_id');
            $query->whereIn('Student_id', $studentIds);
        }

        // Obtener los datos filtrados
        $stuBecas = $query->with('student', 'beca')->get()->map(function ($stuBeca) {
            // Buscar el Career_id en la tabla stu_careers
            $career = StuCareer::where('Student_id', $stuBeca->Student_id)->first();
            
            // Si se encuentra el Career_id, buscar el nombre de la carrera
            $careerName = $career ? \App\Models\Career::where('id', $career->Career_id)->value('name') : 'Sin carrera';

            // Buscar el campus del estudiante
            $stuCampus = StuCampus::where('Student_id', $stuBeca->Student_id)->first();
            $campusName = $stuCampus ? \App\Models\Campus::where('id', $stuCampus->Campus_id)->value('Name') : 'Sin campus';

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
                'Campus' => $campusName,
            ];
        });
    
        // Define el nombre del archivo
        $filename = 'Estudiantes_Becas.csv';
    
        // Crear un archivo CSV en memoria
        $handle = fopen('php://output', 'w');
        ob_start(); // Captura la salida del archivo en un buffer
    
        // Agregar encabezados al CSV
        fputcsv($handle, ['ID', 'Nombre', 'Apellido', 'Cédula del estudiante', 'Telefono', 'Email', 'Semestre', 'Beca', 'Carrera', 'Campus']);
    
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
