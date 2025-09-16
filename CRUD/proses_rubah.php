<?php

require "functions.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$n_mtk = $_POST['n_mtk'];

$query = "UPDATE siswa01 SET nama = '$nama', n_mtk = '$n_mtk' WHERE id = '$id'";
$result = mysqli_query($conn, $query);

if($query){
    header("location:index.php");
}else{
    header("location:index.php");
}

die();

?>