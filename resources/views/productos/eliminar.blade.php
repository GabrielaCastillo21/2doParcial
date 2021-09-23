@extends('productos.layout.formularioProducto')

@section('accion', '/eliminarProducto')

@section('tituloFormulario','Eliminar Producto')

@section('botonAccion')
    <button type="submit" class="btn btn-danger col-3" id="eliminar" name="eliminar">Eliminar</button>
@endsection
