
@extends('layouts.app')

@section('title', 'Tipos de documentos')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

@section('title2', 'Tipos de documentos')

@section('content')
	<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="margin-top:10px">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Descripcion</th>            
                <th class="text-center">
                    @cannot('isAdmin')
                        <a href="/tipoDocumento/create" class="btn btn-primary btn-sm" id="nuevo"  
                            data-toggle="tooltip" title="Nuevo Tipo de Documento">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Nuevo
                        </a> 
                    @endcannot
                </th>
            </tr>
        </thead>
        <tbody>
            @include('common.success')

            @foreach($tipoDocumentos as $tipoDocumento)
                <tr>
                    <td>{{$tipoDocumento->f009_id_tipo_documento}}</td>
                    <td>{{$tipoDocumento->f009_descripcion}}</td>
                    <td class="text-center">
                        @auth
                        <form method="POST" action="/tipoDocumento/{{$tipoDocumento->f009_id_tipo_documento}}" accept-charset="UTF-8" 
                            style="display:inline">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">					
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" style="margin-right: 10px">	</button>				
                        </form>
                        <a href="/tipoDocumento/{{$tipoDocumento->f009_id_tipo_documento}}/edit"><i class="btn btn-info btn-sm fa fa-edit"></i></a>
                        @endauth
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>	
    {{ $tipoDocumentos->links()}}
@endsection
