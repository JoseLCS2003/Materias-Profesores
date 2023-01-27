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
    public function guardar(Request $request)
    {
        profesor::create($request->validate([
            'nombre'=>['required','max:30'],
            'apPaterno'=>['required','max:30'],
            'apMaterno'=>['required','max:30'],
            'telefono'=>['required'],
            'correo'=>['required','max:30'],
            'materia'=>['required']
        ]));
        return to_route('profesores.index');
    }

    public function editar(Request $request)
    {
        $profesor=profesor::find($request->id);
        $materias=materia::all();
        return Inertia::render('Materias_Profesores/ProfesoresFormularioActualizar',['profesor'=>$profesor,'materias'=>$materias]);
    }
    public function update(Request $request)
    {
        $profesor=profesor::find($request->id);
        $profesor->nombre=$request->nombre;
        $profesor->apPaterno=$request->apPaterno;
        $profesor->apMaterno=$request->apMaterno;
        $profesor->telefono=$request->telefono;
        $profesor->correo=$request->correo;
        $profesor->materia=$request->materia;
        $profesor->save();
        return to_route('profesores.index');
    }

    public function eliminar(Request $request)
    {
        $profesor=profesor::find($request->id);
        $profesor->delete();
        return to_route('profesores.index');
    }
}
