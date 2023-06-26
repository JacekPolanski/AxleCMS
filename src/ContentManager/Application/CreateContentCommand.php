<?php

namespace App\ContentManager\Application;

final class CreateContentCommand
{
    public function __construct(public readonly string $id)
    {
    }
}
