<?php

namespace App\Tests\Integration\Application\Create;

use App\ContentManager\Application\Create\ContentCreator;
use App\ContentManager\Application\Create\CreateContentCommandHandler;
use App\ContentManager\Domain\ContentRepository;
use App\Tests\ContentManager\Unit\Domain\ContentIdMother;
use App\Tests\Shared\Application\Create\CreateContentCommandMother;
use App\Tests\Shared\Infrastucture\PhpUnit\IntegrationTestCase;

class CreateContentCommandHandlerTest extends IntegrationTestCase
{
    public function testCreate(): void
    {
        self::bootKernel();

        $container = static::getContainer();

        /** @var ContentRepository $repository */
        $repository = $container->get(ContentRepository::class);

        $id = ContentIdMother::create()->random();
        $command = CreateContentCommandMother::create($id);

        $handler = new CreateContentCommandHandler(new ContentCreator($repository));

        $this->dispatch($command, $handler);

        $content = $repository->search($id);

        $this->assertEquals($id, $content->id);
    }
}
