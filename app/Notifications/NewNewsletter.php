<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\User;

class NewNewsletter extends Notification
{
    use Queueable;

    private $sujet;
    private $message;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($sujet, $message)
    {
        $this->sujet = $sujet;
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
        $president = User::whereHas('fonctions', function($query){
            $query->where('annee', year())->where('nom', 'Président');
        })->first();
        return (new MailMessage)
                    ->subject($this->sujet)
                    ->greeting('Très cher vieux,')
                    ->line($this->message)
                    ->salutation('Bien à vous, <br/>'.$president->prenom.' '.$president->name.'<br/> Président du CB ingé');
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
