
@extends('layouts.app')

@section('title', 'Listado de Locales')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

@section('title2', 'Listado de Locales')

@section('content')
<table class="table table-hover table-striped table-bordered">
    <thead class="table-primary">
      <tr>
        <th scope="col">Codigo</th>
        <th scope="col">Local</th>
        <th class="text-center">
            <a href="/" class="btn btn-primary btn-sm" id="volver"  
                data-toggle="tooltip" title="volver a roles">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                Regresar
                </a>
            <a href="/local/create" class="btn btn-primary btn-sm" id="nuevo"  
                data-toggle="tooltip" title="Nuevo local">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Nuevo
            </a> 
        </th>
      </tr>
    </thead>
    <tbody>
        @include('common.success')
            @foreach($locals as $local)
                <tr>
                    <td>{{$local->id}}</td>
                    <td>{{$local->name}}</td>
                    <td class="text-center">
                        <form method="POST" action="/local/{{$local->id}}" accept-charset="UTF-8" 
                            style="display:inline">
                            @csrf
                            @method('DELETE')				
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" style="margin-right: 10px">	</button>				
                        </form>
                        <a href="/local/{{$local->id}}/edit"><i class="btn btn-info btn-sm fa fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach
    </tbody>
@endsection
