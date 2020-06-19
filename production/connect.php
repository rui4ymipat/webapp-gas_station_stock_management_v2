<?php
$server = "127.0.0.1";
$user = "u781076994_root";
$password = "12345";
$dbname = "u781076994_main";
$connect = mysqli_connect($server, $user, $password, $dbname);

if (!$connect)
{
    die("ERROR\: Cannot connect to the database $dbname on server $server using username $user ("
        .mysqli_connect_errno(). ", ".mysqli_connect_error(). ")");
}

mysqli_query($connect, "SET NAMES utf8");
