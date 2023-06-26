<?php

namespace App\Tests\ContentManager\Unit\Domain;

use App\ContentManager\Domain\ContentId;
use App\Tests\Shared\Domain\IdMother;

class ContentIdMother
{
    public static function create(?string $id = null): ContentId
    {
        return new ContentId($id ?? IdMother::random());
    }
}
