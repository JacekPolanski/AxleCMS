<?php

namespace App\ContentManager\Domain;

interface ContentRepository
{
    public function save(Content $content): void;

    public function search(ContentId $id): Content;
}
