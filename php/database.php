<?php
    define('HOST' , 'localhost');
    define('USER' , 'root');
    define('PASSWORD' , '');
    define('DATABASE' , 'php_practice');


    $db = mysqli_connect(HOST,USER,PASSWORD,DATABASE);

    if (!$db) {
        echo 'database not connect';
    }

?>