<?php
include "config.php";
//cek dahulu, apakah benar URL sudah ada GET nim -> hapus_mhs.php?nim=nim
if( isset($_GET['no_ktp']) ){
// mengambil nim dari query sebagai klausa penghapusan data
$KTP = $_GET['no_ktp'];
//hapus data dari tabel mahasiswa
//hapus gambar dari folder images
$kartar=mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM anggota_kartar where no_ktp='$KTP'"));
unlink("photo/$kartar[photo]");
$query = mysqli_query($connect, "DELETE FROM anggota_kartar WHERE no_ktp='$KTP'");
// Jika query delete berhasil
if( $query ){
header('Location: index.php');
} else {
die("Maaf Data Gagal di hapus <a href=index.php>Kembali</a>");
}
}
mysqli_close($connect);
?>