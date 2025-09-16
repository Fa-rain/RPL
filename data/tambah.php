<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="tambahData.php" method="post">
    
        <label for="nama">Nama : </label><br>
        <input type="text" id="nama" name="nama"><br>

        <label for="n_mtk">Nilai MTK : </label><br>
        <input type="number" id="n_mtk" name = "n_mtk"><br>
        <br>

        <input type="submit" value="Tambah">
    </form>
</body>
</html>