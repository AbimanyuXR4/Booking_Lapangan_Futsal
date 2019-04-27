<?php
    include '../connect.php';
    $id_pemesan = $_GET['id_pemesan'];
    $query = "SELECT * FROM user WHERE id_pemesan = $id_pemesan";
    $result = mysqli_query($connect,$query);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="form_update.css">
</head>
<body>
<h1 align="center">Update Data</h1>
<div class="body">
    <form action="update.php" method="POST">
    <table>
    <tr>
        <td><label for="nama">Nama Pemesan</label></td>
        <td>:</td>
        <td><input type="text" name="nama_lengkap" id="nama" value="<?php echo $row['nama_lengkap']; ?>"></td>
    </tr>
    <tr>
        <td><label for="email">E-Mail</label></td>
        <td>:</td>
        <td><input type="text" name="email" id="email" value="<?php echo $row['email']; ?>"></td>    
    </tr>
    <tr>
        <td><label for="alamat">Alamat</label></td>
        <td>:</td>
        <td><input type="text" name="alamat" id="alamat" value="<?php echo $row['alamat']; ?>"></td>    
    </tr>
    <tr>
        <td><label for="nohp">No HP</label></td>
        <td>:</td>
        <td><input type="text" name="nohp" id="nohp" value="<?php echo $row['nohp']; ?>"></td>    
    </tr>
    <tr>
        <td><label for="jam">Jam</label></td>
        <td>:</td>
        <td><input type="time" name="jam" id="jam" value="<?php echo $row['jam']; ?>"></td>    
    </tr>
    <tr>
        <td></td>
        <td><input type="hidden" name="id_pemesan" value="<?php echo $row['id_pemesan']; ?>"></td>
        <td><input type="submit" value="Simpan" name="btnSimpan"></td>    
    </tr>
    </table>
    </form>
</div>
</body>
</html>
