<?php

namespace App\Enums;

enum Status: int
{
    case New = 1;
    case Completed = 2;

    public static function labels(): array
    {
        return [
            self::New->value => 'Новый',
            self::Completed->value => 'Завершенный',
        ];
    }

    public function label(): string
    {
        return self::labels()[$this->value];
    }
}
