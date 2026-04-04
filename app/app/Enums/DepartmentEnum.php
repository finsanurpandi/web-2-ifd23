<?php

namespace App\Enums;

enum DepartmentEnum: string
{
    case SIPIL = '1';
    case INDUSTRI = '2';
    case INFORMATIKA = '3';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::SIPIL => 'TEKNIK SIPIL',
            self::INDUSTRI => 'TEKNIK INDUSTRI',
            self::INFORMATIKA => 'TEKNIK INFORMATIKA',
        };
    }

    public function getCode(): ?string
    {
        return match ($this) {
            self::SIPIL => '22201',
            self::INDUSTRI => '26201',
            self::INFORMATIKA => '55201',
        };
    }
}
