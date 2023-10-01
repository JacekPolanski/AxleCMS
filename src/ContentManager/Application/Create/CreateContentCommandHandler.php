<?php

namespace App\ContentManager\Application\Create;

use App\ContentManager\Domain\ContentId;

readonly class CreateContentCommandHandler
{
    public function __construct(private ContentCreator $contentCreator)
    {
    }

    public function __invoke(CreateContentCommand $command): void
    {
        $this->contentCreator->create(new ContentId($command->id));
    }
}
