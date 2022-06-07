<?php

namespace KingsCode\LaravelHtmlToPdf\Tests;

use KingsCode\LaravelHtmlToPdf\Client\KCHtmlToPdfClient;
use KingsCode\LaravelHtmlToPdf\KCHtmlToPdfOptions;
use Mockery;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    /** @test */
    public function it_can_test_a_client() {

        $mockedClient = Mockery::mock(KCHtmlToPdfClient::class, function (MockInterface $mock) {
            $mock->expects('createDocument')->once();
        });

        $mockedClient->createDocument('', new KCHtmlToPdfOptions('', ''));

        $this->assertNotNull($mockedClient);
    }
}