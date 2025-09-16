<?php
$arrBuku = array("Pemrograman OOP", "Elex Media Komputindo");
$arrBuku01 = array("Pemrograman Web", "Andy Offset");
$arrMulti01 = [
    ["Pemrograman OOP", "Elex Media Komputindo"],
    ["Pemrograman Web", "Andy Offset"]
]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array ke tabel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</head>
<body class = "m-3">
<div class = "container">
    <h3>Menampilkan Data Array dengan Foreach (htmlspesialchars)</h3><br>
    <a href="tambah.php" class ="btn btn-primary">Tambah Data</a><br>
    <table class ="table">
        <tr>
            <td>No</td>
            <td>Judul Buku</td>
            <td>Penerbit</td>
            <td colspan="2">Status</td>
        </tr>

        <?php
        foreach($arrMulti01 as $index => $buku):
        ?>

        <tr>
            <td><?= $index + 1?></td>
            <td><?= htmlspecialchars($buku[0])?></td>
            <td><?= htmlspecialchars( $buku[1])?></td>
            <td>
                <a href="edit.php">EDIT</a>
            </td>
            <td>
                <a href="hapus.php">HAPUS</a>
            </td>
        </tr>
        <?php endforeach ;?>
    </table><br>


    <h3>Menampilkan Data Array dengan Foreach</h3><br>
    <a href="tambah.php" class ="btn btn-primary">Tambah Data</a><br>
    <table class = "table">
        <tr>
            <td>No</td>
            <td>Judul Buku</td>
            <td>Penerbit</td>
            <td colspan="2">Status</td>
        </tr>
        <?php
        $num = 1;
            foreach ($arrMulti01 as $array1): 
        ?>
        <tr>
            <td><?= $num++?></td>
            <?php foreach($array1 as $data): ?>
            <td>
                <?php echo $data;
             endforeach; ?>
            </td>
            
            <td><a href="edit.php">EDIT</a></td>
            <td><a href="hapus.php">HAPUS</a></td>
       
        </tr>
         <?php endforeach; ?>
    </table>


    <h3>Menampilkan Data Array dengan For</h3><br>
    <a href="tambah.php" class ="btn btn-primary">Tambah Data</a><br>
    <table class = "table">
        <tr>
            <td>No</td>
            <td>Judul Buku</td>
            <td>Penerbit</td>
            <td colspan="2">Status</td>
        </tr>
        
        <?php for ($b = 0; $b < count($arrMulti01); $b++): ?>
        <tr>
            <td><?=$b+1 ?></td>
            <?php for($d=0; $d<2; $d++): ?>
            <td>
                <?php echo $arrMulti01[$b][$d];
             endfor; ?>
            </td>
            
            <td><a href="edit.php">EDIT</a></td>
            <td><a href="hapus.php">HAPUS</a></td>
       
        </tr>
         <?php endfor; ?>
    </table>
</div>


</body>
</html>