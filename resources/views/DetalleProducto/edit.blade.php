@extends('layouts.app')

@section('title', 'Actualización de Producto')
@section('title2', 'Actualización de Producto')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/producto/{{$producto->f003_imei}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						<div class="form-group">
							<label for="f003_referencia">Referencia</label>
							<input type="text" value = '{{$producto->f003_referencia}}' class="form-control" name="f003_referencia"/>
							{!! $errors->first('f003_referencia', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>
						
						<div class="form-group">
							<label for="f003_precio_compra">Precio de Compra</label>
							<input type="text" value = '{{$producto->f003_precio_compra}}' class="form-control" name="f003_precio_compra"/>
							{!! $errors->first('f003_precio_compra', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>
						
						<div class="form-group">
							<label for="f003_precio_venta">Precio de Venta</label>
							<input type="text" value = '{{$producto->f003_precio_venta}}' class="form-control" name="f003_precio_venta"/>
							{!! $errors->first('f003_precio_venta', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>
						
						<div class="form-group">
							<label for="f003_iva">Iva</label>
							<input type="text" value = '{{$producto->f003_iva}}' class="form-control" name="f003_iva"/>
							{!! $errors->first('f003_precio_venta', '<div class="alert alert-danger" role="alert">:message</div>')!!}
                        </div>
						
						<div class="form-group">
							<label for="f003_descuento">Descuento</label>
							<input type="text" value = '{{$producto->f003_descuento}}' class="form-control" name="f003_descuento"/>
							{!! $errors->first('f003_descuento', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>
						
						
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/producto" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
