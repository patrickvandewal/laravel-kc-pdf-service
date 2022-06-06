<?php

namespace KingsCode\LaravelHtmlToPdf\Client;

use GuzzleHttp\Client as HttpClient;
use \Illuminate\Contracts\Config\Repository;
use KingsCode\LaravelHtmlToPdf\Contracts\ClientContract;
use KingsCode\LaravelHtmlToPdf\HtmlToPdfOptions;
use Psr\Http\Message\ResponseInterface;

class Client implements ClientContract
{
    private HttpClient $httpClient;

    public function __construct(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function createDocument(string $html, HtmlToPdfOptions $options): ResponseInterface
    {
        return $this->httpClient->post('/request', [
            'form_params' => [
                'html'       => $html,
                'auth_token' => $options->getCallbackAuthToken(),
                'callback'   => $options->getCallback(),
                'landscape'  => $options->isLandscape(),
            ],
        ]);
    }
}