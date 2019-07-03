<?php

require_once __DIR__ . '/../vendor/autoload.php';

use ResponseJson\ResponseJson;

$responseJson = new ResponseJson();

$response = $responseJson->response(
    'd0684895-cb6c-4c9a-a0aa-0aed7cfc1f46',
    microtime(true)-0.1,
    'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhdWQiOiJ0ZXN0IiwiZXhwIjozMCwiaWF0IjoxNTYyMTcwOTIwLCJpc3MiOiJ0ZXN0Iiwic3ViIjoiIn0=.wPdhZtjpyBjObFWbxPx33GNJpvKHIznPV0GQ2NiQp5A=',
    [
        'data' => 'test',
    ],
    'message'
);
print_r($response);
echo PHP_EOL;

$responseDelete = $responseJson->responseDelete();
print_r($responseDelete);
