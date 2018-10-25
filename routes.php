<?php
if ($_SERVER['HTTP_HOST'] == 'localhost:8000') {

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
    $router->post('add_user', 'controllers/users/add_user.php');
    $router->post('delete_user', 'controllers/users/delete_user.php');
    $router->post('upd_user', 'controllers/users/upd_user.php');
    $router->post('add_player', 'controllers/add_player.php');
} else {
    /**
     * GET routes
     */
    $router->get('s1129258/P1_00APP_Opdracht', 'controllers/index.php');
    $router->get('s1129258/P1_00APP_Opdracht/home', 'controllers/index.php');
    $router->get('s1129258/P1_00APP_Opdracht/players', 'controllers/players.php');
    $router->get('s1129258/P1_00APP_Opdracht/games', 'controllers/games.php');
    $router->get('S1129258/P1_00APP_Opdracht/users', 'controllers/users.php');
    $router->get('s1129258/P1_00APP_Opdracht/battles', 'controllers/battles.php');
    $router->get('s1129258/P1_00APP_Opdracht/excercise', 'controllers/excercise.php');

    /**
     *
     */
    $router->post('s1129258/P1_00APP_Opdracht/users/add_user', 'controllers/users/add_user.php');
    $router->post('s1129258/P1_00APP_Opdracht/users/delete_user', 'controllers/users/delete_users.php');
    $router->post('s1129258/P1_00APP_Opdracht/users/upd_user', 'controllers/users/upd_user.php');
}

