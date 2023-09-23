<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactPurchaseConfirmation extends Mailable
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function build()
    {
        return $this->view('emails.contact-purchase-confirmation')
                    ->subject('Thank you for your purchase');
    }
}
