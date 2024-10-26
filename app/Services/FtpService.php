<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class FtpService
{
    /**
     * Проверка подключения к FTP-серверу.
     *
     * @return bool|string
     */
    public function testConnection()
    {
        try {
            $files = Storage::disk('ftp')->files('/');
            return $files;
        } catch (\Exception $e) {
            \Log::error('Ошибка при подключении к FTP: ' . $e->getMessage());
            return 'Ошибка: ' . $e->getMessage();
        }
    }

    /**
     * Получение файла с FTP сервера.
     *
     * @param string $filePath
     * @return string|null
     */
    public function getFile(string $filePath): ?string
    {
        try {
            return Storage::disk('ftp')->get($filePath);
        } catch (\Exception $e) {
            \Log::error('Ошибка при получении файла с FTP: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * Загрузка файла на FTP сервер.
     *
     * @param string $filePath
     * @param string $content
     * @return bool
     */
    public function uploadFile(string $filePath, string $content): bool
    {
        try {
            // Загрузка файла на FTP
            return Storage::disk('ftp')->put($filePath, $content);
        } catch (\Exception $e) {
            // Логирование ошибки или любая другая обработка ошибок
            \Log::error('Ошибка при загрузке файла на FTP: ' . $e->getMessage());
            return false;
        }
    }
}
