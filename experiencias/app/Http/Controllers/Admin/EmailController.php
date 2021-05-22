<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function store(Request $request){
        $emails=$request->all();
        $mail = $_POST['email'];
        $message = "Hola deseo me hagan llegar sus promociones";
        $header = 'From: ' . $mail . " \r\n";
        $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
        $header .= "Mime-Version: 1.0 \r\n";
        $header .= "Content-Type: text/plain";
        $para = 'promociones@contelexperiencias.com,desarrolloweb@contelferraez.com';
        $asunto = 'email de contacto';

    mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");



    }
    //
}
