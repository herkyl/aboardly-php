<?php

namespace Aboardly;

use Aboardly\HttpClient\HttpClient;

class Client
{
    private $httpClient;

    public function __construct($auth = array(), array $options = array())
    {
        $this->httpClient = new HttpClient($auth, $options);
        $this->customers = new Api\Customers($this->httpClient);
        $this->events = new Api\Events($this->httpClient);
    }

}
