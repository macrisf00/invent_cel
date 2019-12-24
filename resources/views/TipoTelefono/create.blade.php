@extends('layouts.app')

@section('title', 'Creación de Tipos de Teléfono')

@section('title2', 'Nuevo Tipo de Teléfono')

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
				
				<form method="POST" action="/tipoTelefono" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="tipoTelefono">Tipo de Teléfono</label>
						<input type="text" class="form-control" name="f011_descripcion" id="f011_descripcion" value= "{{old('f011_descripcion')}}">
						{!! $errors->first('f011_descripcion', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					
					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/tipoTelefono" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection


