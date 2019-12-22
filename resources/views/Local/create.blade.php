@extends('layouts.app')

@section('title', 'Creación de Local')

@section('title2', 'Nuevo Local')

@section('content')

	<div class="row" >
	<div class="col-sm">
		<div class="card" style="margin-top: 10px;">
			<div class="card-body">
				<form method="POST" action="/local" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="localName">Local</label>
						<input type="text" class="form-control" name="name" id="localName" aria-describedby="comunalHelp">
						<small id="comunalHelp" class="form-text text-muted">Nombre del Local.</small>
					</div>
					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/local" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection


