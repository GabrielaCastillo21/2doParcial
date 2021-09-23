@extends('productos.layout.formularioProducto')

@section('accion', '/actualizarProducto')

@section('tituloFormulario','Editar Producto')

@section('botonAccion')
    <button type="submit" class="btn btn-warning col-3" id="actualizar" name="actualizar">Actualizar</button>
@endsection
