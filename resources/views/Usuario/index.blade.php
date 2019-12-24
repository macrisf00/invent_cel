
@extends('layouts.app')

@section('title', 'Listado de Usuarios')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

@section('title2', 'Listado de Detalle Usuarios')

@section('content')
	<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="margin-top:10px">
        <thead>
            <tr>
                <th>Id</th>
                <th>Imei</th>            
                <th>Atributo</th>
                <th>Valor</th>
                <th class="text-center">
                    @cannot('isAdmin')
                        <a href="/detalleProducto/create" class="btn btn-primary btn-sm" id="nuevo"  
                            data-toggle="tooltip" title="Nueva Detalle Producto">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Nueva
                        </a> 
                    @endcannot
                </th>
            </tr>
        </thead>
        <tbody>
            @include('common.success')

            @foreach($detalleProductos as $detalleProducto)
                <tr>
                    <td>{{$detalleProducto->f005_id}}</td>
                    <td>{{$detalleProducto->f003_imei}}</td>
                    <td>{{$detalleProducto->f004_descripcion}}</td>
                    <td>{{$detalleProducto->f005_valor}}</td>
                    <td class="text-center">
                        @auth
                        <form method="POST" action="/detalleProducto/{{$detalleProducto->f005_id}}" accept-charset="UTF-8" 
                            style="display:inline">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">					
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" style="margin-right: 10px">	</button>				
                        </form>
                        <a href="/detalleProducto/{{$detalleProducto->f005_id}}/edit"><i class="btn btn-info btn-sm fa fa-edit"></i></a>
                        @endauth
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>	
    {{ $detalleProductos->links()}}
@endsection
