<?php
declare(strict_types=1);

use App\Controllers\CoursesAPIController;
use Slim\App;
use Slim\Views\PhpRenderer;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', \App\Controllers\CurrentTasksController::class);

    $app->get('/completed', \App\Controllers\CompletedTasksController::class);

};
