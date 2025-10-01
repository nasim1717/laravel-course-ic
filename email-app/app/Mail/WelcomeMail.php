<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $emailSubject;
    public $otp;
    public function __construct($emailSubject,$otp)
    {
        $this->emailSubject = $emailSubject;
        $this->otp = $otp;
    }


    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->emailSubject,
        );
    }


    public function content(): Content
    {
        return new Content(
            view: 'email.WelcomeMailTemplate',
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
