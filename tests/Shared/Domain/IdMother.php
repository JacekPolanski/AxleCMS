<?php

namespace App\Tests\Shared\Domain;

use Ramsey\Uuid\Uuid;

class IdMother
{
    public static function random(): string
    {
        return Uuid::uuid4()->toString();
    }
}
