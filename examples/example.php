<?php

require_once 'vendor/autoload.php';

$auth = array('username' => 'ac47f602', 'password' => '5e1ad19793334cae3fea5078f7304033');

$client = new Aboardly\Client($auth);

// First we create a user

$options = array('email' => 'test2@foo.bar', 'name' => 'php name');
$response = $client->customers->upsert("my_user_123", $options);

echo $response->code;

// Then we send the signed_up or any other event

$response = $client->events->create("my_user_123", 'signed_up');

echo $response->code;
