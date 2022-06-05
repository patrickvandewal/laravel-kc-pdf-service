<?php

declare(strict_types=1);

namespace KingsCode\LaravelHtmlToPdf;

use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;
use KingsCode\LaravelHtmlToPdf\Client\Client;
use KingsCode\LaravelHtmlToPdf\Contracts\ClientContract;

class KCHtmlToPdfServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/htmltopdf.php', 'htmltopdf');

        $this->app->singleton(ClientContract::class, function (Container $container) {
            /** @var \Illuminate\Contracts\Config\Repository $config */
            $config = $container->make(Repository::class);

            $httpClient = new \GuzzleHttp\Client([
                'base_uri' => $config->get('htmltopdf.service_url'),
                'headers'  => [
                    'Authorization' => "Bearer {$config->get('htmltopdf.auth_token')}",
                ],
            ]);

            return new Client($httpClient, $config);
        });
    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/htmltopdf.php' => config_path('htmltopdf.php'),
            ], 'config');
        }
    }
}
