<?php

use function getUrlIdentifier;
use function getShortUrlById;

use PHPUnit\Framework\TestCase;

final class UrlShortenerTest extends TestCase
{
    public function testShouldProperlyConvertIdToUrl()
    {
        $this->assertEquals(
            'dnh',
            getShortUrlById(12345)
        );
        $this->assertEquals(
            'b',
            getShortUrlById(00001)
        );
        $this->assertEquals(
            'Aa3',
            getShortUrlById(99999)
        );
    }

    public function testShouldProperlyConvertUrlToId()
    {
        $this->assertEquals(
            12345,
            getUrlIdentifier('dnh')
        );
        $this->assertEquals(
            5741444293694777,
            getUrlIdentifier('AsvvD34FF')
        );
        $this->assertEquals(
            0,
            getUrlIdentifier('')
        );
    }
}
