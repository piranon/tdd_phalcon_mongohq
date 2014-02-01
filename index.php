<?php
$app = new Phalcon\Mvc\Micro();

$app->get('/say/welcome/{name}', function ($name) {
	$tuCurl = curl_init(); 
	curl_setopt($tuCurl, CURLOPT_URL, "https://api.mongohq.com/databases/wine/collections/australian/documents?_apikey=9guoo8ndq9hj5y1ur1w1"); 
	curl_setopt($tuCurl, CURLOPT_PORT , 443); 
	curl_setopt($tuCurl, CURLOPT_RETURNTRANSFER, 1); 
	$tuData = curl_exec($tuCurl); 
	curl_close($tuCurl); 
  $response = new Phalcon\Http\Response();

  $response->setContentType('application/json');
  $response->setContent($tuData);
	return $response;
});

$app->notFound(function () use ($app) {
    $app->response->setStatusCode(404, "Not Found")->sendHeaders();
    echo 'This is crazy, but this page was not found!';
});

$app->handle();
