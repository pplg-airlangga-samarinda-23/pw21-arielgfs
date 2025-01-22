<?php
// post itu tidak menampilkan inputan
// get itu menampilkan inputan
    var_dump($_POST);
    echo "</br>";

    $username = $_POST["username"];
    $password = $_POST["password"];

    $username_benar = "admin";
    $password_benar = "admin";
// && AND benar jika dua yang benar
// || OR benar jika salah satu benar
    if ( $username === $username_benar && $password === $password_benar) {
        //echo "password benar<br>";
        header("Location:barang.php");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="isi">
        <h1>LOGIN</h1>
        <form class="login" action="" method="post">
            <div class="form-item">
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </div>
            <div class="form-item">
                <label for="password">password</label>
                <input type="password" name="password" id="password">
            </div>
            <button style="max-width: 80px; margin-left: 120px;" type="submit">login</button>
        </form>
    </div>
</body>
</html>