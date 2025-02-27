<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Arr;
use MailerSend\LaravelDriver\MailerSendTrait;


class ConfirmMail extends Mailable
{
    use Queueable, SerializesModels, MailerSendTrait;
    public $name;
    /**
     * Create a new message instance.
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(
                env('MAIL_FROM_ADDRESS', 'noreply@seudominio.com'),
                env('MAIL_FROM_NAME', 'Seu Nome')
            ),
            subject: 'Bem-vindo à Newsletter do Shift.io Blog'
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $to = Arr::get($this->to, '0.address');
        $this->mailersend(
            template_id: null,
            precedenceBulkHeader: false,
            sendAt: null
        );

        return new Content(
            view: 'mail.confirm-email'
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
