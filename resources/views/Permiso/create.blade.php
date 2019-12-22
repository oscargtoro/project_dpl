@extends('layouts.app')

@section('title', 'Creación de Permiso')

@section('title2', 'Nuevo Permiso')

@section('content')

	<div class="row" >
	<div class="col-sm">
		<div class="card" style="margin-top: 10px;">
			<div class="card-body">
				<form method="POST" action="/permiso" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="comuna">Permiso</label>
						<input type="text" class="form-control" name="permisoNom" id="nombre" aria-describedby="comunalHelp">
						<small id="comunalHelp" class="form-text text-muted">Nombre del Permiso.</small>
					</div>
					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/permiso" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection


