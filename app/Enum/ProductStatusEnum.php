<?php

namespace App\Enum;

enum ProductStatusEnum: string
{
    case ACTIVE = 'active';
    case SOLD = 'sold';
    case PENDING = 'pending';
    case HIDDEN = 'hidden';
    case EXPIRED = 'expired';
}
