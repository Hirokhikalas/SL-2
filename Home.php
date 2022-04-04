<?php
    include("config.php");

    session_start();

    if(isset($_SESSION['NIK'])){
        $nikIdentifier = $_SESSION['NIK'];
        $str_query = "SELECT * FROM DataDiri WHERE NIK = '".$nikIdentifier."'";
        $queryberhasil = mysqli_query($connection,$str_query);
        $dataProfile = mysqli_fetch_array($queryberhasil);

        $_SESSION['namadepanSession'] = $dataLogin['namadepan'];
        $_SESSION['namatengahSession'] = $dataLogin['namatengah'];
        $_SESSION['namabelakangSession'] =$dataLogin['namabelakang'];
        $_SESSION['tempatlahirSession'] = $dataLogin['tempatlahir'];
        $_SESSION['tgllahirSession'] =$dataLogin['tanggallahir'];
        $_SESSION['nikSession'] = $dataLogin['NIK'];
        $_SESSION['warganegaraSession'] = $dataLogin['warganegara'];
        $_SESSION['emailSession'] = $dataLogin['email'];
        $_SESSION['nohpSession'] = $dataLogin['NoHp'];
        $_SESSION['alamatSession'] = $dataLogin['alamat'];
        $_SESSION['kodeposSession'] = $dataLogin['kodepost'];
        $_SESSION['usernameSession'] = $dataLogin['username'];
        $_SESSION['password1Session'] = $dataLogin['password'];
        $_SESSION['profilSession'] = $profil;

        $_SESSION['updated'] = false;
}
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
    <h1>Halo <?php echo $_SESSION['namadepanSession']." ".$_SESSION['namatengahSession']." ".$_SESSION['namabelakangSession']?> Selamat Datang di Aplikasi Pengelola Keuangan</h1>
</body>
</html>