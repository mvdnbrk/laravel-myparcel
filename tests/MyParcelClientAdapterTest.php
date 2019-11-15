<?php

namespace Mvdnbrk\Laravel\Tests;

use Mvdnbrk\Laravel\MyParcelClientAdapter;
use Mvdnbrk\MyParcel\Client;

class MyParcelClientAdapterTest extends TestCase
{
    /**
     * @var \Mvdnbrk\MyParcel\Client
     */
    protected $client;

    /**
     * @var \Mvdnbrk\Laravel\MyParcelClientAdapter
     */
    protected $adapter;

    protected function setUp(): void
    {
        $this->client = new Client;
        $this->adapter = new MyParcelClientAdapter($this->client);
    }

    /** @test */
    public function it_adapts_the_endpoints()
    {
        $endpoints = [
            'labels',
            'shipments',
            'tracktrace',
            'servicePoints',
        ];

        foreach ($endpoints as $endpoint) {
            $this->assertAdaptedEndpoint($this->client, $this->adapter, $endpoint);
        }
    }

    /** @test */
    public function it_can_set_the_api_key()
    {
        $this->assertInstanceOf(MyParcelClientAdapter::class, $this->adapter->setApiKey('1234'));
    }

    /**
     * Assert that the adapter endpoint method returns the same as the client attribute.
     * For example: $adapter->shipments() should be equal to $client->shipments.
     *
     * @param  \Mvdnbrk\MyParcel\Client  $client
     * @param  \Mvdnbrk\Laravel\MyParcelClientAdapter  $adapter
     * @param  string $endpoint
     * @return void
     *
     * @throws \PHPUnit\Framework\ExceptionWrapper
     */
    protected function assertAdaptedEndpoint($client, $adapter, $endpoint)
    {
        $this->assertEquals($client->$endpoint, $adapter->$endpoint());
    }
}
