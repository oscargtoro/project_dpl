
@extends('layouts.app')

@section('title', 'Listado de Permisos')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

@section('title2', 'Listado de Permisos')

@section('content')
<table class="table table-hover table-striped table-bordered">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Codigo</th>
        <th scope="col">permiso</th>
        <th class="text-center">
            <a href="/" class="btn btn-primary btn-sm" id="volver"  
                data-toggle="tooltip" title="volver a roles">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                Regresar
                </a>
            <a href="/permission/create" class="btn btn-primary btn-sm" id="nuevo"  
                data-toggle="tooltip" title="Nuevo permiso">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Nuevo
            </a> 
        </th>
      </tr>
    </thead>
    <tbody>
        @include('common.success')
            @foreach($permissions as $permission)
                <tr>
                    <td>{{$permission->id}}</td>
                    <td>{{$permission->name}}</td>
                    <td class="text-center">
                        <form method="POST" action="/permission/{{$permission->id}}" accept-charset="UTF-8" 
                            style="display:inline">
                            @csrf
                            @method('DELETE')				
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" style="margin-right: 10px">	</button>				
                        </form>
                        <a href="/permission/{{$permission->id}}/edit"><i class="btn btn-info btn-sm fa fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach
    </tbody>
@endsection
