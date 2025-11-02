<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function($app) {
    require __DIR__  . '/routes/produtos.php';
};
