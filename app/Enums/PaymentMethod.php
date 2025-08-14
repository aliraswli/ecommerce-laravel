<?php

namespace App\Enums;

enum PaymentMethod: string
{
    case ONLINE = "online";
    case CASH = "cash";
}
