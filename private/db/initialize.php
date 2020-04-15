<?php
    //define("PRIVATE_PATH", dirname(__FILE__));
    //define("PROJECT_PATH", dirname(PRIVATE_PATH));
    


    define("WWW_ROOT", 'http://localhost/Festival%20Site/index.php');
    require_once('db_credentials.php');

    require_once("database.php");
    
    $db = db_connect();