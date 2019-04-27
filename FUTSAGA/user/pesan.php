<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="pesan.css">
    <title>Booking Lapangan</title>
</head>
<body>
    <div class="body">
    <form action="mesan.php" method="POST" >
    <img src="logo.png" alt="" height="200px" width="400px" >
    <table>
    <tr>
        <td><label for="id_pemesan">Id Pemesan</label></td>
        <td> : </td>
        <td><input type="text" name="id_pemesan" id="id_pemesan" ></td>
    </tr>
    <tr>
        <td><label for="nama_lengkap">Nama Lengkap</label></td>
        <td> : </td>
        <td><input type="text" name="nama_lengkap" id="nama_lengkap" ></td>
    </tr>
    <tr>
        <td><label for="email">E-Mail</label></td>
        <td> : </td>
        <td><input type="text" name="email" id="email"></td>
    </tr>
    <tr>
        <td><label for="alamat">Alamat</label></td>
        <td> : </td>
        <td><input type="text" name="alamat" id="alamat" ></td>
    </tr>
    <tr>
        <td><label for="nohp">No.HP</label></td>
        <td> : </td>
        <td><input type="text" name="nohp" id="nohp" ></td>
    </tr>
    <tr>
        <td><label for="jam">Jam</label></td>
        <td> : </td>
        <td><input type="time" name="jam" id="jam" ></td>
    </tr>
    <tr>
    <td><input type="submit" value="Kirim" name="login"></td>
    </tr>
    </table>
    </form> 
    <form action="home.php" class="back">
    <tr>
    <td><input type="submit" value="Kembali" name="back" class="back"></td>
    </div>
    </div>
</body>
</html>