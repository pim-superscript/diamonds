<?php
declare(strict_types=1);

namespace Pim\Diamond\Test;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class DiamondsTest extends TestCase
{
    #[Test]
    public function runs_from_cli(): void
    {
        $actual = `php ../src/index.php 1`;
        $this->assertEquals('1', $actual);
    }

    #[Test]
    public function can_print_two(): void
    {
        $actual = `php ../src/index.php 2`;
        $expected = " 1 \n121\n 1 ";
        $this->assertEquals($expected, $actual);
    }

    #[Test]
    public function clean_version_works_too(): void
    {
        $actual = `php ../src/clean.php 2`;
        $expected = " 1 \n121\n 1 ";
        $this->assertEquals($expected, $actual);
    }
}