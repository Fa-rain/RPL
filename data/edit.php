<?php
require "../public/functions.php";
$id_get = $_GET['id'];

// $siswa = query("SELECT * FROM siswa01 id = '$id_get'")

// if(isset($_POST["submit"])){
//     if(ubah($_POST))
// }
$query = "SELECT * FROM siswa01 WHERE id = '$id_get'";
$result = mysqli_query($conn, $query);
$rows = [];
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
    
    <form action="ubahData.php" method="post">
        
        <input type="hidden" name = "id" value="<?= $siswa["id"] ?>">

        <label for="">nama</label><br>
        <input type="text" name = "nama" value="<?= $siswa["nama"] ?>"><br>

        <label for="">nilai</label><br>
        <input type="text" name = "n_mtk" value="<?= $siswa["n_mtk"] ?>"><br>
        
        <input type="submit" value="UPDATE" >
        
    </form>
    
</body>
</html>