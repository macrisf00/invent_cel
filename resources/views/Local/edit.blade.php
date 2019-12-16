@extends('layouts.app')

@section('title', 'Actualización de local')
@section('title2', 'Actualización de local')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/local/{{$local->f010_id_local}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						<div class="form-group">
							<label for="f010_nombre">Nombre</label>							
							<input type="text" value =  "{{old('f010_nombre', $local->f010_nombre)}}" class="form-control" name="f010_nombre"/>
							{!! $errors->first('f010_nombre', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>

						<div class="form-group">
							<label for="f010_pais">Pais</label>							
							<input type="text" value =  "{{old('f010_pais', $local->f010_pais)}}" class="form-control" name="f010_pais"/>
							{!! $errors->first('f010_pais', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>

						<div class="form-group">
							<label for="f010_departamento">Departamento</label>							
							<input type="text" value =  "{{old('f010_departamento', $local->f010_departamento)}}" class="form-control" name="f010_departamento"/>
							{!! $errors->first('f010_departamento', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>

						<div class="form-group">
							<label for="f010_ciudad">Ciudad</label>							
							<input type="text" value =  "{{old('f010_ciudad', $local->f010_ciudad)}}" class="form-control" name="f010_ciudad"/>
							{!! $errors->first('f010_ciudad', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>

						
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/Local" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
