#!/usr/bin/env php
<?php

require_once __DIR__.'/../src/urlShortener.php';

echo 'Url identifier is: ' . getUrlIdentifier($argv[1]) . PHP_EOL;
