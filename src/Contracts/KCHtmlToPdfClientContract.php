<?php

namespace KingsCode\LaravelHtmlToPdf\Contracts;

use KingsCode\LaravelHtmlToPdf\KCHtmlToPdfOptions;
use Psr\Http\Message\ResponseInterface;

interface KCHtmlToPdfClientContract
{
    public function createDocument(string $html, KCHtmlToPdfOptions $options): ResponseInterface;
}