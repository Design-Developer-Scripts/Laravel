<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        #$this->registerPolicies();

        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new MailMessage)
                ->subject('E-Mail Adresse überprüfen')
                ->greeting('Hallo '.$notifiable->name.'!')
                ->line('Klicken Sie auf die Schaltfläche unten, um Deine E-Mail-Adresse zu bestätigen.')
                ->action('Email Adresse bestätigen', $url)
                ->line('Vielen Dank, dass Sie unsere Anwendung nutzen!')
                ->salutation('Mit freundlichen Grüßen \n von Entwicklungs Team');
        });

        //
    }
}
