<?php

    require "koneksi.php";
    $sql = "SELECT * FROM barang";
    $rows = $koneksi->execute_query($sql, [])->fetch_all(MYSQLI_ASSOC);
    // $barang = [
    //     [
    //         "nama" => "laptop",
    //         "Stok" => "6",
    //         "Status" => "baik", 
    //     ],
        
    //     [
    //         "nama" => "PC",
    //         "Stok" => "38",
    //         "Status" => "baik", 
    //     ],
    
    //     [
    //         "nama" => "Printer",
    //         "Stok" => "1",
    //         "Status" => "rusak", 
    //     ],
    
    // ];

    // foreach($barang as $key => $value) {
    //     echo $value["nama"]." ".$value["Stok"]." ".$value["Status"]."<br>";
    // }
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
        <a href="tambah.php">Tambah</a>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Stok</th>
                <th>Status</th>
                <th>Aksi</th>
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
                <td><?= $item["nama_barang"]; ?></td>
                <td><?= $item["stok"]; ?></td>
                <td><?= $item["Status"]; ?></td>
                <td><a href="#">Edit</a></td>
                <td><a href="#">Hapus</a></td>
            </tr>

            <?php
            $no += 1;
            }
            ?>
        </tbody>
    </table>
</body>
</html>

