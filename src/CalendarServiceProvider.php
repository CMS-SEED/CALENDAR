<?php

namespace Cms_Framework_Seed\Calendar;

use Illuminate\Support\ServiceProvider;

class CalendarServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Load view
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'calendar');

        // Load translation
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'calendar');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        // Call pblish redources function
        $this->publishResources();

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'cms_framework_seed.calendar');

        // Bind facade
        $this->app->bind('calendar', function ($app) {
            return $this->app->make('Cms_Framework_Seed\Calendar\Calendar');
        });

        // Bind Calendar to repository
        $this->app->bind(
            'Cms_Framework_Seed\Calendar\Interfaces\CalendarRepositoryInterface',
            \Cms_Framework_Seed\Calendar\Repositories\Eloquent\CalendarRepository::class
        );

        $this->app->register(\Cms_Framework_Seed\Calendar\Providers\AuthServiceProvider::class);
        $this->app->register(\Cms_Framework_Seed\Calendar\Providers\EventServiceProvider::class);
        $this->app->register(\Cms_Framework_Seed\Calendar\Providers\RouteServiceProvider::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['calendar'];
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public static function compiles()
    {
        return [
                __DIR__ . '/Reposietories/Criteria/CalendarAdminCriteria.php',
        ];
    }

    /**
     * Publish resources.
     *
     * @return void
     */
    private function publishResources()
    {
        // Publish configuration file
        $this->publishes([__DIR__ . '/../config/config.php' => config_path('cms_framework_seed/calendar.php')], 'config');

        // Publish admin view
        $this->publishes([__DIR__ . '/../resources/views' => base_path('resources/views/vendor/calendar')], 'view');

        // Publish language files
        $this->publishes([__DIR__ . '/../resources/lang' => base_path('resources/lang/vendor/calendar')], 'lang');

        // Publish public
        $this->publishes([__DIR__ . '/../public/' => public_path('/')], 'uploads');
    }
}
