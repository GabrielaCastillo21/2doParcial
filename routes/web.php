<?php

use Illuminate\Support\Facades\Route;

Route::get('/','ProductoController@Index');

Route::get('/crear','ProductoController@crearProducto');
Route::post('/guardarProducto','ProductoController@guardarProducto');

Route::get('/editar/{id}','ProductoController@editar');
Route::post('/actualizarProducto','ProductoController@actualizarProducto');

Route::get('/eliminar/{id}','ProductoController@eliminar');
Route::post('/eliminarProducto','ProductoController@eliminarProducto');