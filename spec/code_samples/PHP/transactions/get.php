<?php
use Minter\MinterAPI;
use GuzzleHttp\Exception\RequestException;

$api = new MinterAPI('https://minter-node-1.testnet.minter.network:8841');

try {
    $response = $api->getTransactions('your query here');
    print_r($response);
} catch(RequestException $exception) {
    
}
