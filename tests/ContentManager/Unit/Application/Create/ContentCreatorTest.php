<?php

namespace App\Tests\ContentManager\Unit\Application\Create;

use App\ContentManager\Application\Create\ContentCreator;
use App\Tests\ContentManager\Unit\Domain\ContentIdMother;
use App\Tests\ContentManager\Unit\Domain\ContentMother;
use App\Tests\ContentManager\Unit\Infrastructure\ContentRepositorySpy;
use App\Tests\Shared\Infrastucture\PhpUnit\UnitTestCase;

class ContentCreatorTest extends UnitTestCase
{
    public function testCreate()
    {
        $repository = new ContentRepositorySpy();
        $creator = new ContentCreator($repository);

        $creator->create($id = ContentIdMother::create());
        $this->assertTrue($repository->isSaveCalledWith(ContentMother::create($id)));
    }
}
