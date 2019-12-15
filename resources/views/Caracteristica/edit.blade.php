@extends('layouts.app')

@section('title', 'Actualización de Caracteristica')
@section('title2', 'Actualización de Caracteristica')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/caracteristica/{{$caracteristica->f004_id_atributo}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						<div class="form-group">
							<label for="f004_descripcion">Desccripcion</label>							
							<input type="text" value =  "{{old('f004_descripcion', $caracteristica->f004_descripcion)}}" class="form-control" name="f004_descripcion"/>
							{!! $errors->first('f004_descripcion', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>
						
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/comuna" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
