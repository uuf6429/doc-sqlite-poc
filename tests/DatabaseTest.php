<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase;
use Illuminate\Support\Facades\Schema;

class DatabaseTest extends TestCase
{
    use RefreshDatabase;

    public function testThatTableExists(): void
    {
        self::assertTableExists('types');
        self::assertTableExists('groups');
        self::assertTableExists('documents');
    }

    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';
        $app->make(Kernel::class)->bootstrap();
        return $app;
    }

    private static function assertTableExists(string $name):void
    {
        self::assertTrue(Schema::hasTable($name), "Table '$name' exist.");
    }
}
