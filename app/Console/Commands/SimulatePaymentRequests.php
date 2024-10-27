<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class SimulatePaymentRequests extends Command
{
    protected $signature = 'simulate:payments';
    protected $description = 'Send simulated payment requests every 5-15 seconds';

    public function handle()
    {
        $this->info("Starting to send simulated payment requests...");

        while (true) {
            $data = [
                'user_id' => rand(1, 100),                // случайный ID пользователя
                'amount' => rand(10, 5060) / 10           // случайная сумма от 1 до 100
            ];

            $response = Http::post('http://localhost:8000/api/payment', $data);

            $this->info("Sent payment: " . json_encode($data));
            $this->info("Response: " . $response->body());

            $interval = rand(1, 10);
            sleep($interval);
        }
    }
}
