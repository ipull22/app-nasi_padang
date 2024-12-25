<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use SerializesModels;

    public $name;
    public $email;
    public $message;

    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    public function build()
    {
        return $this->from($this->email)
                    ->subject('Pesan Kontak dari ' . $this->name)
                    ->view('emails.contactform') // Nama view untuk body email
                    ->with([
                        'name' => $this->name,
                        'message' => $this->message,
                    ]);
    }
}
