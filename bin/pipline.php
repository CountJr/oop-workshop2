#!/usr/bin/env php
<?php
/**
 * Created by PhpStorm.
 * User: ivanpetroff
 * Date: 2019-02-09
 * Time: 16:20
 */
$files = array_slice(scandir('.'), 2);
$files = array_filter($files, function ($file) {
	return $file[0] === '.';
});
sort($files);
$files = $files[ceil(count($files)) / 2];
$files = substr($files, -1) === 's' ? $files : $files . 's';
$files = strtoupper($files);
print_r($files);
