<?php

namespace App\ViewHelpers;

class completedTasksHelper
{
    public static function displayCompletedTasks(array $completedTasks) : string {
        $output='';
        foreach ($completedTasks as $completedTask) {
            $output .= '<li>' . $completedTask['task'] . '</li>';
        }
        return $output;
    }
}