<?php
    include("Config.php");

    $str_query = "UPDATE DataDiri SET  namadepan='".$_POST['namadepan']."', namatengah='".$_POST['namatengah']."',
                namabelakang='".$_POST['namabelakang']."', tempatlahir='".$_POST['tempatlahir']."', tanggallahir='".$_POST['tanggallahir']."',
                NIK='".$_POST['NIK']."', warganegara='".$_POST['warganegara']."', email='".$_POST['email']."', nohp='".$_POST['NoHp']."',
                alamat='".$_POST['alamat']."', kodepos='".$_POST['kodepos']."',photo='".$locfoto."' , username='".$_POST['username']."', password='".$_POST['password1']."'
                WHERE NIK='".$_POST['NIK']."'";
            
                $query = mysqli_query($connection,$str_query);

                if($query){
                    echo "<script>";
                    echo "alert('Berhasil Diupdate database');";
                    echo 'window.location="Profile.php";';
                    echo "</script>";
                }else{
                    echo "<script>";
                    echo "alert('Gagal Diupdate database');";
                    echo 'window.location.href="Edit.php";';
                    echo "</script>";
                }
?>