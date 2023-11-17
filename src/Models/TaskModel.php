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

    public function addNewTask(string $newTask)
    {
        $query = $this->db->prepare("INSERT INTO `tasks`(`task`, `completed`)
VALUES (?, 0);");
        $query->execute([$newTask]);
    }

    public function markAsComplete(int $id) {
        $query = $this->db->prepare("UPDATE `tasks`
SET `completed` = 1
WHERE `id` = ?;");
        $query->execute([$id]);
    }

    public function getTaskById(int $id)
    {
        $query = $this->db->prepare("SELECT `id`, `task`, `completed`
FROM `tasks`
WHERE `id`= ? ");
        $query->execute([$id]);
        return $query->fetch();
    }
}