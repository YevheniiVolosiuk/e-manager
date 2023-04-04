<?php

namespace App\Providers;

use App\Faker\DepartmentProvider;
use Illuminate\Support\ServiceProvider;
use Faker\{Factory, Generator};


class FakerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(Generator::class, function () {
            $faker = Factory::create();
            $faker->addProvider(new DepartmentProvider($faker));
            return $faker;
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
