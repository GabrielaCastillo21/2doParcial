@extends('layouts.main')
@section('title', '2do. Parcial')

@section('content')
    <div class="row">
        <div class="col">
            <h3 class="text-center">@yield('tituloFormulario')</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="@yield('accion')" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $producto->id }}">
                <div class="mb-3">
                    <label for="nombreProducto" class="form-label">Nombre Producto</label>
                    <input type="text" class="form-control" id="nombreProducto" name="nombreProducto"
                        value="{{ $producto->producto }}" required>
                </div>
                <div class="mb-3">
                    <label for="marcaId" class="form-label">Marca</label>
                    <select class="form-control" name="marcaId" id="marcaId" required>
                        <option value="">Seleccione marca</option>
                        @foreach ($marcas as $marca)
                            <option value="{{ $marca->id }}" 
                                @if ($producto != null && $producto->marca_id == $marca->id)
                                    selected
                                @endif
                            >
                            {{ $marca->marca }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripcion</label>
                    <textarea type="text" class="form-control" id="descripcion" name="descripcion" rows="4"
                        required>{{ $producto->descripcion }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="precioCosto" class="form-label">Precio costo</label>
                    <input type="number" class="form-control" id="precioCosto" name="precioCosto" min="0"
                        value="{{ $producto->precio_costo }}" required>
                </div>
                <div class="mb-3">
                    <label for="precioVenta" class="form-label">Precio Venta</label>
                    <input type="number" class="form-control" id="precioVenta" name="precioVenta" min="0"
                        value="{{ $producto->precio_venta }}" required>
                </div>
                <div class="mb-3">
                    <label for="existencia" class="form-label">Existencia</label>
                    <input type="number" class="form-control" id="existencia" name="existencia" min="0"
                        value="{{ $producto->existencia }}" required>
                </div>
                <div class="mb-3">
                    @yield('botonAccion')
                    <a href="/" class="btn btn-secondary col-3" id="cancelar" name="cancelar">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
