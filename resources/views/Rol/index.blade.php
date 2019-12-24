
@extends('layouts.app')

@section('title', 'Roles')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

@section('title2', 'Roles')

@section('content')
	<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="margin-top:10px">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Descripcion</th>
                <th>Crear</th>
                <th>Eliminar</th>
                <th>Editar</th>
                <th>Consultar</th>            
                <th class="text-center">
                    @cannot('isAdmin')
                        <a href="/rol/create" class="btn btn-primary btn-sm" id="nuevo"  
                            data-toggle="tooltip" title="Nuevo Rol">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Nuevo
                        </a> 
                    @endcannot
                </th>
            </tr>
        </thead>
        <tbody>
            @include('common.success')

            @foreach($roles as $rol)
                <tr>
                    <td>{{$rol->f013_id_rol}}</td>
                    <td>{{$rol->f013_descripcion}}</td>
                    <td>{{$rol->f013_crear}}</td>
                    <td>{{$rol->f013_eliminar}}</td>
                    <td>{{$rol->f013_editar}}</td>
                    <td>{{$rol->f013_consultar}}</td>
                    <td class="text-center">
                        @auth
                        <form method="POST" action="/rol/{{$rol->f011_id_rol}}" accept-charset="UTF-8" 
                            style="display:inline">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">					
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" style="margin-right: 10px">	</button>				
                        </form>
                        <a href="/rol/{{$rol->f013_id_rol}}/edit"><i class="btn btn-info btn-sm fa fa-edit"></i></a>
                        @endauth
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>	
    {{ $roles->links()}}
@endsection
