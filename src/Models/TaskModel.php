<?php

namespace App\Models;

class TaskModel
{
    private \PDO $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getCurrentTasks() : array
    {
        $query = $this->db->prepare(
            "SELECT `id`, `task`, `completed`
            FROM `tasks`
            WHERE `completed` = 0;");
        $query->execute();
        return $query->fetchAll();
    }

    public function getCompletedTasks() : array
    {
        $query = $this->db->prepare(
            "SELECT `id`, `task`, `completed`
            FROM `tasks`
            WHERE `completed` = 1;");
        $query->execute();
        return $query->fetchAll();
    }
}