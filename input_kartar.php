<?php
include "config.php";
// cek terlebih dahulu apabila tombol simpan di klik
if(isset($_POST['simpan'])){
// jika tombol simpan benar di klik, ambil data dari formulir mahasiswa simpan dalam variabel sesuai inputan
$ktp = $_POST['no_ktp'];
$nama = $_POST['nama_anak'];
$alamat = $_POST['alamat'];
$telepon = $_POST['no_tlp'];
$jenkar = $_POST['jenis_kartar'];
$gambar=$_FILES['gambar']['tmp_name']; //variabel foto sementara
$nama_file=$_FILES ['gambar']['name']; //variabel $gambar dan datanya dari upload gambar
$ukuran=$_FILES['gambar']['size']; //variabel ukuran file
$extensi= strtolower(substr(strrchr($nama_file,"."),1)); //extensi file setelah titik
if($ukuran > 2000000){
echo "<p style='color:#F00;'>Maaf, Ukuran File Maksimal 2MB <br><br>
<a href='javascript: history.go(-1)'>Kembali ke Form Input</a></p>";
}
elseif($extensi !="jpg" && $extensi !="png" ){
echo "<p style='color:#F00;'>Maaf, Format File yang diizinkan hanya .jpg/.png <br><br><a href='javascript: history.go(-1)'>Kembali ke Form Input</a></p>";
}
else{
// melakukan query untuk insert data ke database
$query = mysqli_query($connect, "INSERT INTO anggota_kartar (no_ktp,nama_anak,alamat,no_tlp,jenis_kartar,photo) VALUE ('$ktp','$nama','$alamat','$telepon','$jenkar','$nama_file')");
move_uploaded_file($gambar, "photo/$nama_file"); //menyimpan gambar ke lokasi yang sudah di tentukan
// mengecek apakah penyimpanan berhasil
if( $query ) {
// apabila berhasil maka di arahkan ke halaman index.php
header('Location: index.php');
} else {
// apabila gagal tetap di halaman form input mhs
header('Location: form_kartar.php');
} 
}
}
mysqli_close($connect);
?>