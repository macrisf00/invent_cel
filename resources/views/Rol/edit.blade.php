@extends('layouts.app')

@section('title', 'Actualización de Roles')
@section('title2', 'Actualización de Roles')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/rol/{{$rol->f013_id_rol}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						<div class="form-group">
							<label for="f013_descripcion">Descripción</label>							
							<input type="text" value =  "{{old('f013_descripcion', $rol->f013_descripcion)}}" class="form-control" name="f013_rol"/>
							{!! $errors->first('f013_descripcion', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>

						<div class="form-group">
							<label for="f013_crear">Crear</label>							
							<input type="text" value =  "{{old('f013_crear', $rol->f013_crear)}}" class="form-control" name="f013_rol"/>
							{!! $errors->first('f011_crear', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>

						<div class="form-group">
							<label for="f013_eliminar">Eliminar</label>							
							<input type="text" value =  "{{old('f013_eliminar', $rol->f013_eliminar)}}" class="form-control" name="f013_rol"/>
							{!! $errors->first('f011_eliminar', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>

						<div class="form-group">
							<label for="f013_editar">Editar</label>							
							<input type="text" value =  "{{old('f013_editar', $rol->f013_editar)}}" class="form-control" name="f013_rol"/>
							{!! $errors->first('f011_editar', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>

						<div class="form-group">
							<label for="f013_consultar">consultar</label>							
							<input type="text" value =  "{{old('f013_consultar', $rol->f013_consultar)}}" class="form-control" name="f013_rol"/>
							{!! $errors->first('f011_consultar', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>
						
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/rol" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
