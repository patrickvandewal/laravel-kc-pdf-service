<?php

declare(strict_types=1);

namespace KingsCode\LaravelHtmlToPdf;

use Illuminate\Support\ServiceProvider;

class KCHtmlToPdfServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Get the package root path.
     *
     * @param $path
     * @return string
     */
    protected function packageRootPath($path)
    {
        return __DIR__ . '/../' . $path;
    }
}
