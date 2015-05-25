<?php

namespace Aboardly\Api;

use Aboardly\HttpClient\HttpClient;

/**
 * Returns customers api instance
 */
class Customers
{

    private $client;

    public function __construct(HttpClient $client)
    {
        $this->client = $client;
    }

    /**
     * Updates customer data. If customer does not exist it is created.
     *
     * 'customers/:customerId' PUT
     *
     * @param $customerId Customer identifier - an identifier that can 1:1 match to the user in your own systems.
     */
    public function upsert($customerId, array $body = array())
    {
        $response = $this->client->put('customers/'.rawurlencode($customerId).'', $body);

        return $response;
    }

}
