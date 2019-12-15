
@extends('layouts.app')

@section('title', 'Listado de Caracteristica')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

@section('title2', 'Listado de Caracteristica')

@section('content')
	<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="margin-top:10px">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Descripcion</th>            
                <th class="text-center">
                    @cannot('isAdmin')
                        <a href="/caracteristica/create" class="btn btn-primary btn-sm" id="nuevo"  
                            data-toggle="tooltip" title="Nueva Caracteristica">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Nueva
                        </a> 
                    @endcannot
                </th>
            </tr>
        </thead>
        <tbody>
            @include('common.success')

            @foreach($caracteristicas as $caracteristica)
                <tr>
                    <td>{{$caracteristica->f004_id_atributo}}</td>
                    <td>{{$caracteristica->f004_descripcion}}</td>
                    <td class="text-center">
                        @auth
                        <form method="POST" action="/caracteristica/{{$caracteristica->f004_id_atributo}}" accept-charset="UTF-8" 
                            style="display:inline">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">					
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" style="margin-right: 10px">	</button>				
                        </form>
                        <a href="/caracteristica/{{$caracteristica->f004_id_atributo}}/edit"><i class="btn btn-info btn-sm fa fa-edit"></i></a>
                        @endauth
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>	
    {{ $caracteristicas->links()}}
@endsection
