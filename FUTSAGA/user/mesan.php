<?php
    include '../connect.php';
    $id_pemesan = $_POST['id_pemesan'];
    $nama_lengkap=$_POST['nama_lengkap'];
    $email=$_POST['email'];
    $alamat=$_POST['alamat'];
    $nohp=$_POST['nohp'];
    $jam=$_POST['jam'];

    $query="INSERT INTO user
            VALUES ('$id_pemesan','$nama_lengkap','$email','$alamat','$nohp','$jam')";
    $result = mysqli_query($connect,$query);
    $num = mysqli_affected_rows($connect);
    
    if ($num > 0) {
        echo "<h3>Berhasil Memesan</h3>";
    }
    else {
        echo "<div class='gagal'>Pemesanan gagal...Silahkan Coba Lagi</div>";
    }

    header('location: hasil.php');
?>