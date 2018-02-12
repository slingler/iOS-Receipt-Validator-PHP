<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'itunesReceiptValidator.php';

var_dump((new itunesReceiptValidator(itunesReceiptValidator::SANDBOX_URL))
        ->getEndpoint());


require_once __DIR__ . "/vendor/autoload.php";

var_dump(__LINE__);

$collection = (new MongoDB\Client)->test->users;

var_dump(__LINE__);

$insertOneResult = $collection->insertOne([
    'username' => 'admin',
    'email' => 'admin@example.com',
    'name' => 'Admin User',
]);

var_dump(__LINE__);

printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());

var_dump($insertOneResult->getInsertedId());