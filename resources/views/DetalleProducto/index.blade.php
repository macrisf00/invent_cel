
@extends('layouts.app')

@section('title', 'Listado de Productos')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

@section('title2', 'Listado de Productos')

@section('content')
	<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="margin-top:10px">
        <thead>
            <tr>
                <th>Imei</th>
                <th>Referencia</th>            
                <th>Precio Compra</th>
                <th>Precio Venta</th>
                <th>Iva</th>
                <th>Descuento</th>
                <th class="text-center">
                    @cannot('isAdmin')
                        <a href="/producto/create" class="btn btn-primary btn-sm" id="nuevo"  
                            data-toggle="tooltip" title="Nueva Producto">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Nueva
                        </a> 
                    @endcannot
                </th>
            </tr>
        </thead>
        <tbody>
            @include('common.success')

            @foreach($productos as $producto)
                <tr>
                    <td>{{$producto->f003_imei}}</td>
                    <td>{{$producto->f003_referencia}}</td>
                    <td>{{$producto->f003_precio_compra}}</td>
                    <td>{{$producto->f003_precio_venta}}</td>
                    <td>{{$producto->f003_iva}}</td>
                    <td>{{$producto->f003_descuento}}</td>
                    <td class="text-center">
                        @auth
                        <form method="POST" action="/producto/{{$producto->f003_imei}}" accept-charset="UTF-8" 
                            style="display:inline">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">					
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" style="margin-right: 10px">	</button>				
                        </form>
                        <a href="/producto/{{$producto->f003_imei}}/edit"><i class="btn btn-info btn-sm fa fa-edit"></i></a>
                        @endauth
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>	
    {{ $productos->links()}}
@endsection
