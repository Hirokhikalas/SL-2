<?php

    include("config.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h2>Aplikasi Pengelola Keuangan &emsp; <a href='Home.php'>Login</a> <a href='Profile.php'>Profile</a> <a href='Logout.php'>Logout</a></h2>
    <h1> Profile Pribadi </h1>
    <table>
            <tr>
                <td>Nama Depan</td>
                <td><?php echo  $_SESSION['namadepanSession'] ?></td>
                <td>Name Tengah</td>
                <td><?php echo  $_SESSION['namatengahSession'] ?></td>
                <td>Name Belakang</td>
                <td><?php echo  $_SESSION['namabelakangSession'] ?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><?php echo  $_SESSION['tempatlahirSession'] ?></td>
                <td>Tanggal Lahir</td>
                <td><?php echo  $_SESSION['tanggallahirSession'] ?></td>
                <td>NIK</td>
                <td><?php echo  $_SESSION['NIKSession'] ?></td>
            </tr>
            <tr>
                <td>Warga Negara</td>
                <td><?php echo  $_SESSION['warganegaraSession'] ?></td>
                <td>Email</td>
                <td><?php echo  $_SESSION['emailSession'] ?></td>
                <td>No HP</td>
                <td><?php echo  $_SESSION['NoHPSession'] ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?php echo  $_SESSION['alamatSession'] ?></td>
                <td>Kode Pos</td>
                <td><?php echo  $_SESSION['kodeposSession'] ?></td>
                <td>Foto Profil</td>
                <td><?php echo  $_SESSION['profil'] ?></td>
            </tr>

            <div>
            <button class="btn-kembali-register"><a href=<?php echo '"Edit.php?NIK='.base64_encode($_SESSION['NIKSession']).'">'?>Edit Profil</a></button>
            </div>
</body>
</html>