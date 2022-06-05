<?php

namespace KingsCode\LaravelHtmlToPdf\Tests;

use GuzzleHttp\Psr7\Response;
use KingsCode\LaravelHtmlToPdf\Contracts\ClientContract;
use KingsCode\LaravelHtmlToPdf\HtmlToPdfOptions;
use Psr\Http\Message\ResponseInterface;

class DummyClient implements ClientContract
{
    public function createDocument(string $html, HtmlToPdfOptions $options): ResponseInterface
    {
        return new Response();
    }
}