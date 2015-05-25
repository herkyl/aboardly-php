<?php

namespace Aboardly\Api;

use Aboardly\HttpClient\HttpClient;

/**
 * Returns events api instance
 */
class Events
{

    private $client;

    public function __construct(HttpClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates a new event for a customer
     *
     * 'customers/:customerId/events/:eventName' POST
     *
     * @param $customerId Customer identifier - an identifier that can 1:1 match to the user in your own systems.
     * @param $eventName Event name (e.g. logged_in, signed_up, added_funds)
     */
    public function create($customerId, $eventName, array $options = array())
    {
        $body = array();
        $response = $this->client->post('customers/'.rawurlencode($customerId).'/events/'.rawurlencode($eventName).'', $body, $options);

        return $response;
    }

}
