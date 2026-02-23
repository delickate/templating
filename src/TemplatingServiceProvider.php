<?php
/**
 * --------------------------------------------------------------------------
 * Delickate Templating Package
 * --------------------------------------------------------------------------
 *
 * @package     Delickate\Templating
 * @author      Sani Hyne 
 * @copyright   Copyright (c) 2026 Delickate
 * @license     MIT
 * @version     1.0.0
 * @since       1.0.0
 *
 * This file is part of the Delickate Templating module.
 * It provides layout for login & all other pages
 *
 */

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