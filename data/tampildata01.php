<?php
$arrassoc = [
[   "nama" => "Perdana",
    "jurusan" => "Teknik Informatika"
],
[   "nama" => "Secondary",
    "jurusan" => "Teknik Arsitektur"
],
[   "nama" => "Ternary",
    "jurusan" => "Teknik Farmasi"
]
];

$server = "localhost";
$user ="root";
$password = "";
$database = "xiirpl1";

$conn = mysqli_connect("localhost", "root", "", "xiirpl1");

$query = "SELECT id, nis, nama, tanggal_lahir from siswa";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</head>
<body>
    <div class = "container mt-5">
    <h1>Daftar Mahasiswa</h1><br>
    <button class = "btn btn-primary mb-3"><a href="tambah.php"></a>Tambah Data</button>
    
    <table class = "table table-hover">
        <tr>
            <th colspan="2">Status</th>
            <th>Id</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) {?>
        <tr>
            <td><a href="edit.php">Edit</a></td>
            <td><a href="hapus.php">Hapus</a></td>
            <td><?= $row["id"]?></td>
            <td><?= $row["nis"]?></td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["tanggal_lahir"] ?></td>
        </tr>
        <?php } ?>
    </table>
    <br><hr>

    <div class = "form-group">
        <form action="tambah.php">
            <label for="">Nama</label>
            <input type="text">
        </form>
    </div>

    </div>
</body>
</html>
