<?php 
$koneksi = mysqli_connect("localhost","root","","basis_data");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>