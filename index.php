<?php
require 'WineController.php';
use Phalcon\Mvc\Micro\Collection as MicroCollection;
$app = new Phalcon\Mvc\Micro();
$wine = new MicroCollection();

//Set the main handler. ie. a controller instance
$wine->setHandler(new WineController());

$wine->get('/api/v4/wine', 'getAllWines');

$app->notFound(function () use ($app) {
    $app->response->setStatusCode(404, "Not Found")->sendHeaders();
    echo 'This is crazy, but this page was not found!';
});
$app->mount($wine);
$app->handle();
