<?php
include '../connect.php';

$id_pemesan = $_GET['id_pemesan'];

$query = "DELETE FROM user WHERE id_pemesan = $id_pemesan";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num > 0)
{
    echo "Berhasil Hapus Data <br>";
}

else
{
    echo "Gagal Hapus Data <br>";   
}
header('location: read.php');
?>