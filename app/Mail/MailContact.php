<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailContact extends Mailable
{
    use Queueable, SerializesModels;


    public $email;
    public $content;
    public $name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $content)
    {
        $this->email= $email;
        $this->content = $content;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.frontend.mailcontact');
    }
}
