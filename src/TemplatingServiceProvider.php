<?php

namespace Delickate\Templating\Providers;

use Illuminate\Support\ServiceProvider;

class TemplatingServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // Publish config
        // $this->publishes([
        //     __DIR__.'/../config/templating.php' => config_path('templating.php'),
        // ], 'templating-config');

        $this->publishes([
        // layout
        __DIR__.'/../resources/views/layouts/masterTemplatePage.blade.php' => resource_path('views/layouts/masterpage.blade.php'),

        __DIR__.'/../resources/views/layouts/loginTemplatePage.blade.php' => resource_path('views/layouts/loginpage.blade.php'),

        __DIR__.'/../public/assets' => public_path('public/assets'),

        ], 'templating');

        
    }
}