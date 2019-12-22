
@extends('layouts.app')

@section('title', 'Listado de Ciudades')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

@section('title2', 'Listado de ciudades')

@section('content')
<table class="table table-hover table-striped table-bordered">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Codigo</th>
        <th scope="col">Ciudad</th>
        <th class="text-center">
            <a href="/" class="btn btn-primary btn-sm" id="volver"  
                data-toggle="tooltip" title="volver a roles">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                Regresar
                </a>
            <a href="/city/create" class="btn btn-primary btn-sm" id="nuevo"  
                data-toggle="tooltip" title="Nueva Ciudad">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Nueva
            </a> 
        </th>
      </tr>
    </thead>
    <tbody>
        @include('common.success')
            @foreach($cities as $city)
                <tr>
                    <td>{{$city->id}}</td>
                    <td>{{$city->name}}</td>
                    <td class="text-center">
                        <form method="POST" action="/city/{{$city->id}}" accept-charset="UTF-8" 
                            style="display:inline">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">					
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" style="margin-right: 10px">	</button>				
                        </form>
                        <a href="/city/{{$city->id}}/edit"><i class="btn btn-info btn-sm fa fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach
    </tbody>
@endsection
