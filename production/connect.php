<?php
$server = "34.87.171.41";
$user = "admin";
$password = "1234";
$dbname = "main";
$connect = mysqli_connect($server, $user, $password, $dbname);

if (!$connect)
{
    die("ERROR\: Cannot connect to the database $dbname on server $server using username $user ("
        .mysqli_connect_errno(). ", ".mysqli_connect_error(). ")");
}

mysqli_query($connect, "SET NAMES utf8");
