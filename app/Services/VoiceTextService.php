<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class VoiceTextService
{
    private $baseUri = 'https://icmparsing.ru';

    /**
     * Отправка текста для генерации голоса (Base64)
     */
    public function generateVoice($text)
    {
        $response = Http::post("{$this->baseUri}/generate_voice", [
            'text' => $text,
        ]);

        return $response->json();
    }

    /**
     * Отправка текста для генерации текста от ChatGPT
     */
    public function generateText($text)
    {
        $response = Http::post("{$this->baseUri}/generate_text", [
            'text' => $text,
        ]);

        return $response->json();
    }

    /**
     * Генерация текста и голоса (Base64)
     */
    public function generateTextAndVoice($text)
    {
        $response = Http::post("{$this->baseUri}/generate_text_and_voice", [
            'text' => $text,
        ]);

        return $response->json();
    }
}
