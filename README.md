# Solvari PHP SDK

[![Build](https://img.shields.io/gitlab/pipeline/Zandor300/solvari-php-sdk.svg?gitlab_url=https%3A%2F%2Fgit.zsinfo.nl)](https://git.zsinfo.nl/Zandor300/solvari-php-sdk/pipelines)
[![Version](https://img.shields.io/packagist/v/zandor300/solvari-php-sdk.svg)](https://packagist.org/packages/zandor300/apnsframework)
[![License](https://img.shields.io/packagist/l/zandor300/solvari-php-sdk.svg)](https://git.zsinfo.nl/Zandor300/solvari-php-sdk/blob/master/LICENSE)
[![PHP Version](https://img.shields.io/packagist/php-v/zandor300/solvari-php-sdk.svg)](https://packagist.org/packages/zandor300/solvari-php-sdk)
[![Downloads](https://img.shields.io/packagist/dt/zandor300/solvari-php-sdk.svg)](https://packagist.org/packages/zandor300/solvari-php-sdk)

PHP framework for updating the lead status in Solvari Pro.

## Install

You can use composer to include this framework into your project. The project is available through [Packagist](https://packagist.org/packages/zandor300/solvari-php-sdk).

```shell
composer require zandor300/solvari-php-sdk
```

## Usage

```php
use Solvari\Solvari;
use Solvari\SolvariLeadStatus;
use Solvari\Exception\SolvariException;

$solvari = new Solvari("API_KEY_HERE");

$solvariLeadId = 12345678;
$targetSolvariStatus = SolvariLeadStatus::QUOTE_SEND;

try {
    $solvari->setLeadStatus($solvariLeadId, $targetSolvariStatus);
} catch(SolvariException $e) {
    echo $e->getMessage();
}
```
