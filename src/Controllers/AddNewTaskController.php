<?php

namespace App\Controllers;

use App\Models\TaskModel;
use Psr\Http\Message\RequestInterface;
use Slim\Http\Interfaces\ResponseInterface;
use Slim\Views\PhpRenderer;

class addNewTaskController
{
private TaskModel $taskModel;
private PhpRenderer $renderer;

public function __construct(TaskModel $taskModel, PhpRenderer $renderer)
{
    $this->taskModel = $taskModel;
    $this->renderer = $renderer;
}

public function __invoke(RequestInterface $request, ResponseInterface $response, $args)
{
    $input = $request->getParsedBody();
    $this->taskModel->addNewTask($input['input']);

    return $response->withHeader('Location', '/')->withStatus(301);
}
}