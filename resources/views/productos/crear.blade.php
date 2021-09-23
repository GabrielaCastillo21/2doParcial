@extends('productos.layout.formularioProducto')

@section('accion', '/guardarProducto')

@section('tituloFormulario','Crear Producto')

@section('botonAccion')
    <button type="submit" class="btn btn-primary col-3" id="crear" name="crear">Crear</button>
@endsection
