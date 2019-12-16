@extends('layouts.app')

@section('title', 'Creación de Local')

@section('title2', 'Nuevo Local')

@section('content')

	<div class="row" >
	<div class="col-sm">
		<div class="card" style="margin-top: 10px;">
			{{-- 
			@if($errors->any())
				@foreach($errors->all() as $error)
					{{ $error }}
				@endforeach
			@endif
			--}}
				
			<div class="card-body">
				
				<form method="POST" action="/local" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="f010_nombre">Nombre</label>
						<input type="text" class="form-control" name="f010_nombre" id="f010_nombre" value= "{{old('f010_nombre')}}">
						<small id="caracteristicalHelp" class="form-text text-muted">
							{!! $errors->first('f010_nombre', '<div class="alert alert-danger" role="alert">:message</div>')!!}</small>

					</div>

					<div class="form-group">
						<label for="f010_pais">Pais</label>
						<input type="text" class="form-control" name="f010_pais" id="f010_pais" value= "{{old('f010_pais')}}">
						<small id="caracteristicalHelp" class="form-text text-muted">
							{!! $errors->first('f010_pais', '<div class="alert alert-danger" role="alert">:message</div>')!!}</small>

					</div>

					<div class="form-group">
						<label for="f010_departamento">Departamento</label>
						<input type="text" class="form-control" name="f010_departamento" id="f010_departamento" value= "{{old('f010_departamento')}}">
						<small id="caracteristicalHelp" class="form-text text-muted">
							{!! $errors->first('f010_departamento', '<div class="alert alert-danger" role="alert">:message</div>')!!}</small>

					</div>

					<div class="form-group">
						<label for="f010_ciudad">Ciudad</label>
						<input type="text" class="form-control" name="f010_ciudad" id="f010_ciudad" value= "{{old('f010_ciudad')}}">
						<small id="caracteristicalHelp" class="form-text text-muted">
							{!! $errors->first('f010_ciudad', '<div class="alert alert-danger" role="alert">:message</div>')!!}</small>

					</div>
					
					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/local" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection


