<?php
$server="localhost";
$user="root";
$database="aplikasi_cuti";
$password="";

$koneksi=mysqli_connect($server,$user,$password,$database);

if($koneksi){
    echo "koneksi sukses";
}else{
    echo "koneksi gagal";
}
 ?>