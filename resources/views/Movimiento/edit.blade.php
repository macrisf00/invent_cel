@extends('layouts.app')

@section('title', 'Actualización de Producto')
@section('title2', 'Actualización de Producto')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/movimiento/{{$movimiento->f002_id_movto}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						<div class="form-group">
							<label for="f002_imei">Imei </label>
							<select name='f002_imei' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($productos as $producto)
									@if($movimiento->f002_imei == $producto->f008_id_usuario)
										<option selected value = '{{ $producto->f008_id_usuario }}'> {{ $producto->f008_id_usuario }} </option>
									@else
										<option value = '{{ $producto->f008_id_usuario }}'> {{ $producto->f008_id_usuario }} </option>
									@endif
								@endforeach
							</select>
						</div>
						
						<div class="form-group">
							<label for="f002_fecha_entrada">Fecha_Entrada</label>
							<input type="date" value = '{{$movimiento->f002_fecha_entrada}}' class="form-control" name="f002_fecha_entrada"/>
							{!! $errors->first('f002_fecha_entrada', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>
						
						<div class="form-group">
							<label for="f002_id_asesor_e">Asesor Entrada</label>
							<select name='f002_id_asesor_e' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($usuarios as $Usuuario)
									@if($movimiento->f002_id_asesor_e == $usuario->f003_imei)
										<option selected value = '{{ $producto->f002_id_asesor_e }}'> {{ $producto->f003_imei }} </option>
									@else
										<option value = '{{ $producto->f002_id_asesor_e }}'> {{ $producto->f003_imei }} </option>
									@endif
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="f002_id_local_e">Local Entrada </label>
							<select name='f002_id_local_e' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($locales as $local)
									@if($movimiento->f002_id_local_e == $local->f010_id_local)
										<option selected value = '{{ $local->f010_id_local }}'> {{ $local->f010_id_local }} </option>
									@else
										<option value = '{{ $local->f010_id_local }}'> {{ $local->f010_id_local }} </option>
									@endif
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="f002_id_proveedor">Proveedor </label>
							<select name='f002_id_proveedor' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($usuarios as $usuario)
									@if($movimiento->f002_id_proveedor == $usuario->f008_id_usuario)
										<option selected value = '{{ $usuario->f008_id_usuario }}'> {{ $usuario->f008_id_usuario }} </option>
									@else
										<option value = '{{ $usuario->f008_id_usuario }}'> {{ $usuario->f008_id_usuario }} </option>
									@endif
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="f002_fecha_salida">Fecha Salida</label>
							<input type="date" value = '{{$movimiento->f002_fecha_salida}}' class="form-control" name="f002_fecha_salida"/>
							{!! $errors->first('f002_fecha_salida', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>

						<div class="form-group">
							<label for="f002_id_asesor_s">Asesor Salida</label>
							<select name='f002_id_asesor_s' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($usuarios as $Usuuario)
									@if($movimiento->f002_id_asesor_s == $usuario->f008_id_usuario)
										<option selected value = '{{ $usuario->f002_id_asesor_e }}'> {{ $usuario->f008_id_usuario }} </option>
									@else
										<option value = '{{ $usuario->f002_id_asesor_e }}'> {{ $usuario->f008_id_usuario }} </option>
									@endif
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="f002_id_local_s">Local Salida </label>
							<select name='f002_id_local_s' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($locales as $local)
									@if($movimiento->f002_id_local_s == $local->f010_id_local)
										<option selected value = '{{ $local->f010_id_local }}'> {{ $local->f010_id_local }} </option>
									@else
										<option value = '{{ $local->f010_id_local }}'> {{ $local->f010_id_local }} </option>
									@endif
								@endforeach
							</select>
						</div>
						
												
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/movimiento" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
