<?php

namespace App\Providers;

use App\Repositry\StudentsRepositry;
use App\Repositry\TeacherRepositry;
use Illuminate\Support\ServiceProvider;

class ReposerviceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            TeacherRepositry::class
          
        );
        $this->app->bind(
            StudentsRepositry::class
        );
    }
    public function boot()
    {
       
    }
}
