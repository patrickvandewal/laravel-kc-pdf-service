<?php

namespace KingsCode\LaravelHtmlToPdf\Tests;

use KingsCode\LaravelHtmlToPdf\Client\DummyClient;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    /** @test */
    public function it_can_test_something(): void
    {
        $client = new DummyClient();
        $this->assertNotNull($client);
    }
}