<?php

namespace App\Tests\Shared\Infrastucture\PhpUnit;

use App\Shared\Domain\Bus\Command\Command;
use PHPUnit\Framework\TestCase;

class UnitTestCase extends TestCase
{
    protected function dispatch(Command $command, callable $handler): void
    {
        $handler($command);
    }
}
