<?php

namespace App\ViewHelpers;

class currentTasksHelper
{
    public static function displayCurrentTasks(array $currentTasks) : string {
        $output='';
foreach ($currentTasks as $currentTask) {
    $output .= '<li>'
        . $currentTask['task']
        . '<form method="post" action="/task/'
        . $currentTask['id']
        . '"><input type="submit" value="complete" name="complete"></form></li>';
}
return $output;
    }
}