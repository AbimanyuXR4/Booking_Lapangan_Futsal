<?php
include '../connect.php';
$query = "SELECT * FROM user";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pemesanan Lapangan Futsal || FutSaGa.COM</title>
    <link rel="stylesheet" href="read.css">
</head>
<body>
    <table border='4' class="table1">
    <h2 align="center">Data Pemesan</h2>
    <hr color="white" size="10px">
    <br>
    <tr>
        <th>No. </th>
        <th>Nama Pemesan</th>
        <th>Email Pemesan</th>
        <th>Alamat Pemesan</th>
        <th>No.HP</th>
        <th>Jam</th>
        <th>Edit</th>
        <th>Hapus</th>
    </tr>

    <?php
        if($num > 0)
        {
            $no = 1;
            while($data = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $data['nama_lengkap'] . "</td>";
                echo "<td>" . $data['email'] . "</td>";
                echo "<td>" . $data['alamat'] . "</td>";
                echo "<td>" . $data['nohp'] . "</td>";
                echo "<td>" . $data['jam'] . "</td>";
                echo "<td><a href='form_update.php?id_pemesan=" . $data['id_pemesan'] . "'>Edit</a>  ";
                echo "<td><a href='delete.php?id_pemesan=" . $data['id_pemesan'] . "'onclick='return confirm(\"Apakah Anda Yakin Ingin Menghapus Data ?\")' >Hapus</a></td>";
                $no++;
            }
        }
        else
        {
            echo "<td colspan='8'> Tidak Ada Data</td>";
        }
    ?>
    
    </table>
    <br>
</body>
</html>