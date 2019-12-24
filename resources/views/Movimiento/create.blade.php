@extends('layouts.app')

@section('title', 'Creación de Producto')

@section('title2', 'Nueva Producto')

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
				
				<form method="POST" action="/producto" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="producto">Imei del producto</label>
						<input type="text" class="form-control" name="f003_imei" id="f003_imei" value ={{old('f003_imei')}}>
						<small id="productolHelp" class="form-text text-muted">
						{!! $errors->first('f003_imei', '<div class="alert alert-danger" role="alert">:message</div>')!!}</small>
                    </div>
					<div class="form-group">
						<label for="producto">Referencia</label>
						<input type="text" class="form-control" name="f003_referencia" id="f003_referencia" value ={{old('f003_referencia')}}>
						<small id="productolHelp" class="form-text text-muted">
						{!! $errors->first('f003_referencia', '<div class="alert alert-danger" role="alert">:message</div>')!!}</small>
                    </div>

                    <div class="form-group">
						<label for="producto">Precio Compra</label>
						<input type="double" class="form-control" name="f003_precio_compra" id="f003_precio_compra" value ={{old('f003_precio_compra')}}>
						<small id="productolHelp" class="form-text text-muted">
						{!! $errors->first('f003_precio_compra', '<div class="alert alert-danger" role="alert">:message</div>')!!}</small>
                    </div>
                    
                    <div class="form-group">
						<label for="producto">Precio Venta</label>
						<input type="double" class="form-control" name="f003_precio_venta" id="f003_precio_venta" value ={{old('f003_precio_venta')}}>
						<small id="productolHelp" class="form-text text-muted">
						{!! $errors->first('f003_precio_venta', '<div class="alert alert-danger" role="alert">:message</div>')!!}</small>
					</div>
					
					<div class="form-group">
						<label for="producto">Iva</label>
						<input type="double" class="form-control" name="f003_iva" id="f003_iva" value ={{old('f003_iva')}}>
						<small id="productolHelp" class="form-text text-muted">
						{!! $errors->first('f003_iva', '<div class="alert alert-danger" role="alert">:message</div>')!!}</small>
                    </div>

                    <div class="form-group">
						<label for="producto">Descuento</label>
						<input type="double" class="form-control" name="f003_descuento" id="f003_descuento" value ={{old('f003_descuento')}}>
						<small id="productolHelp" class="form-text text-muted">
						{!! $errors->first('f003_descuento', '<div class="alert alert-danger" role="alert">:message</div>')!!}</small>
                    </div>
					
					
					



					
					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/comuna" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection


