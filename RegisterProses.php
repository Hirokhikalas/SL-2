<?php
    session_start();

    if(isset($_POST['register'])){
        $namadepan = $_POST['namadepan'];
        $namatengah= $_POST['namatengah'];
        $namabelakang= $_POST['namatengah'];
        $tempatlahir = $_POST['tempatlahir'];
        $tanggallahir= $_POST['tanggallahir'];
        $NIK= $_POST['NIK'];
        $warganegara = $_POST['warganegara'];
        $email= $_POST['email'];
        $NoHP= $_POST['NoHP']; 
        $alamat = $_POST['alamat'];
        $kodepost= $_POST['kodepos'];
        $profil= $_POST['berkas'];
        $username = $_POST['username'];
        $password1= $_POST['password1'];

        if($_POST['password1'] == $_POST['password2']){
            $_SESSION['usernameSession'] = $username;
            $_SESSION['passwordSession'] = $password1;
            $_SESSION['namadepanSession'] = $namadepan;
            $_SESSION['namatengahSession'] = $namatengah;
            $_SESSION['namabelakangSession'] = $namabelakang;
            $_SESSION['tempatlahirSession'] = $tempatlahir;
            $_SESSION['tanggallahirSession'] = $tanggallahir;
            $_SESSION['NIKSession'] = $NIK;
            $_SESSION['warganegaraSession'] = $warganegara;
            $_SESSION['emailSession'] = $email;
            $_SESSION['NoHPSession'] = $NoHP;
            $_SESSION['alamatSession'] = $alamat;
            $_SESSION['kodeposSession'] = $kodepost;
            $_SESSION['profilSession'] = $profil;
            header("location:Welcome.php");


            $string_query = "INSERT into DataDiri values('".$_POST['namadepan']."','".$_POST['namatengah']."','".$_POST['namabelakang']."','".$_POST['tempatlahir']."','".$_POST['tanggallahir']."','".$_POST['NIK']."','".$_POST['warganegara']."','".$_POST['email']."','".$_POST['NoHp']."','".$_POST['alamat']."','".$_POST['kodepost']."','".$profil."','".$_POST['username']."','".$_POST['password1']."')";

            $queryberhasil = mysqli_query($connection,$string_query);

                if($queryberhasil){
                    echo "<script>";
                    echo "alert('Data berhasil di input');";
                    echo 'window.location.href = "index.php";';
                    echo "</script>";
                }else{
                    echo "<script>";
                    echo "alert('Data Gagal Diinput');";
                    echo 'window.location.href = "register.php";';
                    echo "</script>";
                }
        }       
        else{
            echo "Password 1 dan 2 tidak sama";
            header("location:Register.php");
        }
        
    }

?>