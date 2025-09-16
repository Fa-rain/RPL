<?php

require "functions.php";

$nama = $_POST['nama'];
$n_mtk = $_POST['n_mtk'];

$query = "INSERT INTO siswa01 VALUES 
('', '$nama','$n_mtk')";

$result = mysqli_query($conn, $query);

if($result){
    header("location:index.php?sukses");
}else {
    header("location:index.php?gagal");
}



die();
?>