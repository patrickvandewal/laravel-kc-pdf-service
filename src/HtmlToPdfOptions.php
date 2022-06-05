<?php

namespace KingsCode\LaravelHtmlToPdf;

class HtmlToPdfOptions
{
    private bool $landscape;

    private string $callback;

    public function __construct(string $callback, bool $landscape = false)
    {
        $this->landscape = $landscape;
        $this->callback = $callback;
    }

    public function isLandscape(): bool
    {
        return $this->landscape;
    }

    public function getCallback(): string
    {
        return $this->callback;
    }
}