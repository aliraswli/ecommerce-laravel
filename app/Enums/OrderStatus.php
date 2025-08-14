<?php

namespace App\Enums;

enum OrderStatus: string
{
    case PENDING = "pending";
    case PROCESSING = "processing";
    case SHIPPED = "shipped";
    case DELIVERED = "delivered";
    case CANCELLED = "cancelled";

    public function label(): string
    {
        return match ($this) {
            self::PENDING => 'در انتظار بررسی',
            self::PROCESSING => 'در حال پردازش',
            self::SHIPPED => 'ارسال شده',
            self::DELIVERED => 'تحویل داده شده',
            self::CANCELLED => 'لغو شده',
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::PENDING => 'text-yellow-500 bg-yellow-100',
            self::PROCESSING => 'text-blue-500 bg-blue-100',
            self::SHIPPED => 'text-indigo-500 bg-indigo-100',
            self::DELIVERED => 'text-green-500 bg-green-100',
            self::CANCELLED => 'text-red-500 bg-red-100',
        };
    }
}
