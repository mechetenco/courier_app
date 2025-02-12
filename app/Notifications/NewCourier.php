<?php

namespace App\Notifications;
use App\Models\courier;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Str;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewCourier extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public Courier $courier)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
        ->subject("New courier from {$this->courier->sender_name}")
        ->greeting("New courier from {$this->courier->sender_name}")
        ->line(Str::limit($this->courier->comment, 50))
        ->action('Go to courier', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
