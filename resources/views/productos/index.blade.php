@extends('layouts.main')
@section('title', '2do. Parcial')

@section('content')

    <div class="row mb-3">
        <div class="col">
            <a href="/crear" class="btn btn-primary">Nuevo Producto <i class="fas fa-plus-circle"></i></a>
        </div>
    </div>

    @include('productos/layout/tablaProductos')
@endsection
