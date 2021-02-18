<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function contacto()
    {
        return view('contacto');
    }
    
    public function enviar_email(Request $request) {
        
        $this->validate($request, [
            'nombre' => ['required'],
            'apellidos' => ['required'],
            'email' => ['required'],
            'telefono' => ['required'],
            'subject' => ['required'],
            'contenido' => ['required'],
        ]);
        
        $subject = $request->input('subject');
        $nombre = $request->input('nombre');
        $apellidos = $request->input('apellidos');
        $email = $request->input('email');
        $telefono = $request->input('telefono');
        $contenido = $request->input('contenido');
        
        $correo = new ContactoMailable($subject, $nombre, $apellidos, $email, $telefono, $contenido);

        Mail::to('correo@gmail.com')->send($correo);
        
        session()->flash('mensajeExito', 'Correo enviado');
        return redirect()->back();
    }
}
