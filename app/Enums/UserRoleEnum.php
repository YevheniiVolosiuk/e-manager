<?php

namespace App\Enums;

enum UserRoleEnum: string
{
    case ADMIN = 'admin';
    case MANAGER = 'manager';
    case EMPLOYEE = 'employee';

    public static function getAllValue(): array
    {
        return array_column(UserRoleEnum::cases(), 'value');
    }
}
