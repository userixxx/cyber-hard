<?php

namespace App\Http\Controllers;

use App\Services\RabbitMQService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $rabbitMQService;

    public function __construct(RabbitMQService $rabbitMQService)
    {
        $this->rabbitMQService = $rabbitMQService;
    }

    public function processPayment(Request $request)
    {
        $data = [
            'user_id' => $request->input('user_id'),
            'amount' => $request->input('amount')
        ];

        // Отправка сообщения в очередь
        $this->rabbitMQService->publishMessage('payments', json_encode($data));

        return response()->json(['status' => 'Message sent to queue']);
    }
}
