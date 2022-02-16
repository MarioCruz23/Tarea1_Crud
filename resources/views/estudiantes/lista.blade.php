@extends('layouts.vista')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-5">Estudiantes Registrados</h2>
            <a class="btn btn-success mb-4" href="{{ url('/form') }}">Nuevo registro</a>
            @if(session('EstudianteELiminado'))
            <div class="alert alert-success">
                {{ session('EstudianteELiminado') }}
            </div>
            @endif
            <table class="table table-bordered table-strpied text-center">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Numero</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($estudiantes as $estudiante)
                     <tr>
                        <td>{{ $estudiante->nombre }}</td>
                        <td>{{ $estudiante->apellido }}</td>
                        <td>{{ $estudiante->correo }}</td>
                        <td>{{ $estudiante->numero }}</td>
                        <td>
                        <a href="{{ route ('editform', $estudiante->id) }}" class="btn btn-primary mb-1">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <br>
                        <a>
                            <form action="{{ route('delete', $estudiante->id) }}" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit" onclick="return confirm('¿Seguro quiere borrar?');" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                                </button>
                        </a>
                         </td>
                     </tr>   
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>