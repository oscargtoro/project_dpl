@extends('layouts.app')

@section('title', 'Actualización de Rol')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

@section('title2', 'Actualización de Rol')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/role/{{$role->id}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						@method('PUT')
							<div class="form-group">
								<input value="{{$role->id}}" type="hidden" name="id">
								<label for="name">Rol</label>
								<input type="text" value='{{$role->name}}' class="form-control" name="name"/>
							</div>
							<div class="form-group" id="myModal">
								<label for="permissions">Permisos</label>
								<div class="nav-sel">
									<select class="form-control m-sel" name="permissions[]" multiple id="permissions">
										@foreach ($role['permissions'] as $rp)
											<option selected value="{{$rp->id}}">{{$rp->name}}</option>
										@endforeach
										@foreach($permissions as $permission)
											<option value="{{$permission->id}}">{{$permission->name}}</option>
										@endforeach
									</select>
								</div>
							</div>
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/role" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>
	
	<script type="application/javascript">
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
