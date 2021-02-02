<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // 下記を追記
        $this->app->bind(
            \App\Repositories\MailAttachmentRepositoryInterface::class,
            \App\Repositories\MailAttachmentRepository::class
        );
        // 上記までを追記
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
