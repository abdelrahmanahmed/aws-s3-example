<?php

namespace App\Providers;

use App\Services\Storage\Disks\LocalStorage;
use Illuminate\Support\ServiceProvider;

use App\Services\Storage\Contracts\StorageInterface;
use App\Services\Storage\Disks\AWSS3;

class StorageServiceProvider extends ServiceProvider
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
        $this->app->bind(StorageInterface::class, LocalStorage::class);
    }
}
