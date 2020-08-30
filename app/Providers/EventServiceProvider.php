<?php

namespace App\Providers;

use App\Events\ArticleCreated;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        'App\Events\ArticleCreated' => [
           'App\Listeners\ArticleCacheListener',
        ],
        'App\Events\ArticleUpdated' => [
           'App\Listeners\ArticleCacheListener',
        ],
        'App\Events\ArticleDeleted' => [
           'App\Listeners\ArticleCacheListener',
        ],
        'App\Events\UserCreated' => [
           'App\Listeners\UserCacheListener',
        ],
        'App\Events\UserUpdated' => [
           'App\Listeners\UserCacheListener',
        ],
        'App\Events\UserDeleted' => [
           'App\Listeners\UserCacheListener',
        ],
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
