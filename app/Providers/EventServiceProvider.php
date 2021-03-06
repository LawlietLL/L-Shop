<?php
declare(strict_types = 1);

namespace App\Providers;

use App\Events\Auth\PasswordReminderCreatedEvent;
use App\Events\Auth\RegistrationSuccessfulEvent;
use App\Events\Purchase\PurchaseCompletedEvent;
use App\Events\Purchase\PurchaseCreatedEvent;
use App\Listeners\Auth\AttachDefaultRoles;
use App\Listeners\Auth\SendEmailConfirmation;
use App\Listeners\Auth\SendPasswordReminder;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        RegistrationSuccessfulEvent::class => [
            SendEmailConfirmation::class,
            AttachDefaultRoles::class,
        ],
        PasswordReminderCreatedEvent::class => [
            SendPasswordReminder::class
        ],
        PurchaseCreatedEvent::class => [
            // Register here the listener(s), who must respond to the event creating a purchase.
        ],
        PurchaseCompletedEvent::class => [
            // Register here the listener(s), who must respond to the event completing a purchase.
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
