<?php

namespace App\ContentManager\Application\Create;

use App\ContentManager\Domain\Content;
use App\ContentManager\Domain\ContentId;
use App\ContentManager\Domain\ContentRepository;

readonly class ContentCreator
{
    public function __construct(private ContentRepository $contents)
    {
    }

    public function create(ContentId $id): void
    {
        $content = Content::create($id);

        $this->contents->save($content);
    }
}
