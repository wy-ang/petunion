<?php

$servername = '127.0.0.1';
$username = 'root';
$password = 'root';
$dbname = 'pet';

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    exit("连接失败: " . $con->connect_error);
}