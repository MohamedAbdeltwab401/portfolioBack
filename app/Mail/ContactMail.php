<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

    /**
     * Get the message envelope.
     */
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
{
    return new Envelope(
        replyTo: [
        new Address($this->data["email"], $this->data["name"])
    ],
        subject: 'Portfolio Message',
    );
}

public function content(): Content
{
    return new Content(
        view: "emails.contact",
        with: ["data" => $this->data]
    );
}
}
