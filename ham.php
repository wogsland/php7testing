<?php

require (__DIR__.'/Ham/ham.php');

$app = new Ham('example');

$app->route('/', function($app) {
    return 'Hello, world!';
});

$app->run();
