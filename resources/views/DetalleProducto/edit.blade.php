@extends('layouts.app')

@section('title', 'Actualización de Detalle Producto')
@section('title2', 'Actualización de Detalle Producto')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/detalleProducto/{{$detalleProducto->f005_id}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						
						<div class="form-group">
							<label for="f005_imei">Imei </label>
							<select name='f005_imei' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($productos as $producto)
									@if($detalleProducto->f005_imei == $producto->f003_imei)
										<option selected value = '{{ $producto->f003_imei }}'> {{ $producto->f003_imei }} </option>
									@else
										<option value = '{{ $producto->f003_imei }}'> {{ $producto->f003_imei }} </option>
									@endif
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="f005_id_atributo">Atributo </label>
							<select name='f005_id_atributo' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($caracteristicas as $caracteristica)
									@if($detalleProducto->f005_id_atributo == $caracteristica->f004_id_atributo)
										<option selected value = '{{ $caracteristica->f004_id_atributo }}'> {{ $caracteristica->f004_descripcion }} </option>
									@else
										<option value = '{{ $caracteristica->f004_id_atributo }}'> {{ $caracteristica->f004_descripcion }} </option>
									@endif
								@endforeach
							</select>
						</div>
						
						<div class="form-group">
							<label for="f005_valor">Valor</label>
							<input type="text" value = '{{$detalleProducto->f005_valor}}' class="form-control" name="f005_valor"/>
							{!! $errors->first('f005_valor', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>
						
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/detalleProducto" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
