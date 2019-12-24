
@extends('layouts.app')

@section('title', 'Listado de Movimientos')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

@section('title2', 'Listado de Movimientos')

@section('content')
	<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="margin-top:10px">
        <thead>
            <tr>
                <th>Id</th>
                <th>IMEI</th>            
                <th>Fecha de Entrada</th>
                <th>Asesor Entrada</th>
                <th>Local Entrada</th>
                <th>Proveedor</th>
                <th>Fecha Salida</th>
                <th>Asesor Salida</th>
                <th>Local Salida</th>
                <th class="text-center">
                    @cannot('isAdmin')
                        <a href="/movimiento/create" class="btn btn-primary btn-sm" id="nuevo"  
                            data-toggle="tooltip" title="Nueva Movimiento">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Nueva
                        </a> 
                    @endcannot
                </th>
            </tr>
        </thead>
        <tbody>
            @include('common.success')

            @foreach($Movimientos as $movimiento)
                <tr>
                    <td>{{$movimiento->f002_id_movto}}</td>
                    <td>{{$movimiento->f002_imei}}</td>
                    <td>{{$movimiento->f002_fecha_entrada}}</td>
                    <td>{{$movimiento->f002_id_asesor_e}}</td>
                    <td>{{$movimiento->f002_id_proveedor}}</td>
                    <td>{{$movimiento->f002_fecha_salida}}</td>
                    <td>{{$movimiento->f002_id_asesor_s}}</td>
                    <td>{{$movimiento->f002_id_local_s}}</td>
                    <td class="text-center">
                        @auth
                        <form method="POST" action="/movimiento/{{$movimiento->f002_id_movto}}" accept-charset="UTF-8" 
                            style="display:inline">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">					
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" style="margin-right: 10px">	</button>				
                        </form>
                        <a href="/movimiento/{{$movimiento->f002_id_movto}}/edit"><i class="btn btn-info btn-sm fa fa-edit"></i></a>
                        @endauth
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>	
    {{ $movimientos->links()}}
@endsection
