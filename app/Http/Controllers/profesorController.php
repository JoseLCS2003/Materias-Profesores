<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\materia;
use App\Models\profesor;
use Illuminate\Support\Facades\DB;



class profesorController extends Controller
{
    public function index()
    {
        $profesores=DB::table('profesores')
                        ->join('materias','profesores.materia','=','materias.id')
                        ->select('profesores.id as id','profesores.nombre as nombre','profesores.apPaterno','profesores.apMaterno','profesores.correo','profesores.telefono','materias.nombre as materia')->get();
        return Inertia::render('Materias_Profesores/ProfesoresTabla',['profesores'=>$profesores]);
    }
    public function nuevo()
    {
        $materias=materia::all();
        return Inertia::render('Materias_Profesores/ProfesoresFormularioGuardar',['materias'=>$materias]);
    }
}
