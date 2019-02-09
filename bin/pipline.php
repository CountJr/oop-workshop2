#!/usr/bin/env php
<?php

use Countjr\Pipline\Pipline;

require_once __DIR__ . '/../vendor/autoload.php';

$files = new Pipline(array_slice(scandir('.'), 2));

print_r( $files
	->bind(function ($data) {
		return array_filter($data, function($x) {
			return $x[0] === '.';
		});
	})
	->bind(function ($data) {
		sort($data);
		return $data;
	})
	->getData());

