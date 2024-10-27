<?php

namespace App\Http\Controllers;

use App\Services\VoiceTextService;
use Illuminate\Http\Request;

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
        $audioData = $this->voiceTextService->generateVoice($text);

        return response()->json($audioData);
    }

    /**
     * Генерация текста
     */
    public function generateText(Request $request)
    {
        $text = $request->input('text');
        $textData = $this->voiceTextService->generateText($text);

        return response()->json($textData);
    }

    /**
     * Генерация текста и аудио
     */
    public function generateTextAndVoice(Request $request)
    {
        $text = $request->input('text');
        $data = $this->voiceTextService->generateTextAndVoice($text);

        return response()->json($data);
    }
}
