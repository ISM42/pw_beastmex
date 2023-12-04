<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\DB;
use App\Models\PdfModel;
use Carbon\Carbon;
use Dompdf\Dompdf;
/* use vendor\pdf\dompdf; */



class PdfContoller extends Controller
{

    public function generate(Request $request, string $id)
{
    require_once 'vendor/autoload.php';
    $pdf = new \Dompdf\Dompdf();
    $pdf->setPaper('A4', 'portrait');
    $pdf->render();
    $pdf->stream();
    DB::table('productos')->where('id',$id)->generate([
        "nombre"=>$request->input('_nproducto'),
        "num_serie"=>$request->input('_nserie'),
        "marca"=>$request->input('_marca'),
        "cantidad"=>$request->input('_cantidad'),
        "costo_compra"=>$request->input('_costoCompra'),
        "updated_at"=>Carbon::now(),
    ]);

    return redirect('/reporte')->with('confirmacion','Actualización exitosa');

}

public function enviarCorreo($destinatario, $asunto, $mensaje) {
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
}

public function formCorreo(Request $request) {
    // Validar y procesar los datos del formulario
    $destinatario = $request->input('destinatario');
    $asunto = $request->input('asunto');
    $mensaje = $request->input('mensaje');

    // Llamar a la función para enviar el correo con PHPMailer
    $this->enviarCorreo($destinatario, $asunto, $mensaje);

    // Puedes redirigir a una página de éxito o hacer lo que desees aquí
}




}


/* 
    $consulVentas = PdfModel::obtenerDatos();
    ob_start();
    require 'app/resources/views/VENTAS/pdf_tickets.php';
    $html = ob_get_clean();
    return view('VENTAS.consultar_tickets_venta', compact('consulVentas')); */

