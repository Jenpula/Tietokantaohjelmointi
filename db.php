<?php

//require 'config.php';

$init = parse_ini_file('myconf.ini');
$host = $init['host'];
$dbname = $init['db'];
$uname = $init['username'];
$pw = $init['pw'];


$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
try {
	$pdo = new PDO($dsn, $user, $password);
    echo "Connected!";
} catch (PDOException $e) {
	echo $e->getMessage();
}