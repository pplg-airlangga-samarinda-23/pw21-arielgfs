<?php
require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $stok = $_POST["stok"];
    $status = $_POST["status"];

    $sql = "INSERT INTO barang (nama_barang, stok, Status) VALUES (?, ?, ?)";
    
    $row = $koneksi->execute_query($sql, [$nama, $stok, $status]);

    header("location:barang.php");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="isi">
        <form class="login" action="" method="post">
            <div class="form-item">
                <label for="nama">Nama barang</label>
                <input type="text" name="nama" id="nama" required>
            </div>
            <div class="form-item">
                <label for="stock">stock</label>
                <input type="number" name="stok" id="stok" required>
            </div>
            <div class="form-item">
                <label for="status">Status</label>
                <select name="status">
                    <option value="baik">baik</option>
                    <option value="rusak">rusak</option>
                </select>
            </div>
            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>