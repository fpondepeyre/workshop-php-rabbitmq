<?php

namespace App\Message;

class TaskMessage
{
    /**
     * @var
     */
    private $title;

    /**
     * TaskNotification constructor.
     *
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return TaskMessage
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
