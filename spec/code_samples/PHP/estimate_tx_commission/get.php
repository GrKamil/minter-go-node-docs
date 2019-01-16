<?php
use Minter\MinterAPI;
use GuzzleHttp\Exception\RequestException;

$api = new MinterAPI('https://minter-node-1.testnet.minter.network:8841');

try {
	$tx = '0x...';
    $response = $api->estimateTxCommission($tx);
    print_r($response);
} catch(RequestException $exception) {
    // handle error
}
