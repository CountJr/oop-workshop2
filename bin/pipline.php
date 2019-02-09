#!/usr/bin/env php
<?php


use Tightenco\Collect\Support\Collection;

require_once __DIR__ . '/../vendor/autoload.php';

$result = (new Collection(array_slice(scandir('.'), 2)))
	->filter(function($file) {
		return $file[0] === '.';
	})
	->sort()
	->pipe(function($collection) {
		$key = ceil($collection->count() / 2) - 1;
		return new Collection([$collection->get((int)$key)]);
	})
	->map(function($file) {
		return substr($file, -1) === 's' ? $file : $file . 's';
	})
	->map(function ($file) {
		return strtoupper($file);
	})->get(0);
print_r($result);
