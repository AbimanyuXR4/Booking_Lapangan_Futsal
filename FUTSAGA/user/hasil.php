<?php
include '../connect.php';
$query = "SELECT * FROM user";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="hasil.css">
    <title>Pemesanan Lapangan Futsal || FutSaGa.COM</title>
</head>
<body>
    <h2>Data Pemesan</h2>
    <form action="pesan.php" method="post">
        <button input type="submit" value="Pesan Lagi ?" name="login">Pesan lagi?</button>
   </form>
    <table border='1'>
    <tr>
        <th>No. </th>
        <th>Nama Pemesan</th>
        <th>Email Pemesan</th>
        <th>Alamat Pemesan</th>
        <th>No.HP</th>
        <th>Jam</th>
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
                $no++;
            }
        }
        else
        {
            echo "<td colspan='7'> Tidak Ada Data</td>";
        }
    ?>
    
    </table>

    <br>
</body>
</html>