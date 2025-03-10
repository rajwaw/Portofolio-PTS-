<?php
$host ='localhost';
$user ='root';
$pass ='';
$db_name ='portofolio_pts';


$conn = mysqli_connect($host,$user,$pass,$db_name);

if($conn->connect_errno){
    echo "Koneksi Gagal : " . $conn->connect_error;
    die("eror!");
}
?>
