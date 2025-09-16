<?php
$conn = mysqli_connect("localhost", "root", "", "xiirpl1");
$id = $_POST['id'];
$query = "DELETE FROM siswa01 where id = '$id'";

mysqli_query($conn, $query);
?>