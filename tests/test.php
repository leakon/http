<?php


require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use SamplesHttp\Request;

$request 		= new Request();

$url 			= 'https://space.vipmeet.net/api-v1.0/room/testIp';

$result 		= $request->get($url, ['word' => 'leakon']);

var_dump($result);
