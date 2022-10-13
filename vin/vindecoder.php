<?php

$request = new HttpRequest();
$request->setUrl('https://vindecoder.p.rapidapi.com/decode_vin');
$request->setMethod(HTTP_METH_GET);

$request->setQueryData([
	'vin' => '4F2YU09161KM33122'
]);

$request->setHeaders([
	'X-RapidAPI-Key' => 'SIGN-UP-FOR-KEY',
	'X-RapidAPI-Host' => 'vindecoder.p.rapidapi.com'
]);

try {
	$response = $request->send();

	echo $response->getBody();
} catch (HttpException $ex) {
	echo $ex;
}


