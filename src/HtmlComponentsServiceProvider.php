<?php

namespace Crownix\HtmlComponents;

use Illuminate\Support\ServiceProvider;

class HtmlComponentsServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->registerComponentViews();
        $this->registerComponents();
        $this->registerAssets();
    }

    public function register()
    {
    }

    public function registerComponentViews()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'html-components');

        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views'),
        ]);
    }

    public function registerComponents()
    {
        $this->publishes([
            __DIR__ . '/app/View' => base_path('app/View'),
        ]);
    }

    protected function registerAssets()
    {
        $this->publishes([
            __DIR__ . '/public' => public_path()
        ]);
    }
}
