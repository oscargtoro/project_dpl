@extends('layouts.app')

@section('title', 'Actualización de Rol')
@yield('link', '<link href="path/to/select2.min.css" rel="stylesheet" />')
@section('title2', 'Actualización de Rol')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/rol/{{$rol->rolCod}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						@method('PUT')
						<div class="form-group">
							<label for="nombre">Rol</label>
							<input type="text" value = '{{$rol->nombre_rol}}' class="form-control" name="nombre"/>
							<select multiple class="selectpicker w-100" name="sports[]" id="sports">
								@foreach($rolxpermisos as $permiso)
									<option value="{{$permiso->permisoCod}}">{{$permiso->permisoNom}}</option>
								@endforeach
							</select>
						</div>
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/permiso" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
