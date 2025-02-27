<?php

namespace App\Mail;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Arr;
use MailerSend\Exceptions\MailerSendAssertException;
use MailerSend\Helpers\Builder\Personalization;
use MailerSend\Helpers\Builder\Variable;
use MailerSend\LaravelDriver\MailerSendTrait;
use Illuminate\Mail\Mailables\Address;

class TestMail extends Mailable
{
    use Queueable, SerializesModels, MailerSendTrait;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        //
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
            subject: 'Teste de Envio de E-mail Pelo Laravel'
        );
    }

    /**
     * Get the message content definition.
     * @throws MailerSendAssertException
     */
    public function content(): Content
    {
        // Opcional: se desejar capturar o e-mail do destinatário para funcionalidades avançadas:
        $to = Arr::get($this->to, '0.address');

        // Configurações para o MailerSend via API
        // Como não estamos usando um template nem envio bulk ou agendado, usamos valores padrão
        $this->mailersend(
            template_id: null,
            precedenceBulkHeader: false,
            sendAt: null // ou new Carbon() se quiser enviar imediatamente com timestamp
        );

        return new Content(
            view: 'mail.test-mail'
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
//            // Attachment::fromPath('path/to/file.png')->as('file.png')->withMime('image/png'),
        ];
    }
}
