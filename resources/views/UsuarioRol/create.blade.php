@extends('layouts.app')

@section('title', 'Asignación de roles')

@section('title2', 'Nueva asignación')

@section('content')

	<div class="row" >
	<div class="col-sm">
		<div class="card" style="margin-top: 10px;">
			<div class="card-body">
				<form method="POST" action="/usuarioRol" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="usuario">Usuario</label>
						<select name='f008_id_usuario' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($usuarios as $usuario)
								<option value = '{{ $usuario->f008_id_usuario }}'> {{ $usuario->f008_numero_doc }} </option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="rol">Rol</label>
						<select name='f013_id_rol' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($roles as $rol)
								<option value = '{{ $rol->f013_id_rol }}'> {{ $rol->f013_descripcion }} </option>
							@endforeach
						</select>
					</div>
					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Asignar </button>				
				</form>
				<a href="/comuna" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection


