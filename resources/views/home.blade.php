@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu de Administrador</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul class="nav flex-column">
                        <li class="nav-item">
                        <a class="nav-link active" href="{{route("producto.index")}}">Productos</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{route("movimiento.index")}}">Movimientos</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{route("caracteristica.index")}}">Caracteristicas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("detalleProducto.index")}}">Detalle Producto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("tipoUsuario.index")}}">Tipos De Usuario</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("tipoDocumento.index")}}">Tipos De Documento</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("local.index")}}">Locales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("tipoTelefono.index")}}">Tipos de Telefonos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("rol.index")}}">Roles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("usuarioRol.index")}}">Usuario Rol</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                      </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
