<?php

namespace App\Tests\ContentManager\Unit\Application\Create;

use App\ContentManager\Application\Create\ContentCreator;
use App\ContentManager\Application\Create\CreateContentCommandHandler;
use App\Tests\ContentManager\Unit\Domain\ContentMother;
use App\Tests\ContentManager\Unit\Infrastructure\ContentRepositorySpy;
use App\Tests\Shared\Infrastucture\PhpUnit\UnitTestCase;

class CreateContentCommandHandlerTest extends UnitTestCase
{
    public function testShouldCreateValidContent(): void
    {
        $command = CreateContentCommandMother::create();
        $repository = new ContentRepositorySpy();
        $handler = new CreateContentCommandHandler(new ContentCreator($repository));

        $content = ContentMother::fromRequest($command);

        $this->dispatch($command, $handler);
        $this->assertTrue($repository->isSaveCalledWith($content));
    }
}
