<?php

namespace App\ContentManager\Application;

use App\ContentManager\Domain\Content;
use App\ContentManager\Domain\ContentId;
use App\ContentManager\Domain\ContentRepository;

class ContentCreator
{
    public function __construct(private readonly ContentRepository $contents)
    {
    }

    public function create(ContentId $id): void
    {
        $content = Content::create($id);

        $this->contents->save($content);
    }
}
