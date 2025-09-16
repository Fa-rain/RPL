<?php
$conn = mysqli_connect("localhost", "root", "", "xiirpl1");
// require "../public/functions.php";
$nama = $_POST['nama'];
$n_mtk = $_POST['n_mtk'];

$sql = "INSERT INTO siswa01 VALUES ('','$nama','$n_mtk')";

$query = mysqli_query($conn, $sql);

require "../app/index.php";

if($query){
    header("location:../app/index.php?sukses");
}else {
    header("location:../app/index.php?gagal");
}
?>