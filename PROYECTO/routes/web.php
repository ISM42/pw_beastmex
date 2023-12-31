<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\ImportacionesController;

use App\http\controllers\AlmacenController;
use App\http\controllers\ComprasController;
use App\http\controllers\Compras2;
use App\http\controllers\VentasController;
use App\http\controllers\Ventas2Controller;
use App\http\controllers\GerenciaController;
use App\Http\Controllers\PdfContoller;


/*Route::get('/', function () {
    return view('login');
});*/

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*Route::view('/home','home'); //ruta prueba para commit*/

//RUTAS CRUD ALMACEN
Route::get('producto/create',[AlmacenController::class,'create'])->name('producto.create');
Route::get('/producto/consulta',[AlmacenController::class,'index'])->name('producto.index');
Route::post('/producto',[AlmacenController::class,'store'])->name('producto.store');
Route::post('/producto/{id}/confirm',[AlmacenController::class,'update'])->name('producto.update');
Route::post('/e_producto/{id}/confirm',[AlmacenController::class,'destroy'])->name('producto.destroy');

//ruta para el pdf de productos almacen
/* Route::get('/reporte', [PdfContoller::class,'generate'])->name('reporte.generate'); */
Route::get('/almacen/pdf', [PdfContoller::class, 'generarPDF'])->name('almacen.pdf');
Route::get('/ventas/pdf_tickets', [PdfContoller::class, 'pdfTicket'])->name('ventas.pdf_tickets');
Route::get('/compras/pdf_compras', [PdfContoller::class, 'pdfTicket_compra'])->name('compras.pdf_compras');



//ruta para enviar correo
Route::get('/enviar_correo', [PdfContoller::class, 'enviarCorreo']);



//RUTAS CRUD PROVEEDORES
Route::get('proveedor/create',[ComprasController::class,'create'])->name('proveedor.create');
Route::get('/proveedor/consulta',[ComprasController::class,'index'])->name('proveedor.index');
Route::post('/proveedor',[ComprasController::class,'store'])->name('proveedor.store');
Route::post('/proveedor/{id}/confirm',[ComprasController::class,'update'])->name('proveedor.update');
Route::post('/e_proveedor/{id}/confirm',[ComprasController::class,'destroy'])->name('proveedor.destroy');

//RUTAS CRUD COMPRAS
Route::get('compras/create',[Compras2::class,'create'])->name('compras.create');
Route::get('/ordenesCompras/consulta',[Compras2::class,'index'])->name('compras.index');
Route::post('/occompras',[Compras2::class,'store'])->name('compras.store');
Route::post('/compras/{id}/confirm',[Compras2::class,'update'])->name('compras.update');
Route::post('/e_compras/{id}/confirm',[Compras2::class,'destroy'])->name('compras.destroy');


//RUTAS CRUD CLIENTES
Route::get('clientes/create',[VentasController::class,'create'])->name('clientes.create');
Route::get('/clientes/consulta',[VentasController::class,'index'])->name('clientes.index');
Route::post('/clientes',[VentasController::class,'store'])->name('clientes.store');
Route::post('/clientes/{id}/confirm',[VentasController::class,'update'])->name('clientes.update');
Route::post('/e_clientes/{id}/confirm',[VentasController::class,'destroy'])->name('clientes.destroy');

// RUTAS CRUD VENTAS (Ventas2Controller (controlador))
Route::get('ventas/create', [Ventas2Controller::class, 'create'])->name('ventas.create');
Route::get('/ventas/consulta', [Ventas2Controller::class, 'index'])->name('ventas.index');
Route::post('/ventas', [Ventas2Controller::class, 'store'])->name('ventas.store');
Route::post('/ventas/{id}/confirm', [Ventas2Controller::class, 'update'])->name('ventas.update');
Route::post('/e_ventas/{id}/confirm', [Ventas2Controller::class, 'destroy'])->name('ventas.destroy');
Route::get('/obtener-precio-producto/{id}', [Ventas2Controller::class, 'obtenerPrecioProducto']);

Route::get('/ganancias-por-venta', [Ventas2Controller::class, 'calcularGananciasVenta'])->name('ganancias.venta');
Route::post('/ganancias-por-mes', [Ventas2Controller::class, 'calcularGananciasPorMes'])->name('ganancias.por.mes');
Route::get('/ganancias-todas', [Ventas2Controller::class, 'calcularGananciasTodas'])->name('ganancias.todas');


//RUTAS INDIVIDUALES POR CONTROLADOR:

Route::get('/',[ImportacionesController::class,'metodoLogin'])->name('inicio');
//Route::get('/alta_proveedor',[ImportacionesController::class,'metodoAltaProv'])->name('alta_prov');
//Route::get('/reg_orden_compra',[ImportacionesController::class,'metodoRegistroOrdenC'])->name('reg_oc');

Route::get('/registro_usuario',[ImportacionesController::class,'metodoRegistrarUsuario'])->name('reg_usuario');
Route::get('/registro_venta',[ImportacionesController::class,'metodoRegistrarVenta'])->name('reg_venta');

//RUTA PARA GRÁFICA DE COMPRAS
Route::get('/consulta_compras',[ImportacionesController::class,'metodoConsultaComprasG'])->name('c_compras');

Route::get('/consulta_ganancias_gerente',[ImportacionesController::class,'metodoConsultaGananciasG'])->name('c_ganancias_g');
//Route::get('/consulta_oc',[ImportacionesController::class,'metodoConsultarOrdenC'])->name('c_oc');


Route::get('/consulta_tickets',[ImportacionesController::class,'metodoConsultarTickets'])->name('c_tickets');
Route::get('/consulta_usuarios',[ImportacionesController::class,'metodoConsultarUsuarios'])->name('c_usuarios');
Route::get('/consulta_ventas',[ImportacionesController::class,'metodoConsultarVentasG'])->name('c_ventas');

Route::get('/editar_usuario',[ImportacionesController::class,'metodoEditarUsuario'])->name('e_usuario');

// RUTAS DE TIPO POST PARA GUARDAR INFO DE FORMULARIOS

//rutas para fomularios Altas

Route::post('/guardarRegOC',[ImportacionesController::class,'GuardarOrdenC'])->name('guardarOC');

Route::post('/guardarRegUsuario',[ImportacionesController::class,'GuardarRegUsuario'])->name('guardarRU');
Route::post('/guardarRegVenta',[ImportacionesController::class,'GuardarRegVenta'])->name('guardarRV');



//otras rutas
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
