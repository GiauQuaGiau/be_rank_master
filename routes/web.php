<?php
// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$router->group([
    'prefix' => 'api'
], function () use ($router) {
    $router->get('/', function () use ($router) {
        $data = [
            'php' => phpversion(),
            'framework' => $router->app->version(),
        ];
        return response()->json($data, 200);
    });

    

});
