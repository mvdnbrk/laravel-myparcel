<?php

namespace Mvdnbrk\Laravel;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use Mvdnbrk\MyParcel\Client;
use Psr\Container\ContainerInterface;

class MyParcelServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/myparcel.php', 'myparcel');

        $this->registerMyParcelClient();
        $this->registerMyParcelAdapter();

        $this->registerPublishing();
    }

    /**
     * Register the MyParcel Client.
     *
     * @return void
     */
    protected function registerMyParcelClient()
    {
        $this->app->singleton(Client::class, function () {
            return (new Client)->setApiKey(config('myparcel.secret'));
        });

        $this->app->alias(Client::class, 'myparcel');
    }

    /**
     * Register the MyParcel Client Adapter.
     *
     * @return void
     */
    protected function registerMyParcelAdapter()
    {
        $this->app->singleton(MyParcelClientAdapter::class, function (ContainerInterface $container) {
            return new MyParcelClientAdapter($container->get('myparcel'));
        });

        $this->app->alias(MyParcelClientAdapter::class, 'myparcel.adapter');
    }

    /**
     * Register the package's publishable resources.
     *
     * @return void
     */
    protected function registerPublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/myparcel.php' => config_path('myparcel.php'),
            ], 'myparcel-config');
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'myparcel',
            'myparcel.adapter',
        ];
    }
}
