<?php

namespace App\Enums;

enum EmployeeGenderEnum: string
{
    case MAEL = 'M';
    case FEMALE = 'F';

    public static function getAllValue(): array
    {
        return array_column(EmployeeGenderEnum::cases(), 'value');
    }
}
