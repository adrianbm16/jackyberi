<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ShopMailable extends Mailable
{
    use Queueable, SerializesModels;
    
    public $data;
    public $item;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $item)
    {
        $this->data = $data;
        $this->item = $item;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            from: new Address('jackyberi@gmail.com', 'Jacky Bernal'),
            subject: 'Contact Mailable',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.shop',
            with: [
                'data' => $this->data,
                'item' => $this->item,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
