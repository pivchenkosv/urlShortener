#!/usr/bin/env php
<?php

require_once "src/urlShortener.php";

echo 'shortened url is: ' . getShortUrlById($argv[1]) . PHP_EOL;
