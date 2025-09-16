<?php
require "../public/functions.php";

$nama = $_POST['nama'];
$n_mtk = $_POST['n_mtk'];

$sql = "INSERT INTO siswa01 VALUES ('','$nama','$n_mtk')";
$query = mysqli_query($conn, $sql);

if($query){
    header("location:index.php?sukses");
}else{
    header("location:index.php?gagal");
}
die();


?>