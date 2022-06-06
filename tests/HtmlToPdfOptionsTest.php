<?php

namespace KingsCode\LaravelHtmlToPdf\Tests;

use KingsCode\LaravelHtmlToPdf\HtmlToPdfOptions;
use PHPUnit\Framework\TestCase;

class HtmlToPdfOptionsTest extends TestCase
{
    /** @test */
    public function it_can_create_html_to_pdf_options(): void
    {
        $callback = 'callback';
        $callbackAuthToken = '123456789';

        $options = new HtmlToPdfOptions($callback, $callbackAuthToken);

        $this->assertEquals($callback, $options->getCallback());
        $this->assertEquals($callbackAuthToken, $options->getCallbackAuthToken());
    }

    /** @test */
    public function it_can_create_html_to_pdf_options_with_landscape_option(): void
    {
        $callback = 'callback';
        $callbackAuthToken = '123456789';
        $options = new HtmlToPdfOptions($callback, $callbackAuthToken, true);

        $this->assertEquals($callback, $options->getCallback());
        $this->assertEquals($callbackAuthToken, $options->getCallbackAuthToken());
        $this->assertTrue($options->isLandscape());
    }
}