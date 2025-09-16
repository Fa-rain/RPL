<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panggil</title>
    
</head>
<body>
<?php
require "udf02.php";
?>
<?php
$hasil = multi(5,6)
?>

<p>Hasil perkalian dari <b style="color:red;">5</b> dan <b style="color:blue;">6</b> adalah : <span style = "color:green;"><?php echo $hasil;?> </span></p>

</body>
</html>