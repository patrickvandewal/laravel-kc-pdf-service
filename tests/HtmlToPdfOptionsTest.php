<?php

namespace KingsCode\LaravelHtmlToPdf\Tests;

use KingsCode\LaravelHtmlToPdf\KCHtmlToPdfOptions;
use PHPUnit\Framework\TestCase;

class HtmlToPdfOptionsTest extends TestCase
{
    /** @test */
    public function it_can_create_html_to_pdf_options(): void
    {
        $callback = 'callback';
        $callbackAuthToken = '123456789';

        $options = new KCHtmlToPdfOptions($callback, $callbackAuthToken);

        $this->assertEquals($callback, $options->getCallback());
        $this->assertEquals($callbackAuthToken, $options->getCallbackAuthToken());
    }

    /** @test */
    public function it_can_create_html_to_pdf_options_with_landscape_option(): void
    {
        $callback = 'callback';
        $callbackAuthToken = '123456789';
        $options = new KCHtmlToPdfOptions($callback, $callbackAuthToken, landscape: true);

        $this->assertEquals($callback, $options->getCallback());
        $this->assertEquals($callbackAuthToken, $options->getCallbackAuthToken());
        $this->assertTrue($options->isLandscape());
    }

    /** @test */
    public function it_can_create_html_to_pdf_options_with_print_background_option(): void
    {
        $callback = 'callback';
        $callbackAuthToken = '123456789';
        $options = new KCHtmlToPdfOptions($callback, $callbackAuthToken, printBackground: true);

        $this->assertEquals($callback, $options->getCallback());
        $this->assertEquals($callbackAuthToken, $options->getCallbackAuthToken());
        $this->assertTrue($options->getPrintBackground());
    }
}