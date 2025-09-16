<?php
// $conn = mysqli_connect("localhost", "root", "", "xiirpl1");
// $query = "SELECT * FROM siswa";
// $result = mysqli_query($conn, $query);
// $rows = [];


// while($row = mysqli_fetch_assoc($result)){
//     $rows[] = $row;
// }

require "../public/functions.php";

$siswa = query("SELECT * FROM siswa01");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</head>
<body>
    <div class = "container mt-5">
    <h1>Daftar Nilai TKA Matematika</h1><br>
    <a href="../data/tambah.php" class = "btn btn-primary">Tambah Data Nilai</a>
    <table class = "table table-hover">
        <tr>
            <td>NIS</td>
            <td>Nama</td>
            <td>Nilai MTK</td>
            <td>Keterangan</td>
            <td>Aksi</td>
        </tr>
        <?php 
        $nomor = 1;
        foreach($siswa as $row):  
            if ($row["n_mtk"] < 80) {
                $keterangan = "Remidial";
            }else{
                $keterangan = "Lulus";
            }  
        ?>
        <tr>
            <td><?=$nomor;?></td>
            <td><?=$row["nama"];?></td>
            <td><?=$row["n_mtk"];?></td>
            <td><?=$keterangan;?></td>
            <td>
                <a href="../data/hapus.php?id=<?= $row['id']?>">Hapus</a>
                <a href="../data/edit.php?id=<?= $row['id']?>">Edit</a>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php endforeach ;  ?>
    </table>
    </div>
</body>
</html>