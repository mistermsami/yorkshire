<?php

namespace App\Enums;

enum ContactType: int
{
    case Mobile = 0;
    case Email = 1;  
    public function label(): string
    { 
        return match ($this) {
            self::Mobile => __('Mobile'),
            self::Email => __('Email'), 
        };
    }
}
