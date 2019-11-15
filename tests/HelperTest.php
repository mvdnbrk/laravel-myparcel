<?php

namespace Mvdnbrk\Laravel\Tests;

use Mvdnbrk\Laravel\MyParcelClientAdapter;

class HelperTest extends TestCase
{
    /** @test */
    public function it_has_a_helper_function()
    {
        $this->assertTrue(function_exists('myparcel'));

        $this->assertInstanceOf(MyParcelClientAdapter::class, myparcel());
    }
}
