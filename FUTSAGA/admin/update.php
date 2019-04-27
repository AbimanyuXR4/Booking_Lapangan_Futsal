<?php
include '../connect.php';
$id_pemesan = $_POST['id_pemesan'];
$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$jam = $_POST['jam'];
$query ="update user set    nama_lengkap = '$nama_lengkap',
                            email = '$email',
                            alamat = '$alamat',
                            nohp = '$nohp',
                            jam = '$jam'
        where id_pemesan = '$id_pemesan'";
 mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);
if($num > 0)
{
    echo "Berhasil Ubah Data <br>";
}
else
{
    echo "Gagal Ubah Data <br>";
}
    header('location: read.php');
?>