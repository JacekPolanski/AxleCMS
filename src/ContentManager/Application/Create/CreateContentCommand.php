<?php

namespace App\ContentManager\Application\Create;

use App\Shared\Domain\Bus\Command\Command;

final readonly class CreateContentCommand implements Command
{
    public function __construct(public string $id)
    {
    }
}
