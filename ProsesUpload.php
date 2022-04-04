<?php 

    if(isset($_POST['submit'])){

        $fileName = $_FILES['berkas']['name'];
        $tempName = $_FILES['berkas']['tmp_name'];

        $dirTujuan = "terupload/";

        $upload = move_uploaded_file($tempName, $dirTujuan.$fileName);
        
    }
?> 