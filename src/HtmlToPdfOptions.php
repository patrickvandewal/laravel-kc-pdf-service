<?php

namespace KingsCode\LaravelHtmlToPdf;

class HtmlToPdfOptions
{
    private bool $landscape;

    private string $callback;

    private string $callbackAuthToken;

    public function __construct(string $callback, string $callbackAuthToken, bool $landscape = false)
    {
        $this->landscape = $landscape;
        $this->callback = $callback;
        $this->callbackAuthToken = $callbackAuthToken;
    }

    public function isLandscape(): bool
    {
        return $this->landscape;
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