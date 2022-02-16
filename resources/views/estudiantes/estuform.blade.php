@extends('layouts.vista')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">
        @if(session('DatoGuardado'))
        <div class="alert alert-success">
            {{ session('DatoGuardado') }}
        </div>
        @endif
            <div class="card">
            <form action="{{ url ('/save') }}" method="POST" enctype="multipart/form-data">
            @csrf
                    <div class="card-header text-center">AGREGAR ESTUDIANTE</div>
                    <div class="card-body">
                        <div class="row form-group">
                            <label for="" class="col-2">Nombre</label>
                            <input type="text" name="nombre" class="form-control col-md-9">
                        </div>
                        <div class="row form-group">
                            <label for="" class="col-2">Apellido</label>
                            <input type="text" name="apellido" class="form-control col-md-9">
                        </div>
                        <div class="row form-group">
                            <label for="" class="col-2">Correo</label>
                            <input type="text" name="correo" class="form-control col-md-9">
                        </div>
                        <div class="row form-group">
                            <label for="" class="col-2">Numero</label>
                            <input type="text" name="numero" class="form-control col-md-9">
                        </div>
                        <div class="row form-group">
                            <button type="submit" class="btn btn-success col-md-9 offset-2">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<a class="btn btn-light btn-xs mt-5" href="{{ url ('/')}}">&laquo</a>
</div>