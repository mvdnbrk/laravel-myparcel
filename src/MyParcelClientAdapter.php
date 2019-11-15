<?php

namespace Mvdnbrk\Laravel;

use Mvdnbrk\MyParcel\Client;

class MyParcelClientAdapter
{
    /**
     * @var \Mvdnbrk\MyParcel\Client
     */
    protected $client;

    /**
     * Construct a new api adapter instance.
     *
     * @param  \Mvdnbrk\MyParcel\Client  $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param  string  $value
     * @return \Mvdnbrk\Laravel\MyParcelClientAdapter
     */
    public function setApiKey(string $value)
    {
        $this->client->setApiKey($value);

        return $this;
    }

    /**
     * @return \Mvdnbrk\MyParcel\Endpoints\Labels
     */
    public function labels()
    {
        return $this->client->labels;
    }

    /**
     * @return \Mvdnbrk\MyParcel\Endpoints\Shipments
     */
    public function shipments()
    {
        return $this->client->shipments;
    }

    /**
     * @return \Mvdnbrk\MyParcel\Endpoints\ServicePoints
     */
    public function servicePoints()
    {
        return $this->client->servicePoints;
    }

    /**
     * @return \Mvdnbrk\MyParcel\Endpoints\TrackTrace
     */
    public function tracktrace()
    {
        return $this->client->tracktrace;
    }
}
