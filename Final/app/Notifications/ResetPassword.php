<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResetPassword extends Notification
{
    use Queueable;
    protected $redirectTo = "{{route('start}}";
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
                     ->subject('Reset Your Password')
                     ->greeting('hello '.$notifiable->name)
                     ->line('Tap the button below to reset you customer account password .')
                     ->line("if you didn't request ,you can safely delete this email")
                     ->action('Reset Password', url("/pass/".$notifiable->email))
                     ->from('m.talalkhan1822@gmail.com','Talal Khan');
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
