
@extends('layouts.app')

@section('title', 'Listado de roles')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

@section('title2', 'Listado de roles')

@section('content')
<table class="table table-hover table-striped">
    <thead class="table-primary">
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Creado</th>
        <th class="text-center">
            <div>
                <a href="/" class="btn btn-primary btn-sm" id="volver"  
                data-toggle="tooltip" title="volver a roles">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                Regresar
                </a>
                <a href="/role/create" class="btn btn-primary btn-sm" id="nuevo"  
                data-toggle="tooltip" title="Nuevo role">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Nuevo
                </a> 
            </div>
        </th>
      </tr>
    </thead>
    <tbody>
        @include('common.success')
            @foreach($roles as $role)
                <tr>
                    <td class="align-middle">{{$role->name}}</td>
                    <td class="align-middle">{{$role->created_at}}</td>
                    <td class="text-center align-middle">
                        <a href="/role/{{$role->id}}"><i class="btn btn-info btn-sm fa fa-eye" style="margin-right: 10px"></i></a>
                        <form method="POST" action="/role/{{$role->id}}" accept-charset="UTF-8" style="display:inline">
                            @csrf
                            @method('DELETE')				
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash"></button>				
                        </form>
                    </td>
                </tr>
            @endforeach
    </tbody>
@endsection
