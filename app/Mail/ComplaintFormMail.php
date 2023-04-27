<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ComplaintFormMail extends Mailable
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
        $user_subject = $this->data['subject'];
        $category = $this->data['category'];

        return $this->from($user_email, $user_name)
            ->subject('Complaint: ('.$category.') '. $user_subject)
            ->replyTo($user_email)
            ->view('emails.complaint');
    }
}
