<?php

namespace Modules\User\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Modules\User\Events\UserLogin;
use Modules\User\Listeners\SyncUserCartAfterLoginListener;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        UserLogin::class => [
            SyncUserCartAfterLoginListener::class,
        ],
    ];
}
