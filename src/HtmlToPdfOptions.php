<?php

namespace KingsCode\LaravelHtmlToPdf;

class HtmlToPdfOptions
{
    private bool $landscape;

    public function __construct(bool $landscape = false)
    {
        $this->landscape = $landscape;
    }

    public function isLandscape(): bool
    {
        return $this->landscape;
    }
}