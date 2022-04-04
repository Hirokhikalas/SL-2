<?php
    include("config.php");
    session_start();

    if(isset($_POST['kembali'])){
        header("location:Welcome.php");  
    }
?>