<?php
/**
 * GET routes
 */
$router->get('', 'controllers/index.php');
$router->get('home', 'controllers/index.php');
$router->get('players', 'controllers/players.php');
$router->get('games', 'controllers/games.php');
$router->get('users', 'controllers/users.php');
$router->get('battles', 'controllers/battles.php');
$router->get('excercise', 'controllers/excercise.php');

/**
 * POST routes
 */
//$router->post('your_unique_id/P1_OOAPP_Opdracht/add_player', 'controllers/add_player.php');
$router->post('/add_player', 'controllers/add_player.php');

