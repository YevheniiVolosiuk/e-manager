<?php

namespace App\Faker;

use Faker\Provider\Base;

class DepartmentProvider extends Base
{

    protected static array $names = [
        'marketing',
        'operations',
        'sales',
        'human resource',
        'purchase',
    ];

    public function department(): string
    {
        return static::randomElement(static::$names);
    }
}
