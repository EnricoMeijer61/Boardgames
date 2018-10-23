<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */
/**
 * @database - configuration for PDO()
 */

echo ini_get('display_errors');

if (!ini_get('display_errors')) {
    ini_set('display_errors', '1');
}

echo ini_get('display_errors');

return [
    'database' => [
        'name' => 'S1129258_games',
        'username' => 'S1129258',
        'password' => 'J4m?tPMsjLXV37',
        'connection' => 'mysql:hot=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ]
];
