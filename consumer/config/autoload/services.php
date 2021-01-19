<?php
return [
    'consumers' => [
        [
            'name' => 'CalculatorService',
            'service' => \App\RPC\CalculatorServiceInterface::class,
            /*'nodes' => [
                ['host' => '127.0.0.1', 'port' => 9502],
            ]*/
            'registry' => [
                'protocol' => 'consul',
                'address' => 'http://127.0.0.1:8500',
            ]
        ]
    ]
];