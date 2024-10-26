<?php

namespace App\Enums;

enum WeekDay: string
{
    case MONDAY = 'Понедельник';
    case TUESDAY = 'Вторник';
    case WEDNESDAY = 'Среда';
    case THURSDAY = 'Четверг';
    case FRIDAY = 'Пятница';
    case SATURDAY = 'Суббота';
    case SUNDAY = 'Воскресенье';

    public function label(): string
    {
        return match($this) {
            self::MONDAY => 'Понедельник',
            self::TUESDAY => 'Вторник',
            self::WEDNESDAY => 'Среда',
            self::THURSDAY => 'Четверг',
            self::FRIDAY => 'Пятница',
            self::SATURDAY => 'Суббота',
            self::SUNDAY => 'Воскресенье',
        };
    }
}
