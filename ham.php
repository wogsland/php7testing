<?php

require (__DIR__.'/Ham/ham/ham.php'); // this looks ridiculous

$app = new Ham('example');

$app->route('/', function($app) {
    return 'Hello, world!';
});

$app->run();
