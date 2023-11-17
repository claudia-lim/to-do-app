<?php

namespace App\Controllers;

use App\Models\TaskModel;
use Psr\Http\Message\RequestInterface;
use Slim\Http\Interfaces\ResponseInterface;
use Slim\Views\PhpRenderer;

class CurrentTasksController
{
    private TaskModel $taskModel;
    private PhpRenderer $renderer;

    public function __construct (TaskModel $taskModel, PhpRenderer $renderer)
    {
        $this->taskModel = $taskModel;
        $this->renderer = $renderer;
    }

    public function __invoke(RequestInterface $request, ResponseInterface $response, $args)
    {
        $currentTasks = $this->taskModel->getCurrentTasks();
        return $this->renderer->render($response, 'currentTasksTemplate.php', ['currentTasks'=>$currentTasks]);
    }

}