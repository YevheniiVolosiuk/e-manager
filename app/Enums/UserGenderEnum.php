<?php

namespace App\Enums;

enum UserGenderEnum: string
{
    case ADMIN = 'admin';
    case MANAGER = 'manager';
    case EMPLOYEE = 'employee';

    public static function getAllValue()
    {
        return array_column(UserGenderEnum::cases(), 'value');
    }
}
