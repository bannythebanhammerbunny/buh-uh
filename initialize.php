<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    session_start(); //turn on session

    require_once('database.php');
    require_once('query_functions.php');

    $db = db_connect();

?>