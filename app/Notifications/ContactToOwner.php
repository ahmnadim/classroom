<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ContactToOwner extends Notification implements ShouldQueue
{
    use Queueable;
    public $sms;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($sms)
    {
        $this->sms = $sms;
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
                    ->greeting('Hello, Subscriber!')
                    ->subject('New Course Available.')
                    ->line('There is a new course. we hope you will like it.')
                    ->line('Course Title: '.$this->sms->subject)
                    ->action('View Post', url(route('course.details', $this->sms->id)))
                    ->line('Thank you so much for being with us :)');
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
