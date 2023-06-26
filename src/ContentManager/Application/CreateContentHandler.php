<?php

namespace App\ContentManager\Application;

use App\ContentManager\Domain\ContentId;

class CreateContentHandler
{
    public function __construct(private readonly ContentCreator $contentCreator)
    {
    }

    public function __invoke(CreateContentCommand $command): void
    {
        $this->contentCreator->create(new ContentId($command->id));
    }
}
