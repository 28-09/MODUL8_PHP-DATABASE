<?php
$conn = mysqli_connect('localhost','root','', 'modul_8');

$koneksi = mysqli_connect("localhost","root","","akademik");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>