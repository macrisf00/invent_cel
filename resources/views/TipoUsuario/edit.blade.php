@extends('layouts.app')

@section('title', 'Actualización de Tipos de usuario')
@section('title2', 'Actualización de Tipos de usuario')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/tipoUsuario/{{$tipoUsuario->f007_id_tipo_usuario}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						<div class="form-group">
							<label for="f007_descripcion">Desccripcion</label>							
							<input type="text" value =  "{{old('f007_descripcion', $tipoUasuario->f007_descripcion)}}" class="form-control" name="f007_descripcion"/>
							{!! $errors->first('f007_descripcion', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>
						
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/tipoUsuario" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
