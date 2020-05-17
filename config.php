<?php
session_start();
// connect to database
//$conn = mysqli_connect("srv-pleskdb20.ps.kz:3306", "simple", "3Xs94^NZ1SW&", "indxkz_simple");
$conn = mysqli_connect("localhost", "simple", "3Xs94^NZ1SW&", "simple");

if (!$conn) {
    die("Error connecting to database: " . mysqli_connect_error());
}
// define global constants
define ('ROOT_PATH', realpath(dirname(__FILE__)));
define('BASE_URL', 'http://simplephp/');
?>