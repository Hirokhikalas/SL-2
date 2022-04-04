<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="RegisterProses.php" method="post">
        <table>
            <tr>
                <td>Nama Depan</td>
                <td><input type="text" name="namadepan" required/></td>
                <td>Name Tengah</td>
                <td><input type="text" name="namatengah" required/></td>
                <td>Name Belakang</td>
                <td><input type="text" name="namabelakang" required/></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tempatlahir" required/></td>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tanggallahir" required/></td>
                <td>NIK</td>
                <td><input type="text" name="NIK" required/></td>
            </tr>
            <tr>
                <td>Warga Negara</td>
                <td><input type="text" name="warganegara" required/></td>
                <td>Email</td>
                <td><input type="text" name="email" required/></td>
                <td>No HP</td>
                <td><input type="text" name="NoHP" required/></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" required/></td>
                <td>Kode Pos</td>
                <td><input type="text" name="kodepos">
                <form action="ProsesUpload.php" method="post" enctype="multipart/form-data">
                Foto Profil <input type="file" name="berkas">
                <input type="submit" name="submit" value="Upload" required>
                </form></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" required/></td>
                <td>Password 1</td>
                <td><input type="password" name="password1" required/></td>
                <td>Password 2</td>
                <td><input type="password" name="password2" required/></td>
            </tr>
            <tr>
                <form action="BackProses.php" method="post">
                <td><input type="Submit" name= "kembali" value="kembali"/></td>
                </form>
                <td><input type="Submit" name= "register" value ="register"/></td>
            </tr>
        </table>
    </form>
        
</body>
</html>