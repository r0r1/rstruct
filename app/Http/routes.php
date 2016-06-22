<?php
$app->post('/auth/login', 'AuthController@postLogin');

$app->group(['middleware' => 'auth:api'], function ($app) {
    $app->get('/', function () use ($app) {
        return $app->version();
    });

    $app->get('/test', function () {
        return response()->json([
            'message' => 'Hello World!',
        ]);
    });
});
