<?php

    require "koneksi.php";
    $sql = "SELECT * FROM user";
    $rows = $koneksi->execute_query($sql, [])->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style="border: 1px solid black;"> 
        <a href="tambah_user.php">Tambah</a>
        <thead>
            <tr>
                <th>No.</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach ($rows as $item) {
            // while ($item = mysqli_fetch_assoc($rows)) {
            ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $item["username"]; ?></td>
                <td><?= $item["password"]; ?></td>
            </tr>

            <?php
            $no += 1;
            }
            ?>
        </tbody>
    </table>
</body>
</html>

