
@extends('layouts.app')

@section('title', 'Listado de Roles')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

@section('title2', 'Listado de Roles')

@section('content')
<table class="table table-hover table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Creado</th>
        <th scope="col">Permisos</th>
        <th class="text-center">
            <a href="/rol/create" class="btn btn-primary btn-sm" id="nuevo"  
                data-toggle="tooltip" title="Nuevo rol">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Nuevo
            </a> 
        </th>
      </tr>
    </thead>
    <tbody>
        @include('common.success')
            @foreach($roles as $rol)
                <tr>
                    <td class="align-middle">{{$rol->rolNom}}</td>
                    <td class="align-middle">{{$rol->created_at}}</td>
                    <td>
                        @foreach($rolxpermisos as $permiso)
                            {{$permiso->permisoNom}}<br>
                        @endforeach
                    </td>
                    <td class="text-center align-middle">
                        <form method="POST" action="/rol/{{$rol->rolCod}}" accept-charset="UTF-8" 
                            style="display:inline">
                            @csrf
                            @method('DELETE')				
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" style="margin-right: 10px">	</button>				
                        </form>
                        <a href="/rol/{{$rol->rolCod}}/edit"><i class="btn btn-info btn-sm fa fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach
    </tbody>
@endsection
