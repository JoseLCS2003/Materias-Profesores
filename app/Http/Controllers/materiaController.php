<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\materia;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;



class materiaController extends Controller
{
    public function index()
    {
        $materia=materia::all();
        return Inertia::render('Materias_Profesores/MateriasTabla',['materias'=>$materia]);
    }
    public function agregar()
    {
        return Inertia::render('Materias_Profesores/MateriasFormularioGuardar');
    }
    public function create(Request $request)
    {
        materia::create($request->validate([
            'nombre'=>['required','max:30'],
            'unidades'=>['required','numeric']
        ]));
        return to_route('materias.index');
    }
    public function editar(Request $request)
    {
        $materia=materia::find($request->id);
        return Inertia::render('Materias_Profesores/MateriasFormularioActualizar',['materia'=>$materia]);
    }
    public function update(Request $request)
    {
        $materia=materia::find($request->id);
        $materia->nombre = $request->nombre;
        $materia->unidades = $request->unidades;
        $materia->save();
        return to_route('materias.index');
    }
    public function eliminar(Request $request)
    {
        $materia=materia::find($request->id);
        $materia->delete();
        return to_route('materias.index');
    } 
    public function materiaProfesor(Request $request)
    {
        $materia=materia::find($request->id);
        $profesores=DB::table('profesores')
                        ->join('materias','profesores.materia','=','materias.id')
                        ->select('profesores.id as id','profesores.nombre as nombre','profesores.apPaterno','profesores.apMaterno','profesores.correo','profesores.telefono','materias.nombre as materias')
                        ->where('materias.id','=',$materia->id)
                        ->get();
    }   
}
