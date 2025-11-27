<?php

namespace App\Enum;

enum PaymentMethodEnum: string
{
    case CARD = 'card';
    case CASH = 'cash';
}
