@extends('layouts.app')

@section('title', 'Actualizar roles de usuarios')
@section('title2', 'Actualizar roles de usuarios')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/usuarioRol/{{$usuarioRol->f014_id}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						
						<div class="form-group">
							<label for="f013_id_rol">Rol </label>
							<select name='f013_id_rol' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($roles as $rol)
									@if($rol->f013_id_rol == $rol->f013_id_rol)
										<option selected value = '{{ $rol->f013_id_rol }}'> {{ $rol->f013_descripcion }} </option>
									@else
										<option value = '{{ $rol->f013_id_rol }}'> {{ $rol->f013_descripcion}} </option>
									@endif
								@endforeach
							</select>
						</div>
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/comuna" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
