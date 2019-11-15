<?php

namespace Mvdnbrk\Laravel\Tests;

use Mvdnbrk\Laravel\Facades\MyParcel as MyParcelFacade;
use Mvdnbrk\Laravel\MyParcelClientAdapter;
use Mvdnbrk\MyParcel\Client;

class MyParcelServiceProviderTest extends TestCase
{
    /** @test */
    public function it_can_resolve_the_myparcel_client()
    {
        $this->assertInstanceOf(Client::class, app('myparcel'));
    }

    /** @test */
    public function it_can_resolve_the_myparcel_client_adapter()
    {
        $this->assertInstanceOf(MyParcelClientAdapter::class, app('myparcel.adapter'));
    }

    /** @test */
    public function it_can_use_the_facade()
    {
        $this->assertInstanceOf(MyParcelClientAdapter::class, MyParcelFacade::setApiKey('1234'));
    }
}
