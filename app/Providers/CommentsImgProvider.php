<?php


namespace App\Providers;


use Illuminate\Support\ServiceProvider;

class CommentsImgProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     *
     */
    public function register()
    {
        $this->app->bind(
            \App\Contracts\CommentsImgInterface::class,
            \App\Repositories\CommentImgRepository::class
            );
    }

}
