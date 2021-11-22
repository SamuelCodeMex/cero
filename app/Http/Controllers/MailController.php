<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function sendEmail(){
        $details = [
            'title' => 'Correo enviado y servidor',
            'body'  => 'Este es un ejemplo body'];
    
        mail::to('prograa.neon@gmail.com')->send(new TestMail($details));
        return 'correo enviado satisfactoriamente';    
    }
}
