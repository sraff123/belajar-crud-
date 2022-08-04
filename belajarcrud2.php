<?php 
// belajar koneksi database

$servername = "localhost";
$database   = "root";
$username   = "";
$password   = "db_perpusweb"; 

// membuat koneksi

$connect = mysqli_connect($servername,$database,$username,$password);

// cek koneksi
if(!$connect){
    echo die("wwkwkwk tak konek : ". mysqli_connect_error());
}else {
    echo "siko bagi duo onecq"; mysqli_close($connect);    
}






?>