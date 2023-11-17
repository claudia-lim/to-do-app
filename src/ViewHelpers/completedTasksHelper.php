<?php

namespace App\ViewHelpers;

class completedTasksHelper
{
    public static function displayCompletdTasks(array $completedTasks) {
        $output='';
        foreach ($completedTasks as $completedTask) {
            $output .= '<li>' . $completedTask['task'] . '</li>';
        }
        return $output;
    }
}