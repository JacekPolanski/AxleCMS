<?php

namespace App\Tests\ContentManager\Unit\Application\Create;

use App\ContentManager\Application\Create\CreateContentCommand;
use App\Tests\ContentManager\Unit\Domain\ContentIdMother;

class CreateContentCommandMother
{
    public static function create(): CreateContentCommand
    {
        return new CreateContentCommand(ContentIdMother::create()->random());
    }
}
