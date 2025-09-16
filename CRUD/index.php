<?php

require "functions.php";

// $query = "SELECT * FROM siswa01";
// $result = mysqli_query($conn, $query);
// $rows =[];

// while($row = mysqli_fetch_assoc($result)){
//     $rows[] = $row;
// }

$siswa = query("SELECT * FROM siswa01");

$no = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Data</title>
</head>
<body>
    <h1>Tampilan Data</h1>
    <a href="tambah.php">Tambah Data</a>
    <table border ="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nilai MTK</th>
            <th>Status</th>
        </tr>
        <?php foreach($siswa as $s): ?>
    
        <tr>
            <td><?=$no++?></td>
            <td><?=$s['nama']?></td>
            <td><?=$s['n_mtk']?></td>
            <td>
                <a href="rubah.php?id=<?= $s['id']?>">Edit</a>
                <a href="hapus.php?id=<?= $s['id']?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>