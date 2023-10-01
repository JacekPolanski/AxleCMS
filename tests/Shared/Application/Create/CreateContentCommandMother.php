<?php

namespace App\Tests\Shared\Application\Create;

use App\ContentManager\Application\Create\CreateContentCommand;
use App\ContentManager\Domain\ContentId;
use App\Tests\ContentManager\Unit\Domain\ContentIdMother;

class CreateContentCommandMother
{
    public static function create(?ContentId $id = null): CreateContentCommand
    {
        return new CreateContentCommand($id ?? ContentIdMother::create()->random());
    }
}
