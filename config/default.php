<?php
return [
    'register' => [
        'user_invoice_taxes' => [
            [
                'name'  => 'SST',
                'rate'  => env('SST_RATE',6.00)
            ],
            [
                'name'  => 'None',
                'rate'  => 0.00
            ]
        ]
    ],
];