<?php


/* Initializing the database properties and its values*/
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'php-login-with-session';
// $port = " optional" //

$connection = mysqli_connect($host, $user, $password, $database);
// $connection = mysqli_connect($host, $user, $password, $database, $port); => Optional with port


/* Error conditioning for database's connection as we check if the database is successfully work*/
if(mysqli_connect_error()) {
    echo 'error';
}

?>