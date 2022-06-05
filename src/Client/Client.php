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

    private Repository $repository;

    public function __construct(HttpClient $httpClient, Repository $repository)
    {
        $this->httpClient = $httpClient;
        $this->repository = $repository;
    }

    public function createDocument(string $html, HtmlToPdfOptions $options): ResponseInterface
    {
        return $this->httpClient->post('/request', [
            'html'       => $html,
            'auth_token' => $this->repository->get('htmltopdf.auth_token'),
            'callback'   => $this->repository->get('htmltopdf.callback'),
            'landscape'  => $options->isLandscape(),
        ]);
    }
}