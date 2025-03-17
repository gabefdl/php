<?php
$namoro = [
    'helloe' => [
        'telefone' => '12345',
        'email' => 'helloe_sobral@gmail.com'
    ],

    'gabriel' => [
        'telefone' => '67890',
        'email' => 'gabe.hfdl@gmail.com'
    ]
    ];

    echo '<pre>';
    print_r($namoro);
    echo '</pre>';

    // apresentar dados específicos
    echo $namoro['helloe']['email'];


    // arrays com valores numericos
    $notas = [
        [10, 20, 30], //indice 0
        [100, 200, 300], //indice 1
        [1000, 2000, 300] // indice 2
    ];
    echo '<pre>';
    print_r($notas);
    echo '</pre>';

    echo $notas[1][2]; // vai mostrar o 300

