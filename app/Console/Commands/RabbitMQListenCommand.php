<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\RabbitMQService;

class RabbitMQListenCommand extends Command
{
    protected $signature = 'rabbitmq:listen';
    protected $description = 'Listen to RabbitMQ messages';

    protected $rabbitMQService;

    public function __construct(RabbitMQService $rabbitMQService)
    {
        parent::__construct();
        $this->rabbitMQService = $rabbitMQService;
    }

    public function handle()
    {
        $this->rabbitMQService->listenQueue(env('RABBITMQ_QUEUE'), function ($msg) {
            // Пример обработки сообщения
            $data = json_decode($msg->body, true);
            echo 'Received: ', $msg->body, "\n";

            // Логика обработки данных
            // Например, можно сохранить данные в базе данных:
            // Payment::create($data);
        });
    }
}
