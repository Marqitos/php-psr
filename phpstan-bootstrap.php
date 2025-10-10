<?php declare(strict_types=1);

$includePath    = get_include_path();
$srcPath        = __DIR__ . DIRECTORY_SEPARATOR . 'src';
$testPath       = __DIR__ . DIRECTORY_SEPARATOR . 'test';
$includePath   .= PATH_SEPARATOR . $srcPath . PATH_SEPARATOR . $testPath;
set_include_path($includePath);
