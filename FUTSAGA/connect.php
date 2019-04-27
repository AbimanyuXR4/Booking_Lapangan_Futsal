<?php

$host = "localhost";
$uname = "root";
$pass = "";
$db = "futsaga";

$connect = mysqli_connect($host, $uname, $pass, $db);

if(!$connect)
{
    echo "Koneksi ke database gagal : " .mysqli_connect_error();
}
?>