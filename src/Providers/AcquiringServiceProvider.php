<?php

declare(strict_types=1);

namespace Monobank\LaravelAcquiring\Providers;

use Illuminate\Support\ServiceProvider;

class AcquiringServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/Config/acquiring.php', 'monobank-acquiring'
        );
//
//        $this->app->singleton('monobank-acquiring', function ($app) {
//            return new AcquiringService(
//                $app['config']['monobank-acquiring']
//            );
//        });
    }
}