<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestingYZMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

    //to initialize the instance 
    public $data;
    public function __construct($data)
    {
        $this->data=$data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Keep your focus on placements and etps',
        );
    }

    /**
     * Get the message content definition.
     */

    //view 
    public function content(): Content
    {
        return new Content(
            view: 'emailyz',
            with:[
                'name'=>$this->data['name'],
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */

    //for sending additional attachment with email like pdf
    public function attachments(): array
    {
        return [
            Attachment::fromPath(public_path('QP1.pdf'))->as('Anu.pdf')->withMime('application/pdf')
        ];
    }
}
