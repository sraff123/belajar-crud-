<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post dan get</title>
</head>
<body>
    <center><h1>Belajar Get Dan Post</h1></center>
    <form action="" method="get">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="alamat">alamat</label>
        <input type="text" name="alamat" id="alamat">
        <input type="submit" name="submit" value="submit">
    </form> <br>
    <?php 
    if($_GET){
        echo "nama : ". $_GET["nama"];
        echo "</br>";
        echo "alamat : ". $_GET["alamat"];
    }

    ?>
</body>
</html>