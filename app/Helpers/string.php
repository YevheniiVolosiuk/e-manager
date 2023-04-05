<?php

if (!function_exists('firstUpperNextLower')) {
    function firstUpperNextLower(string $value = ''): string
    {
        return ucfirst(strtolower($value));
    }
}

