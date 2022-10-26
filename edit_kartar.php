<?php
include "config.php";
// cek apakah tombol simpan sudah diklik atau belum?
if(isset($_POST['simpan'])){
// ambil data dari formulir
$KTP = $_POST['no_ktp'];
$nama = $_POST['nama_anak'];
$alamat = $_POST['alamat'];
$telepon = $_POST['no_tlp'];
$jenkar = $_POST['jenis_kartar'];
$gambar=$_FILES['gambar']['tmp_name']; //membuat variabel foto sementara
$nama_file=$_FILES ['gambar']['name']; //membuat variabel $gambar dan datanya dari upload gambar
$ukuran=$_FILES['gambar']['size']; //ukuran file
$extensi= strtolower(substr(strrchr($nama_file,"."),1)); //membaca extensi setelah titik
$gambar_lama=$_POST['gambar_lama']; //variabel menampung nilai gambar lama
if (empty($gambar)){ //jika gambar tidak di update
$query=mysqli_query($connect,"UPDATE anggota_kartar SET nama_anak='$nama',alamat='$alamat',no_tlp='$telepon',jenis_kartar='$jenkar' WHERE no_ktp='$KTP'");
}elseif($ukuran > 2000000){
echo "<p style='color:#F00;'>Maaf, Ukuran File Maksimal 2MB <br><br>
<a href='javascript: history.go(-1)'>Kembali ke Form Edit</a></p>"; 
}
elseif($extensi !="jpg" && $extensi !="png"){
echo "<p style='color:#F00;'>Maaf, Format File yang diizinkan hanya .jpg/.png
<br><br>
<a href='javascript: history.go(-1)'>Kembali ke Form Edit</a></p>";
}
else{
	unlink('photo/'.$gambar_lama); //hapus foto lama
	move_uploaded_file($gambar,"photo/$nama_file"); //upload foto baru
	$query=mysqli_query($connect,"UPDATE anggota_kartar SET nama_anak='$nama',alamat='$alamat',no_tlp='$telepon',photo='$nama_file',jenis_kartar='$jenkar' WHERE no_ktp='$KTP'");
}
// apakah query update berhasil?
if( $query ) {
// kalau berhasil alihkan ke halaman index.php
header('Location: index.php');
} else {
// kalau gagal tampilkan pesan
die("Maaf Data Gagal di Update <a href='javascript: history.go(-1)'>Kembali</a>");
}
}
mysqli_close($connect);
?>