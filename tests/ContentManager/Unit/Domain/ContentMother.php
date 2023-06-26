<?php

namespace App\Tests\ContentManager\Unit\Domain;

use App\ContentManager\Application\Create\CreateContentCommand;
use App\ContentManager\Domain\Content;
use App\ContentManager\Domain\ContentId;

class ContentMother
{
    public static function create(ContentId $id): Content
    {
        return new Content($id);
    }

    public static function fromRequest(CreateContentCommand $request): Content
    {
        return self::create(ContentIdMother::create($request->id));
    }
}
