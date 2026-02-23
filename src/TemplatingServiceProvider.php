<?php

namespace Delickate\Templating;

use Illuminate\Support\ServiceProvider;

class TemplatingServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->publishes([

            // Layouts
            __DIR__.'/../resources/views/layouts/masterTemplatePage.blade.php'
                => resource_path('views/layouts/masterpage.blade.php'),

            __DIR__.'/../resources/views/layouts/loginTemplatePage.blade.php'
                => resource_path('views/layouts/loginpage.blade.php'),

            // Assets
            __DIR__.'/../public/assets'
                => public_path('vendor/templating'),

        ], 'templating');
    }
}