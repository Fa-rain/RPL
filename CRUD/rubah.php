<?php

require "functions.php";

$id = $_GET['id'];

$query = "SELECT * FROM siswa01 WHERE id = '$id'";
$result = mysqli_query($conn, $query);
$rows =[];

while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h1>Tambah Data</h1><br>
    
    <form action="proses_tambah.php" method="post">
    <?php foreach($rows as $row): ?>
        <input type="hidden" name="id" value = <?=$row['id']?>><br>

        <label for="nama">Nama : </label><br>
        <input type="text" name="nama" id="nama" value = <?=$row['nama']?>><br>

        <label for="nama">Nilai MTK : </label><br>
        <input type="number" name="n_mtk" id="n_mtk"value = <?=$row['n_mtk']?>><br>
    <?php endforeach; ?>
        <br>
        <input type="submit" value="Simpan">
    
    </form>
    


</body>
</html>