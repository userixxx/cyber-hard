<?php

namespace App\Http\Controllers;

use App\Services\VoiceTextService;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoiceTextController extends Controller
{
    protected $voiceTextService;

    public function __construct(VoiceTextService $voiceTextService)
    {
        $this->voiceTextService = $voiceTextService;
    }

    /**
     * Генерация аудио по тексту
     */
    public function generateVoice(Request $request)
    {
        $text = $request->input('text');
        $userId = $request->user()->id;

        // Сохранение сообщения пользователя
        Message::create([
            'user_id' => $userId,
            'message' => $text,
            'sender' => 'user'
        ]);

        // Генерация аудио
        $audioData = $this->voiceTextService->generateVoice($text);

        // Сохранение ответа бота
        Message::create([
            'user_id' => $userId,
            'message' => $audioData['response'] ?? 'Audio generated', // или другое сообщение, если нет текста
            'sender' => 'bot'
        ]);

        return response()->json($audioData);
    }

    /**
     * Генерация текста
     */
    public function generateText(Request $request)
    {
        $text = $request->input('text');
        $userId = Auth::id();

        // Сохранение сообщения пользователя
//        Message::create([
//            'user_id' => $userId,
//            'message' => $text,
//            'sender' => 'user'
//        ]);

        // Генерация текста от ChatGPT
        $textData = $this->voiceTextService->generateText($text);

        // Сохранение ответа бота
//        Message::create([
//            'user_id' => $userId,
//            'message' => $textData['response'] ?? 'Text generated', // или другое сообщение
//            'sender' => 'bot'
//        ]);

        return response()->json($textData);
    }

    /**
     * Генерация текста и аудио
     */
    public function generateTextAndVoice(Request $request)
    {
        $text = $request->input('text');
        $userId = $request->user()->id;

        // Сохранение сообщения пользователя
        Message::create([
            'user_id' => $userId,
            'message' => $text,
            'sender' => 'user'
        ]);

        // Генерация текста и аудио
        $data = $this->voiceTextService->generateTextAndVoice($text);

        // Сохранение ответа бота
        Message::create([
            'user_id' => $userId,
            'message' => $data['response'] ?? 'Text and audio generated', // или другое сообщение
            'sender' => 'bot'
        ]);

        return response()->json($data);
    }
}
