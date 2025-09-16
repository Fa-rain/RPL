<?php

$conn = mysqli_connect("localhost", "root", "", "xiirpl1");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($query){
    global $conn;

    $id = $data[];

    while($result())



}


function ubahData($query){
    global $conn;

    $
}
?>