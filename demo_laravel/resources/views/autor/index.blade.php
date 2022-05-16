@extends('layout.template')

@section('title', 'Listado de Autores')
    
@section('content')
    <h1>Listado de Autores</h1>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a type="button" class="btn btn-primary btn-md" href="{{ route('autor.create') }}">Nuevo autor</a>
                <br>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status')}}
                    </div>
                @endif
                <br>
                <table id="autores" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Codigo del autor</th>
                            <th>Nombre del autor</th>
                            <th>Nacionalidad</th>
                            <th>Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($autores as $autor)
                        <tr>
                            <td>{{ $autor->codigo_autor }}</td>
                            <td>{{ $autor->nombre_autor }}</td>
                            <td>{{ $autor->nacionalidad }}</td>
                            <td>
                                <a href="{{ route('autor.edit', $autor->id) }}" class="btn btn-info">Editar</a>
                                <form action="{{ route('autor.delete', $autor->id) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
        </div>                    
    </div>

@endsection