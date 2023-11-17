<?php

namespace App\ViewHelpers;

class currentTasksHelper
{
    public static function displayCurrentTasks(array $currentTasks) {
        $output='';
foreach ($currentTasks as $currentTask) {
    $output .= '<li>' . $currentTask['task'] . '</li>';
}
return $output;
    }
}