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
                => resource_path('views/layouts/masterTemplatePage.blade.php'),

            __DIR__.'/../resources/views/layouts/loginTemplatePage.blade.php'
                => resource_path('views/layouts/loginTemplatePage.blade.php'),

            __DIR__.'/../resources/views/partials'
                => resource_path('views/partials'),    

            // Assets
            __DIR__.'/../public/assets'
                => public_path('vendor/templating'),

        ], 'templating');
    }
}