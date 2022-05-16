@extends('layout.template')

@section('title', 'Listado de Editoriales')

@section('content')
    <h1>Listado de Editoriales</h1> 

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a type="button" class="btn btn-primary btn-md" href="{{ route('editorial.create') }}"> Nuevo editorial</a>
                <br>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status')}}
                    </div>
                @endif
                <br>
                <table id="editoriales" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Codigo del editorial</th>
                            <th>Nombre del editorial</th>
                            <th>Contacto</th>
                            <th>Telefono</th>
                            <th>Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($editoriales as $editorial)
                        <tr>
                            <td>{{ $editorial->codigo_editorial }}</td>
                            <td>{{ $editorial->nombre_editorial }}</td>
                            <td>{{ $editorial->contacto }}</td>
                            <td>{{ $editorial->telefono }}</td>
                            <td>
                                <a href="{{ route('editorial.edit', $editorial->id) }}" class="btn btn-info">Editar</a>
                                <form action="{{ route('editorial.delete', $editorial->id) }}" method="post">
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