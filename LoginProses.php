<?php
    session_start();

    if(isset($_POST['Login'])){
        if(($_POST['username'] ==  isset($_SESSION['usernameSession'])) && ($_POST['password']== isset($_SESSION['passwordSession']))) {
            header("location:Home.php");
        }
        else{
            echo "Username atau Password salah silahkan coba lagi";
            header("location:Login.php");
        }
    }
?>