
@extends('layouts.app')

@section('title', 'Listado de Roles')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

@section('title2', 'Listado de Roles')

@section('content')
<table class="table table-hover table-striped">
    <thead class="table-primary">
      <tr>
        <th scope="col">Rol</th>
        <th scope="col">Permisos</th>
        <th class="text-center align-middle">
            <a href="/role" class="btn btn-primary btn-block" id="volver"  
                data-toggle="tooltip" title="volver a Roles">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                Regresar
            </a> 
        </th>
      </tr>
    </thead>
    <tbody>
        @include('common.success')
        <tr>
            <td class="align-middle">{{$role->name}}</td>
            
                @if(count($role['permissions']) != 0)
                    <td>
                        @foreach($role['permissions'] as $permission)
                            {{$permission->name}}<br>
                        @endforeach
                    </td>
                @else
                    <td>Ninguno</td>
                @endif

            <td class="text-center align-middle">
                <a href="/role/{{$role->id}}/edit"><i class="btn btn-info btn-bg fa fa-edit"></i></a>
            </td>
        </tr>
    </tbody>
@endsection
