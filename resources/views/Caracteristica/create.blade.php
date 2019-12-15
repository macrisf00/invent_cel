@extends('layouts.app')

@section('title', 'Creación de Carateristica')

@section('title2', 'Nueva Caracteristica')

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
				
				<form method="POST" action="/caracteristica" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="caracteristica">Caracteristica</label>
						<input type="text" class="form-control" name="f004_descripcion" id="f004_descripcion" value= "{{old('f004_descripcion')}}">
						{!! $errors->first('f004_descripcion', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					
					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/caracteristica" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection


