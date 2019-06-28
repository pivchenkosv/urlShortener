# Url shortener

> A simple lightweight tool for converting identifier to short url and back.

[![Build Status](http://img.shields.io/travis/badges/badgerbadgerbadger.svg?style=flat-square)](https://travis-ci.org/pivchenkosv/urlShortener) [![GitHub issues](https://img.shields.io/github/issues/Naereen/StrapDown.js.svg)](https://github.com/pivchenkosv/urlShortener/issues) [![GitHub pull-requests](https://img.shields.io/github/issues-pr/Naereen/StrapDown.js.svg)](https://github.com/pivchenkosv/urlShortener/pulls) [![License](http://img.shields.io/:license-mit-blue.svg?style=flat-square)](http://badges.mit-license.org)

---

## Table of Contents
- [Example](#example)
- [Installation](#installation)
- [Clone](#clone)
- [Usage](#usage)
- [License](#license)

---

## Example

```php
use function getShortUrlById;
use function getUrlIdentifier;

getShortUrlById(12345); // 'dnh'
getUrlIdentifier('dnh'); // 12345
```

---

## Installation

`composer require stanislau/url-shortener`

### Clone

Clone this repo to your local machine using `https://github.com/pivchenkosv/urlShortener.git`

## Usage

[![asciicast](https://asciinema.org/a/o6xJfcp7wvbzHszp0R4qZHTOE.svg)](https://asciinema.org/a/o6xJfcp7wvbzHszp0R4qZHTOE)

---

## License  [![License](http://img.shields.io/:license-mit-blue.svg?style=flat-square)](https://github.com/pivchenkosv/urlShortener/blob/master/licence.txt)
