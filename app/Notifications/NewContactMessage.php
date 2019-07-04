<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewContactMessage extends Notification
{
    use Queueable;

    private $nom, $email, $cb, $message;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($nom, $email, $cb, $message)
    {
        $this->nom = $nom;
        $this->email = $email;
        $this->cb = $cb;
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Vous avez un nouveau message de '.$this->nom.$this->cb)
                    ->line($this->message)
                    ->line("N'hésité pas à lui répondre à l'adresse ".$this->email);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
