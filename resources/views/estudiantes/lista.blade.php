@extends('layouts.vista')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-5">Estudiantes Registrados</h2>
            <a class="btn btn-success mb-4" href="{{ url('/form') }}">Nuevo registro</a>
            <table class="table table-bordered table-strpied text-center">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Numero</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($estudiantes as $estudiante)
                     <tr>
                         <td>{{ $estudiante->nombre }}</td>
                         <td>{{ $estudiante->apellido }}</td>
                         <td>{{ $estudiante->correo }}</td>
                         <td>{{ $estudiante->numero }}</td>
                     </tr>   
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>