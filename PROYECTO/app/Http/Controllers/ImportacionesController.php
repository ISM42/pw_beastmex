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
        return view('altas.alta_proveedor'); 
    }

    Public function metodoRegistroOrdenC(){ 
        return view('altas.registrar_orden_compra'); 
    }

    Public function metodoRegistrarProd(){ 
        return view('altas.registrar_producto'); 
    }

    Public function metodoRegistrarUsuario(){ 
        return view('altas.registrar_usuario'); 
    }

    Public function metodoRegistrarVenta(){ 
        return view('altas.registrar_venta'); 
    }

    Public function metodoConsultaComprasG(){ 
        return view('consultas.consultar_compras_gerente'); 
    }

    Public function metodoConsultaGananciasG(){ 
        return view('consultas.consultar_ganancias_gerente'); 
    }

    Public function metodoConsultarGanancias(){ 
        return view('consultas.consultar_ganancias'); 
    }

    Public function metodoConsultarOrdenC(){ 
        return view('consultas.consultar_orden_compra'); 
    }

    Public function metodoConsultarProd(){ 
        return view('consultas.consultar_producto'); 
    }

    Public function metodoConsultarProv(){ 
        return view('consultas.consultar_proveedor'); 
    }

    Public function metodoConsultarTickets(){ 
        return view('consultas.consultar_tickets_venta'); 
    }

    Public function metodoConsultarUsuarios(){ 
        return view('consultas.consultar_usuarios'); 
    }

    Public function metodoConsultarVentasG(){ 
        return view('consultas.consultar_ventas_gerente'); 
    }

    Public function metodoEditarProducto(){ 
        return view('editar.editar_producto'); 
    }

    Public function metodoEditarProveedor(){ 
        return view('editar.editar_proveedor'); 
    }

    Public function metodoEditarUsuario(){ 
        return view('editar.editar_usuario'); 
    }
}
