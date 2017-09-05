<?php
$host = 'localhost';
$user = 'root'; // User MySQL
$password = ''; // Pass MySQL
$database = 'social_network';

// Lenh ket noi co so du lieu trong PHP
global $dbc;
$dbc = mysqli_connect($host, $user, $password, $database);

if(!$dbc){   
    echo 'Can not connect!';
}
?>