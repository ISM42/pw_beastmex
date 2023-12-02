<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\ImportacionesController;

use App\http\controllers\AlmacenController;
use App\http\controllers\ComprasController;
use App\http\controllers\VentasController;
use App\http\controllers\GerenciaController;


/*Route::get('/', function () {
    return view('login');
});*/

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
/*Route::view('/home','home'); //ruta prueba para commit*/

//RUTAS CRUD ALMACEN
Route::get('producto/create',[AlmacenController::class,'create'])->name('producto.create');
Route::get('/producto/consulta',[AlmacenController::class,'index'])->name('producto.index');
Route::post('/producto',[AlmacenController::class,'store'])->name('producto.store');
Route::post('/producto/{id}/confirm',[AlmacenController::class,'update'])->name('producto.update');
Route::post('/e_producto/{id}/confirm',[AlmacenController::class,'destroy'])->name('producto.destroy');


//RUTAS INDIVIDUALES POR CONTROLADOR:

Route::get('/',[ImportacionesController::class,'metodoLogin'])->name('inicio');
Route::get('/alta_proveedor',[ImportacionesController::class,'metodoAltaProv'])->name('alta_prov');
Route::get('/reg_orden_compra',[ImportacionesController::class,'metodoRegistroOrdenC'])->name('reg_oc');
//Route::get('/reg_producto',[ImportacionesController::class,'metodoRegistrarProd'])->name('reg_prod');
Route::get('/registro_usuario',[ImportacionesController::class,'metodoRegistrarUsuario'])->name('reg_usuario');
Route::get('/registro_venta',[ImportacionesController::class,'metodoRegistrarVenta'])->name('reg_venta');
Route::get('/consulta_compras',[ImportacionesController::class,'metodoConsultaComprasG'])->name('c_compras');
Route::get('/consulta_ganancias_gerente',[ImportacionesController::class,'metodoConsultaGananciasG'])->name('c_ganancias_g');
Route::get('/consulta_oc',[ImportacionesController::class,'metodoConsultarOrdenC'])->name('c_oc');
//Route::get('/consulta_producto',[ImportacionesController::class,'metodoConsultarProd'])->name('c_producto');
Route::get('/consulta_proveedor',[ImportacionesController::class,'metodoConsultarProv'])->name('c_proveedor');
Route::get('/consulta_tickets',[ImportacionesController::class,'metodoConsultarTickets'])->name('c_tickets');
Route::get('/consulta_usuarios',[ImportacionesController::class,'metodoConsultarUsuarios'])->name('c_usuarios');
Route::get('/consulta_ventas',[ImportacionesController::class,'metodoConsultarVentasG'])->name('c_ventas');
Route::get('/editar_producto',[ImportacionesController::class,'metodoEditarProducto'])->name('e_producto');
Route::get('/editar_proveedor',[ImportacionesController::class,'metodoEditarProveedor'])->name('e_proveedor');
Route::get('/editar_usuario',[ImportacionesController::class,'metodoEditarUsuario'])->name('e_usuario');

// RUTAS DE TIPO POST PARA GUARDAR INFO DE FORMULARIOS

//rutas para fomularios Altas
Route::post('/guardarAltaProveedor',[ImportacionesController::class,'GuardarAltaP'])->name('guardarAP');
Route::post('/guardarRegOC',[ImportacionesController::class,'GuardarOrdenC'])->name('guardarOC');
//Route::post('/guardarRegProd',[ImportacionesController::class,'GuardarRegProd'])->name('guardarRP');
Route::post('/guardarRegUsuario',[ImportacionesController::class,'GuardarRegUsuario'])->name('guardarRU');
Route::post('/guardarRegVenta',[ImportacionesController::class,'GuardarRegVenta'])->name('guardarRV');

//otras rutas
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
