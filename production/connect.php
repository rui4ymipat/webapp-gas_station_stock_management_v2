<?php
$server = "127.0.0.1";
$user = "root";
$password = "1234";
$dbname = "main";
$connect = mysqli_connect($server, $user, $password, $dbname);

if (!$connect)
{
    die("ERROR\: Cannot connect to the database $dbname on server $server using username $user ("
        .mysqli_connect_errno(). ", ".mysqli_connect_error(). ")");
}

mysqli_query($connect, "SET NAMES utf8");
