<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\User;

class ScheduleService
{
    protected $rsueBaseUrl = 'https://rasp-api.rsue.ru/api/v1/schedule/lessons/';

    public function getScheduleForRSUE(User $user)
    {
        $group = $user->options['academy_group'] ?? null;

        if (!$group) {
            throw new \Exception('Группа не указана для пользователя.');
        }

        // формируем URL запроса с группой пользователя
        $url = $this->rsueBaseUrl . urlencode($group);

        // отправляем запрос к API
        $response = Http::get($url);

        if ($response->failed()) {
            throw new \Exception('Не удалось получить расписание.');
        }

        $data = $response->json();
        if (!is_array($data)) {
            throw new \Exception('Некорректный формат данных расписания.');
        }

        return $data;
    }
}
