<?php
$app = new Phalcon\Mvc\Micro();

$app->get('/say/welcome/{name}', function ($name) {
    echo "<h1>Welcome $name!</h1>";
});

$app->notFound(function () use ($app) {
    $app->response->setStatusCode(404, "Not Found")->sendHeaders();
    echo 'This is crazy, but this page was not found!';
});

$app->handle();
