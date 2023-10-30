<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportacionesController extends Controller
{
    //
    Public function metodoLogin(){ 
        return view('login'); 
 
    }

    Public function metodoAltaProv(){ 
        return view(‘alta_proveedor’); 
    }

    Public function metodoRegistroOrdenC(){ 
        return view(‘registrar_orden_compra’); 
    }

    Public function metodoRegistrarProd(){ 
        return view(‘registrar_producto’); 
    }

    Public function metodoRegistrarUsuario(){ 
        return view(‘registrar_usuario’); 
    }

    Public function metodoRegistrarVenta(){ 
        return view(‘registrar_venta’); 
    }

    Public function metodoConsultaComprasG(){ 
        return view(‘consultar_compras_gerente’); 
    }

    Public function metodoConsultaGananciasG(){ 
        return view(‘consultar_ganancias_gerente’); 
    }

    Public function metodoConsultarGanancias(){ 
        return view(‘consultar_ganancias’); 
    }

    Public function metodoConsultarOrdenC(){ 
        return view(‘consultar_orden_compra’); 
    }

    Public function metodoConsultarProd(){ 
        return view(‘consultar_producto’); 
    }

    Public function metodoConsultarProv(){ 
        return view(‘consultar_proveedor’); 
    }

    Public function metodoConsultarTickets(){ 
        return view(‘consultar_tickets_venta’); 
    }

    Public function metodoConsultarUsuarios(){ 
        return view(‘consultar_usuarios’); 
    }

    Public function metodoConsultarVentasG(){ 
        return view(‘consultar_ventas_gerente’); 
    }

    Public function metodoEditarProducto(){ 
        return view(‘editar_producto’); 
    }

    Public function metodoEditarProveedor(){ 
        return view(‘editar_proveedor’); 
    }

    Public function metodoEditarUsuario(){ 
        return view(‘editar_usuario’); 
    }
}
