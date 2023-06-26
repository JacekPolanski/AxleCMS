<?php

namespace App\ContentManager\Domain;

final class Content
{
    public function __construct(private readonly ContentId $id)
    {
    }

    public static function create(ContentId $id): self
    {
        return new self($id);
    }
}
