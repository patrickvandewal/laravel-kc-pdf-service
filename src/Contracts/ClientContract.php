<?php

namespace KingsCode\LaravelHtmlToPdf\Contracts;

use KingsCode\LaravelHtmlToPdf\HtmlToPdfOptions;
use Psr\Http\Message\ResponseInterface;

interface ClientContract
{
    public function createDocument(string $html, HtmlToPdfOptions $options): ResponseInterface;
}