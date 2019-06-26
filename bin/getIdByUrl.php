#!/usr/bin/env php
<?php

require_once "src/urlShortener.php";

echo 'Url identifier is: ' . getUrlIdentifier($argv[1]) . PHP_EOL;
