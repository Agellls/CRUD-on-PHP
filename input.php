<?php
include 'config.php';
$data=mysqli_query($connect,"INSERT INTO jabatan_kartar(nama_jabatan,masa_jabatan,no_ktp)VALUES('anggota','1 tahun','89233')"); 
if($data>0){ 
	echo "Data berhasil dimasukkan"; 
} else { 
	echo "Data gagal dimasukkan"; 
} 
mysqli_close($connect);
?>