<?php

namespace App\Enums;

enum WeekType: string
{
    case EVEN = 'Четная';
    case ODD = 'Нечетная';

    public function label(): string
    {
        return match($this) {
            self::EVEN => 'Четная',
            self::ODD => 'Нечетная',
        };
    }
}