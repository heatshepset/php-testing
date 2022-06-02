<?php

require_once("vendor/autoload.php");
require("src/StringUtils.php");

use Webmozart\Assert\Assert;
use function StringUtils\capitalize;

Assert::eq(capitalize('hello'), "Hello");

Assert::eq(capitalize(''), '');

echo 'Все тесты пройдены!' . "\r\n";
