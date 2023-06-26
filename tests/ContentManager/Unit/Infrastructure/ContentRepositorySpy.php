<?php

namespace App\Tests\ContentManager\Unit\Infrastructure;

use App\ContentManager\Domain\Content;
use App\ContentManager\Domain\ContentRepository;

class ContentRepositorySpy implements ContentRepository
{
    private ?Content $savedContent = null;

    public function save(Content $content): void
    {
        $this->savedContent = $content;
    }

    public function isSaveCalledWith(Content $content): bool
    {
        return (string) $this->savedContent->id === (string) $content->id;
    }
}
