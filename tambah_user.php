<?php
require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"];
    $pw = md5($_POST["password"]);

    $sql = "SELECT COUNT(*) AS total FROM user WHERE username = '$user'";
    $result = $koneksi->query($sql); 
    $data = $result->fetch_assoc(); 

    $check = $data['total']; 

    if ($check == 0) {
        $sql = "INSERT INTO user (username, password) VALUES (?, ?)";
    
        $row = $koneksi->execute_query($sql, [$user, $pw]);

        header("location:user.php");
    } else {
        echo "<script>alert('User sudah ada');window.location.href='user.php'</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah user</title>
</head>
<body>
    <div class="isi">
        <h1>Tambah User</h1>
        <form class="login" action="" method="post">
            <div class="form-item">
                <label for="nama">Username</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="form-item">
                <label for="stock">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="form-item">
            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>