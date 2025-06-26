<?php

namespace App\Enums;

enum AppointmentStatus: int
{
    case Pending = 0;
    case Confirm = 1;
    case Complete = 2;

    public function label(): string
    {
        return match($this) {
            self::Pending => 'Pending',
            self::Confirm => 'Confirmed',
            self::Complete => 'Complete',
        };
    }
}
