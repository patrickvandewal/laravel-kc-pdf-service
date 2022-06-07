<?php

namespace KingsCode\LaravelHtmlToPdf;

class HtmlToPdfOptions
{
    private bool $printBackground;

    private bool $landscape;

    private string $callback;

    private string $callbackAuthToken;

    public function __construct(
        string $callback,
        string $callbackAuthToken,
        bool $landscape = false,
        bool $printBackground = true
    ) {
        $this->landscape = $landscape;
        $this->callback = $callback;
        $this->callbackAuthToken = $callbackAuthToken;
        $this->printBackground = $printBackground;
    }

    public function isLandscape(): bool
    {
        return $this->landscape;
    }

    public function getPrintBackground(): bool
    {
        return $this->printBackground;
    }

    public function getCallback(): string
    {
        return $this->callback;
    }

    public function getCallbackAuthToken(): string
    {
        return $this->callbackAuthToken;
    }
}