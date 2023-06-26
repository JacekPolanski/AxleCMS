<?php

namespace App\ContentManager\Domain;

final readonly class Content
{
    public function __construct(public ContentId $id)
    {
    }

    public static function create(ContentId $id): self
    {
        return new self($id);
    }
}
