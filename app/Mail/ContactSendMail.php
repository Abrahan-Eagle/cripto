<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactSendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // Add this property declaration

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data; // Fixed spacing around arrow operator
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->data['subject'], // Use dynamic subject
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.contactMail', // Changed from 'view' to 'markdown'
            with: ['data' => $this->data] // Pass data to the view
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [];
    }

    /**
     * Build the message (alternative to content() method).
     */
    public function build()
    {
        $subject = 'Contact Form: ' . $this->data['name'] . ' - ' . $this->data['subject'];

        return $this->markdown('emails.contactMail')
                   ->subject($subject)
                   ->with(['data' => $this->data]);
    }
}
