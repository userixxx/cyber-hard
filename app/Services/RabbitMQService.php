<?php

namespace App\Services;

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class RabbitMQService
{
    protected $connection;
    protected $channel;

    public function __construct()
    {
        $this->connection = new AMQPStreamConnection(
            env('RABBITMQ_HOST'),
            env('RABBITMQ_PORT'),
            env('RABBITMQ_USER'),
            env('RABBITMQ_PASSWORD')
        );
        $this->channel = $this->connection->channel();
    }

    // Метод для отправки сообщения в очередь
    public function publishMessage($queue, $message)
    {
        // Объявляем очередь, если она не существует
        $this->channel->queue_declare($queue, false, true, false, false);

        // Создаем сообщение и публикуем его в очередь
        $msg = new AMQPMessage($message);
        $this->channel->basic_publish($msg, '', $queue);
    }

    // Метод для прослушивания сообщений (если нужен)
    public function listenQueue($queue, $callback)
    {
        $this->channel->queue_declare($queue, false, true, false, false);
        $this->channel->basic_consume($queue, '', false, true, false, false, $callback);

        while ($this->channel->is_consuming()) {
            $this->channel->wait();
        }
    }

    public function __destruct()
    {
        $this->channel->close();
        $this->connection->close();
    }
}
