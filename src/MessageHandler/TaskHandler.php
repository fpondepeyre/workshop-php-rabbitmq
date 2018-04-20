<?php

namespace App\MessageHandler;

use App\Message\TaskMessage;

/**
 * Class TaskNotificationHandler
 */
class TaskHandler
{
    /**
     * @param TaskMessage $task
     */
    public function __invoke(TaskMessage $task)
    {
        echo "New Task: ".$task->getTitle()."\n";
    }
}
