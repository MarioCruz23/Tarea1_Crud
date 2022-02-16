@extends('layouts.vista')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">
        @if(session('EstudianteModificado'))
        <div class="alert alert-success">
            {{ session('EstudianteModificado') }}
        </div>
        @endif
            <div class="card">
            <form action="{{ route('edit', $estudiante->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PATCH')
                    <div class="card-header text-center">MODIFICAR ESTUDIANTE</div>
                    <div class="card-body">
                        <div class="row form-group">
                            <label for="" class="col-2">Nombre</label>
                            <input type="text" name="nombre" class="form-control col-md-9" value="{{ $estudiante->nombre }}">
                        </div>
                        <div class="row form-group">
                            <label for="" class="col-2">Apellido</label>
                            <input type="text" name="apellido" class="form-control col-md-9" value="{{ $estudiante->apellido }}">
                        </div>
                        <div class="row form-group">
                            <label for="" class="col-2">Correo</label>
                            <input type="text" name="correo" class="form-control col-md-9" value="{{ $estudiante->correo }}">
                        </div>
                        <div class="row form-group">
                            <label for="" class="col-2">Numero</label>
                            <input type="text" name="numero" class="form-control col-md-9" value="{{ $estudiante->numero }}">
                        </div>
                        <div class="row form-group">
                            <button type="submit" class="btn btn-success col-md-9 offset-2">Modificar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<a class="btn btn-light btn-xs mt-5" href="{{ url ('/')}}">&laquo</a>
</div>