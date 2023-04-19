<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{

    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {

        $user_name = $this->data['name'];
        $user_email = $this->data['email'];
        $user_phone = $this->data['phone'];
        $user_subject = $this->data['subject'];

        return $this->from($user_email, $user_name)
            ->subject('Inquiry: '. $user_subject)
            ->replyTo($user_email, $user_name)
            ->view('emails.contact_form');
    }
}
