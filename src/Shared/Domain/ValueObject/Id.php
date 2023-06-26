<?php

namespace App\Shared\Domain\ValueObject;

use Ramsey\Uuid\Uuid;

class Id
{
    public function __construct(private readonly string $value)
    {
    }

    public function random(): self
    {
        return new static(Uuid::uuid4());
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
