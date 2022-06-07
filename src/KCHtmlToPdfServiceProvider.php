<?php

declare(strict_types=1);

namespace KingsCode\LaravelHtmlToPdf;

use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;
use KingsCode\LaravelHtmlToPdf\Client\KCHtmlToPdfClient;
use KingsCode\LaravelHtmlToPdf\Contracts\KCHtmlToPdfClientContract;

class KCHtmlToPdfServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/kchtmltopdf.php', 'kchtmltopdf');

        $this->app->singleton(KCHtmlToPdfClientContract::class, function (Container $container) {
            /** @var \Illuminate\Contracts\Config\Repository $config */
            $config = $container->make(Repository::class);

            $httpClient = new \GuzzleHttp\Client([
                'base_uri' => $config->get('kchtmltopdf.kc_html_to_pdf.service_url'),
                'headers'  => [
                    'Authorization' => "Bearer {$config->get('kchtmltopdf.kc_html_to_pdf.auth_token')}",
                ],
            ]);

            return new KCHtmlToPdfClient($httpClient);
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
                __DIR__ . '/../config/kchtmltopdf.php' => config_path('kchtmltopdf.php'),
            ], 'config');
        }
    }
}
