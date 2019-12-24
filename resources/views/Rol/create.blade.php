@extends('layouts.app')

@section('title', 'Creación de Roles')

@section('title2', 'Nuevo Rol')

@section('content')

	<div class="row" >
	<div class="col-sm">
		<div class="card" style="margin-top: 10px;">
			@if($errors->any())
				@foreach($errors->all() as $error)
					{{ $error }}
				@endforeach
			@endif
				
			<div class="card-body">
				
				<form method="POST" action="/rol" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="rol">Rol</label>
						<input type="text" class="form-control" name="f013_descripcion" id="f013_descripcion" value= "{{old('f013_descripcion')}}">
						{!! $errors->first('f013_descripcion', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<div class="form-group">
						<label for="rol">Crear</label>
						<input type="text" class="form-control" name="f013_crear" id="f013_crear" value= "{{old('f013_crear')}}">
						{!! $errors->first('f013_crear', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<div class="form-group">
						<label for="rol">Elminar</label>
						<input type="text" class="form-control" name="f013_eliminar" id="f013_eliminar" value= "{{old('f013_eliminar')}}">
						{!! $errors->first('f013_eliminar', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<div class="form-group">
						<label for="rol">Editar</label>
						<input type="text" class="form-control" name="f013_editar" id="f013_editar" value= "{{old('f013_editar')}}">
						{!! $errors->first('f013_editar', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<div class="form-group">
						<label for="rol">Consultar</label>
						<input type="text" class="form-control" name="f013_consultar" id="f013_consultar" value= "{{old('f013_consultar')}}">
						{!! $errors->first('f013_consultar', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					
					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/tipoTelefono" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection


