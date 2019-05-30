<?php
declare(strict_types=1);

namespace Php;

use Helper\TestBase;
use Mockery;

final class MockeryTest extends TestBase
{
    public function testOverloadPasstThrough()
    {
        $mock = Mockery::mock('overload:' . User::class);
        $mock
            ->shouldReceive('findByName')
            ->withArgs(['mike'])
            ->passthru();

        $user = User::findByName('mike');
        $this->assertEquals('mike', $user->name);
    }
}
