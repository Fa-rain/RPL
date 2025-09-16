<?php

$id = 1;
$b = 0.1;
$c = false;
$d = "Belajar PHP";
$e = "Fauzan";
$f = "18485";
$g=strtotime("January 28 2008");
$time = date("d-m-y", $g);
$h = "10.00";
$g = $time;
$array = array(1, 0.1, false, "Belajar PHP", "Fauzan", "18485", $g, "10.00");




$siswa = array(
    array(1,18470,92227979,"Adelia Safitri","Perempuan"),
    array(2, 18471, 89034367, "Ahdza May Nur Farizi", "Laki-Laki"),
    array(3, 18472, 74037524, "Aidha Rahmawati", "Perempuan"),
    array(4, 18473, 89404267, "Aisyah Altho Funisa", "Perempuan"),
    array(5, 18474, 72864904, "Al Zaki Ramadhan", "Laki-Laki"),
    array(6, 18475, 87066264, "Alexander Fortuna Nur Zulkarnain", "Perempuan"),
    array(7, 18476, 76964248, "Annazaidatul Nur Fu'aini", "Perempuan"),
    array(8, 18477, 71750471, "Asad Tevy Ramadhan", "Laki-Laki"),
    array(9, 18478, 81399429, "Azrril Diki Saputra", "Laki-Laki"),
    array(10, 18479, 83134903, "Dinda Sania Maghfira", "Perempuan"),
    array(11, 18480, 89643786, "Elza Rahmawati", "Perempuan"),
    array(12, 18481, 86619828, "Eva Nur Aisyah", "Perempuan"),
    array(13, 18482, 86277133, "Fadwa Pamulasih", "Perempuan"),
    array(14, 18483, 88204486, "Fahmi Dwi Santoso", "Laki-Laki"),
    array(15, 18484, 84663307, "Faqih Rizki Nugraha", "Laki-Laki"),
    array(16, 18485, 86590100, "Fauzan Ristian", "Laki-Laki"),
    array(17, 18486, 3088188425, "Fikri Valnabil Sugiarto", "Laki-Laki"),
    array(18, 18487, 81175186, "Jonahthan Ardyansah", "Laki-Laki"),

    
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table border="1">
        <tr class="header">
            <td>ID</td>
            <td>NIS</td>
            <td>NISN</td>
            <td>NAMA</td>
            <td>JENIS KELAMIN</td>
            <td>STATUS</td>

        </tr>
        <?php foreach($siswa as $s):

            
        ?>
        <tr class ="isi">
            <td><?= $s[0]?></td>
            <td><?=$s[1]?></td>
            <td><?=$s[2]?></td>
            <td><?=$s[3]?></td>
            <td><?=$s[4]?></td>
            <td colspan="3">
                <a href="edit.php">Edit</a>
                <a href="hapus.php">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>