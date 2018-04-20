<?php

namespace App\Consumer;

use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;
use PhpAmqpLib\Message\AMQPMessage;

/**
 * Class TaskConsumer
 */
class TaskConsumer implements ConsumerInterface
{
    /**
     * @param AMQPMessage $message
     *
     * @return int
     */
    public function execute(AMQPMessage $message): int
    {
        $data = json_decode($message->getBody(), true);
        var_dump($data);

        return ConsumerInterface::MSG_ACK;
    }
}
