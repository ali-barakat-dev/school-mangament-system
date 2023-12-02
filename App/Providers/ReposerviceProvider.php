<?php

namespace App\Providers;

use App\Repositry\StudentRepositry;
use App\Repositry\TeacherRepositry;
use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            TeacherRepositry::class
          
        );
        $this->app->bind(
            StudentRepositry::class
        );
    }
    public function boot()
    {
       
    }
}
