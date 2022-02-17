@extends('layouts.vista')
<body class="bg-info">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark"">
  <div class="container-fluid">
    <a class="navbar-brand btn btn-outline-secondary" href="{{ url('/') }}">Tarea1 Crud</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Estudiantes Registrados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/form') }}">Agregar Estudiante</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-5">Estudiantes Registrados</h2>
            <a class="btn btn-success mb-4" href="{{ url('/form') }}">
                <i class="bi bi-folder-plus">Nuevo registro</i>
            </a>
            @if(session('EstudianteELiminado'))
            <div class="alert alert-success">
                {{ session('EstudianteELiminado') }}
            </div>
            @endif
            <table class="table table-bordered table-strpied table-hover table-primary text-center">
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
</body>