<?php
$loader = new \Phalcon\Loader();
$loader->registerDirs(
    array(
        'app/controllers/',
        'libraries/'
    )
)->register();

$app = new Phalcon\Mvc\Micro();
$wine = new Phalcon\Mvc\Micro\Collection();

$di = new Phalcon\DI\FactoryDefault();
$di->set('curlAdaptor', new CurlAdaptor());
$di->set('wineLibrary', array(
    'className' => 'WineLibraryMongoHq',
    'arguments' => array(
        array('type' => 'service', 'name' => 'curlAdaptor')
    )
));
$di->set('wineController', array(
    'className' => 'WineController',
    'arguments' => array(
        array('type' => 'service', 'name' => 'wineLibrary')
    )
));
$wine->setHandler($di->get('wineController'));
$wine->get('/api/v4/wine', 'getAllWines');

$app->notFound(function () use ($app) {
    $app->response->setStatusCode(404, "Not Found")->sendHeaders();
    echo 'This is crazy, but this page was not found!';
});
$app->mount($wine);
$app->handle();
