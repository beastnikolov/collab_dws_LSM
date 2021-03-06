<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactoMailable extends Mailable
{
    use Queueable, SerializesModels;
    
    public $subject;
    public $nombre;
    public $apellidos;
    public $email;
    public $telefono;
    public $contenido;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $nombre, $apellidos, $email, $telefono, $contenido)
    {
        $this->subject = $subject;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->contenido = $contenido;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email');
    }
}
