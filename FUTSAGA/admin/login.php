<?php
session_start();
include '../connect.php';
$username = $_POST['username'];
$password = $_POST['password'];
if($username == "" || $password == "")
{
    header("location: form_login.php");
}
else
{
    $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connect, $query);
    $num = mysqli_num_rows($result);
    if($num == 1)
    {
        header("location: ../admin/read.php");
        $_SESSION['User'] = $username;
    }
    else
    {
        header("location: form_login.php");
    }
}
?>