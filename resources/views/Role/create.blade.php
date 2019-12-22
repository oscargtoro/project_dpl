@extends('layouts.app')

@section('title', 'Creación de Rol')
@section('title2', 'Nuevo Rol')

@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/role" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<div class="form-group">
							<label for="name">Rol</label>
							<input type="text" class="form-control" name="name" id="name" aria-describedby="roleHelp">
							<small id="roleHelp" class="form-text text-muted">Nombre del Rol</small>
						</div>
						<div class="form-group" id="myModal">
							<label for="permissions">Permisos</label>
							<div class="nav-sel">
							<select class="form-control m-sel" name="permissions[]" multiple id="permissions">
								@foreach($permissions as $permission)
									<option value="{{$permission->id}}" >{{$permission->name}}</option>
								@endforeach
							</select>
							
							</div>
						</div>
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
					</form>
					<a href="/role" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function() {
			$('.m-sel').select2({
				theme: 'bootstrap4',
				width: 'resolve',
				allowClear: true,
				dropdownParent: $('#myModal'),
				placeholder: 'Seleccione los permisos'
			});
		});
	</script>

@endsection


