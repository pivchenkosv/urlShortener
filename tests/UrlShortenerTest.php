<?php

require_once 'src/urlShortener.php';

use PHPUnit\Framework\TestCase;

final class UrlShortenerTest extends TestCase
{
    public function testShouldProperlyConvertIdToUrl(): void
    {
        $this->assertEquals(
            'dnh',
            getShortUrlById(12345)
        );
    }

    public function testShouldProperlyConvertUrlToId(): void
    {
        $this->assertEquals(
            12345,
            getUrlIdentifier('dnh')
        );
    }
}
