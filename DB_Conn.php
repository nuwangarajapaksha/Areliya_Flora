<?php

$host = 'localhost';
$username = 'root';
$passwd = 'ass34';
$dbname = 'flower_shop';
$port = '3307';

$connection = new mysqli($host, $username, $passwd, $dbname, $port);

if ($connection->connect_error) {
    echo 'Error !, Not Connected'
    . $connection->connect_error;
} else {
    echo "conected Successfully";
}
?>