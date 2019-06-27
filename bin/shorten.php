#!/usr/bin/env php
<?php

require_once __DIR__.'/../src/urlShortener.php';

echo 'shortened url is: ' . getShortUrlById($argv[1]) . PHP_EOL;
