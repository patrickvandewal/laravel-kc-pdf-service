<?php

namespace KingsCode\LaravelHtmlToPdf\Tests;

use KingsCode\LaravelHtmlToPdf\Client\Client;
use KingsCode\LaravelHtmlToPdf\HtmlToPdfOptions;
use Mockery;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    /** @test */
    public function it_can_test_a_client() {

        $mockedClient = Mockery::mock(Client::class, function (MockInterface $mock) {
            $mock->expects('createDocument')->once();
        });

        $mockedClient->createDocument('', new HtmlToPdfOptions('', ''));

        $this->assertNotNull($mockedClient);
    }
}