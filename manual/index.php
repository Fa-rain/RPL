<?php

require "../public/functions.php";

$sql = "SELECT * FROM siswa01";
$query = mysqli_query($conn, $sql);
$rows=[];

while($row = mysqli_fetch_assoc($query)){
    $rows[] = $row;
}
$no = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil</title>
</head>
<body>
    <h1>Tampil Data</h1>
    <a href="tambah.php">Tambah Data</a>
    <table border ="1">
        <tr>
            <th>Nomor</th>
            <th>Nama</th>
            <th>Nilai MTK</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($rows as $row): ?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$row["nama"]?></td>
            <td><?=$row["n_mtk"]?></td>
            <td>
                <a href="hapus.php?=<?=$row['id']?>">Hapus</a>
                <a href="edit.php">Edit</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>