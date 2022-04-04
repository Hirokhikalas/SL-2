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
    <title>Login</title>
</head>
<body>
    <?php
    include("config.php");
    ?>
<form action="loginProses.php" method="post">
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username"/></td>
        </tr>
        <tr>
        <td>Password</td>
            <td><input type="password" name="password"/></td>
        </tr>
        <tr>
            <td><input type="submit" name="Login" value="Login"/></td>
            <form action="BackProsesLogin.php" method="post">
                <td><input type="Submit" name= "kembali" value="kembali"/></td>
            </form>
        </tr>
    </table>
</form>
</body>
</html>