<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */
/**
 * @database - configuration for PDO()
 */


return [
    'database' => [
        'name' => 'boardgamesapp',
        'username' => 'root',
        'password' => 'root11',
        'connection' => 'mysql:host=localhost:3309',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ]
];
