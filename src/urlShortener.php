<?php
/**
 * URL Conversion from url identifier to short url and back
 *
 * PHP version 7.2
 *
 * @category PHP
 * @package  PHP_CodeSniffer
 * @author   Stanislau Piuchanka <pivchenko.stas.1999@gmail.com>
 * @license  https://github.com/pivchenkosv/urlShortener/licence.txt Licence
 * @link     https://github.com/pivchenkosv/urlShortener
 */

/**
 * Transforms URL identifier to short URL
 *
 * @param integer $id Original URL identifier from database
 *
 * @return string
 */
function getShortUrlById($id)
{
    $map = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

    $shorturl = '';

    while ($id) {
        $shorturl = $shorturl . $map[$id % 62];
        $id = floor($id / 62);
    }

    $shorturl = strrev($shorturl);

    return $shorturl;
}

;

/**
 * Transforms short URL to its identifier
 *
 * @param string $url Short URL
 *
 * @return float|int
 */
function getUrlIdentifier($url)
{
    $id = 0; // initialize result

    // A simple base conversion logic
    for ($i = 0; $i < strlen($url); $i++) {
        if (ord('a') <= ord($url[$i]) && ord($url[$i]) <= ord('z')) {
            $id = $id * 62 + ord($url[$i]) - ord('a');
        }
        if (ord('A') <= ord($url[$i]) && ord($url[$i]) <= ord('Z')) {
            $id = $id * 62 + ord($url[$i]) - ord('A') + 26;
        }
        if ('0' <= ord($url[$i]) && ord($url[$i]) <= '9') {
            $id = $id * 62 + ord($url[$i]) - ord('0') + 52;
        }
    }
    return $id;
}

;
