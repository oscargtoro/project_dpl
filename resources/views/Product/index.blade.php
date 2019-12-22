
@extends('layouts.app')

@section('title', 'Listado de Productos')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

@section('title2', 'Listado de Productos')

@section('content')
<table class="table table-hover table-striped table-bordered">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Codigo</th>
        <th scope="col">Producto</th>
        <th class="text-center">
            <a href="/product/create" class="btn btn-primary btn-sm" id="nuevo"  
                data-toggle="tooltip" title="Nuevo producto">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Nuevo
            </a> 
        </th>
      </tr>
    </thead>
    <tbody>
        @include('common.success')
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td class="text-center">
                        <form method="POST" action="/product/{{$product->id}}" accept-charset="UTF-8" 
                            style="display:inline">
                            @csrf
                            @method('DELETE')				
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" style="margin-right: 10px">	</button>				
                        </form>
                        <a href="/product/{{$product->id}}/edit"><i class="btn btn-info btn-sm fa fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach
    </tbody>
@endsection
