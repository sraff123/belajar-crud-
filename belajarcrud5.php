<html>

<head>
    <title>Menampilkan Database web</title>
</head>

<body>
<h2> CRUD data perpustakaan</h2>
<br/>
<a href="tambah.php">Tambah Data<a/>
<br/>
<br/>

  <table border="1">
    <tr>
         <th>NO </th>
         <th>Nama</th>
         <th>no telp</th>
        <th>alamat</th>
         <th>email</th>

    </tr>


    <?php
    
    include 'koneksi.php';

    $no =1 ;
    $data = mysqli_query($connect, "select * from anggota ") ;
    while($d = mysqli_fetch_array ($data)) {

    ?>

<tr>
         <td><?php echo $no++ ?></td>
         <td><?php echo $d['nama']; ?></td>
         <td><?php echo $d['no_telp']; ?></td>
         <td><?php echo $d['alamat']; ?></td>
         <td><?php echo  $d['email']; ?></td>
          
    </tr>

    <?php
    }
    ?>
     </table>
</body>

</html>