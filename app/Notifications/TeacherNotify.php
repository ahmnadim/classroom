<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class TeacherNotify extends Notification implements ShouldQueue
{
    use Queueable;

    public $teacher;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($teacher)
    {
        $this->teacher = $teacher;
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
                    ->greeting('Hello,'.$this->teacher->name.'!')
                    ->subject('Your account Details.')
                    ->line('You are selected as one of our teacher. we have created your account in our website. so you do not need to create one.')
                    ->line('your email is:'.$this->teacher->email)
                    ->line('using this email you can reset your password.go to the link bellow')
                    ->action('Teacher Password Reset', url(route('teacher.password.request')))
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
