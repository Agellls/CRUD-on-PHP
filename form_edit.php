<?php
include "config.php";
// apabila nim tidak ditemukan
if( !isset($_GET['no_ktp']) ){
header('Location: index.php');
}
//ambil nim dari query 
$KTP = $_GET['no_ktp'];
// membuat query untuk mengambil data dari database mahasiswa
$result = mysqli_query($connect, "SELECT * FROM anggota_kartar WHERE no_ktp=$KTP");
$row = mysqli_fetch_array($result);
// Apabila data yang akan di-edit tidak ditemukan
if( mysqli_num_rows($result) < 1 ){
die("Maaf Data Tidak Ada");
}
?>
<!DOCTYPE html>
<html>
<head><title>Formulir Edit Data Anggota Kartar</title></head>
<body>
<header><h3>Formulir Edit Data Anggota Kartar</h3></header>
<form action="edit_kartar.php" method="POST"enctype="multipart/form-data">
<table><tr>
<td>No KTP </td><td><input type="text" name="no_ktp" value="<?php echo $row['no_ktp'];?>"></td></tr>
<tr><td>Nama </td><td><input type="text" name="nama_anak" size="15" value="<?php echo $row['nama_anak'];?>"></td></tr>
<tr><td>Alamat </td><td><input type="text" name="alamat" size="15" value="<?php echo $row['alamat'];?>"></td></tr>
<tr><td>No Telepon </td><td><input type="text" name="no_tlp" size="15" value="<?php echo $row['no_tlp'];?>"></td></tr>
<tr><td>Umur </td><td><select name="jenis_kartar">
<option value=""> - </option>
<option value="A" <?php if($row['jenis_kartar']=='A'){ echo 'selected';}?> >18 - 23 Tahun</option>
<option value="B" <?php if($row['jenis_kartar']=='B'){ echo 'selected';}?> >12 - 17 Tahun</option>
<option value="C" <?php if($row['jenis_kartar']=='C'){ echo 'selected';}?> >6 - 11 Tahun</option></select></td></tr>
<tr><td>Upload Foto</td><td><input type="file" name="gambar" accept=".jpg, .png"/></td>
<input type="hidden" name="gambar_lama" value="<?php echo $row['foto'];?>"/></td></tr>
<tr><td></td><td><input type="submit" value="Edit Data" name="simpan"> <input type="reset" value="Batal" 
name="batal" onClick="window.location='index.php';"></td>
</tr></table>
</form>
</body>
</html>