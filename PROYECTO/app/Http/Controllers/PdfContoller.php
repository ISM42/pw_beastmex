<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use DB;
use PDF;
/* use vendor\pdf\dompdf; */


class PdfContoller extends Controller
{
    public function generarPDF()
    {
        $productos = DB::table('productos')->get();
        
        $pdf = PDF::loadView('almacen.pdf', compact('productos'));

        return $pdf->download('reporte_productos.pdf');
    }

    public function pdfTicket()
    {
        $ventas = DB::table('ventas')->get();
        $customPaper = array(0, 0, 300, 300);
        $pdf = PDF::loadView('ventas.pdf_tickets', compact('ventas'))->setPaper($customPaper);
        return $pdf->download('ORDEN DE COMPRA.pdf');
    }

    public function pdfTicket_compra()
    {
        $compras = DB::table('compras')->get();
        $customPaper = array(0, 0, 227.559, 300);
        $pdf = PDF::loadView('compras.pdf_compras', compact('compras'))->setPaper($customPaper);
        return $pdf->download('ORDEN DE COMPRA.pdf');
    }
}


/* public function enviarCorreo($destinatario, $asunto, $mensaje) {
    require 'vendor/autoload.php';

    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor de correo
        $mail->isSMTP();
        $mail->Host = 'smtp.@gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'adilenegalvan38@gmail.com';
        $mail->Password = 'gato2003';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Configuración del correo
        $mail->setFrom('adilenegalvan38@gmail.com', 'Maria Adilene Galvan Ibarra');
        $mail->addAddress($destinatario);
        $mail->Subject = $asunto;
        $mail->Body = $mensaje;

        // Enviar el correo
        $mail->send();

        echo 'El correo se envió correctamente.';
    } catch (Exception $e) {
        echo 'Error al enviar el correo: ', $mail->ErrorInfo;
    }
} */

/* public function formCorreo(Request $request) {
    // Validar y procesar los datos del formulario
    $destinatario = $request->input('destinatario');
    $asunto = $request->input('asunto');
    $mensaje = $request->input('mensaje');

    // Llamar a la función para enviar el correo con PHPMailer
    $this->enviarCorreo($destinatario, $asunto, $mensaje);

    // Puedes redirigir a una página de éxito o hacer lo que desees aquí
} */







/* 
    $consulVentas = PdfModel::obtenerDatos();
    ob_start();
    require 'app/resources/views/VENTAS/pdf_tickets.php';
    $html = ob_get_clean();
    return view('VENTAS.consultar_tickets_venta', compact('consulVentas')); */

