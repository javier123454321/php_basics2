<?php

return [
    'database' => [
        'SQLServer' => 'mysql:host=127.0.0.1;',
        'DBName' => 'mytodo',
        'username' => 'root',
        'password' => 'bodhi108',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ]
];
