@extends('layouts.app')

@section('title', 'Creación de Detalle Producto')

@section('title2', 'Nueva Detalle Producto')

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
				
				<form method="POST" action="/detalleProducto" accept-charset="UTF-8" style="display:inline">
					@csrf			
					
					<div class="form-group">
						<label for="f005_imei">Imei </label>
						<select name='f005_imei' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($productos as $producto)
									<option value = '{{ $producto->f003_imei }}'
									{{(old('f005_imei') ==$producto->f003_imei)? 'selected':''}} > {{ $producto->f003_imei }}
									</option>
							@endforeach
						</select>
						<small id="detalleProductolHelp" class="form-text text-muted">
						{!! $errors->first('f005_imei', '<div class="alert alert-danger" role="alert">:message</div>')!!}</small>
					</div>

					<div class="form-group">
						<label for="f005_id_atributo">Atributo </label>
						<select name='f005_id_atributo' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($caracteristicas as $caracteristica)
									<option value = '{{ $caracteristica->f004_id_atributo }}'
									{{(old('f005_id_atributo') ==$caracteristica->f004_id_atributo)? 'selected':''}} > {{ $caracteristica->f004_descripcion }}
									</option>
							@endforeach
						</select>
						<small id="detalleProductolHelp" class="form-text text-muted">
							{!! $errors->first('f005_id_atributo', '<div class="alert alert-danger" role="alert">:message</div>')!!}</small>
					</div>
					

                    <div class="form-group">
						<label for="f005_valor">Valor</label>
						<input type="text" class="form-control" name="f005_valor" id="f005_valor" value ={{old('f005_valor')}}>
						<small id="detalleProductolHelp" class="form-text text-muted">
						{!! $errors->first('f005_valor', '<div class="alert alert-danger" role="alert">:message</div>')!!}</small>
					</div>
					
					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/detalleProducto" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection


