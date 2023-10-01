<?php

namespace App\Tests\Shared\Infrastucture\PhpUnit;

use App\Shared\Domain\Bus\Command\Command;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class IntegrationTestCase extends KernelTestCase
{
    protected function dispatch(Command $command, callable $handler): void
    {
        $handler($command);
    }
}
