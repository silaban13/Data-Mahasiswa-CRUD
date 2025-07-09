<?php
//dan ini juga digunakan untuk terhubung dengan mysql
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'pemula';

$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn) {

 // echo "terkonek konek";
}

mysqli_select_db($conn, $db);
//mysqli_select_db($conn, $db);
?>