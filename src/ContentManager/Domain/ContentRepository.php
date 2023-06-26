<?php

namespace App\ContentManager\Domain;

interface ContentRepository
{
    public function save(Content $content): void;
}
