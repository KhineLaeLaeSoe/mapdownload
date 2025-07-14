<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdminMapPurchaseMail extends Mailable
{
    use Queueable, SerializesModels;
       public $details;

    public function __construct($details)
    {
        //
         $this->details = $details;
    }
    public function build()
    {
        return $this->subject('📌 မြေပုံဝယ်ယူမှု အသစ်တင်သွင်းခြင်း')
                    ->markdown('emails.admin-map-purchase');
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Admin Map Purchase Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
