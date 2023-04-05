<?php

namespace App\Enums;

enum UserRoleEnum :string
{
    case MAEL = 'M';
    case FEMALE = 'F';

    public static function getAllValue()
    {
        return array_column(UserRoleEnum::cases(), 'value');
    }
}
