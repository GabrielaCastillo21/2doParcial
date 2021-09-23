<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function Index(){
        $productos=Producto::all();
        return view('productos/index',compact("productos"));
    }

    public function crearProducto(){
        $marcas=Marca::all();
        $producto=new Producto();

        return view('productos/crear',compact("marcas",'producto'));
    }

    public function guardarProducto(Request $request){

        $producto=$this->popularProducto($request);

        $producto->save();

        return redirect('/');
    }

    public function editar(int $id){
        $producto=Producto::find($id);
        $marcas=Marca::all();

        return view('productos/editar',compact("producto",'marcas'));
    }

    public function actualizarProducto(Request $request){
        $producto=Producto::find($request->id);

        $productoActualizado=$this->popularProducto($request,$producto);

        $productoActualizado->save();

        return redirect('/');
    }

    public function eliminar(int $id){
        $producto=Producto::find($id);
        $marcas=Marca::all();

        return view('productos/eliminar',compact("producto",'marcas'));
    }

    public function eliminarProducto(Request $request){
        $producto=Producto::find($request->id);

        $producto->delete();

        return redirect('/');
    }

    private function popularProducto(Request $request, Producto $producto = null)
    {
        if($producto == null){
            $producto=new Producto();
        }

        $producto->producto = $request->nombreProducto;
        $producto->marca_id = $request->marcaId;
        $producto->descripcion = $request->descripcion;
        $producto->precio_costo = $request->precioCosto;
        $producto->precio_venta = $request->precioVenta;
        $producto->existencia = $request->existencia;

        return $producto;
    }

}
