<?php

namespace App\Providers;

use App\Repositories\Contracts\FileRepositoryInterface;
use App\Repositories\FileEloquent;
use Illuminate\Support\ServiceProvider;

use App\Services\Storage\Contracts\StorageInterface;
use App\Services\Storage\Disks\AWSS3;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(FileRepositoryInterface::class, FileEloquent::class);
    }
}
