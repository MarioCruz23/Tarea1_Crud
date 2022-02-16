<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EstudianteController extends Controller
{
    public function lista(){
        $data['estudiantes'] = \App\Models\Estudiante::paginate(10);
        return view('estudiantes.lista', $data);
    }
    public function estuform(){
        return view('estudiantes.estuform');
    }
    public function save(Request $request){
        $estudata = request()->except('_token');
        \App\Models\Estudiante::insert($estudata);
        return back()->with('DatoGuardado','Dato del Estudiante Guardado');
    }
    public function delete($id){
        \App\Models\Estudiante::destroy($id);
        return back()->with('EstudianteELiminado','Registro Eliminado');
    }
    public function editform($id){
        $estudiante = \App\Models\Estudiante::findOrFail($id);
        return view('estudiantes.editform', compact('estudiante'));
    }
    public function edit(Request $request, $id){
        $datoestudiante = request()->except((['_token', '_method']));
        \App\Models\Estudiante::where('id', '=', $id)->update($datoestudiante);
        return back()->with('EstudianteModificado','Registro Modificado');
    }
}
