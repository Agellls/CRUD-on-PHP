<!DOCTYPE html>
<html>
<head><title>Formulir Input Data Anggota Kartar</title></head>
<body>
<header><h3>Formulir Input Data Anggota Kartar</h3></header>
<form action="input_kartar.php" method="POST" enctype="multipart/form-data">
<table>
<tr><td>No KTP </td><td><input type="text" name="no_ktp" required="nomer KTP harus di Isi" size="15"></td></tr>
<tr><td>Nama </td><td><input type="text" name="nama_anak" size="15" required="Nama harus di Isi"></td></tr>
<tr><td>Alamat </td><td><input type="text" name="alamat" size="15">
<tr><td>No_Telepon </td><td><input type="text" name="no_tlp" size="15">
<tr><td>Umur </td><td><select name="jenis_kartar">
<option value=""> - </option>
<option value="A">18 - 23 Tahun</option>
<option value="B">12 - 17 Tahun</option>
<option value="C">6 - 11 Tahun</option></select></td></tr>
<tr><td>Upload Photo</td><td>
<input type="file" name="gambar" accept=".jpg, .png"></td></tr>
<tr><td></td><td><input type="submit" value="Simpan" name="simpan"> <input type="reset" value="Batal" name="batal" onClick="window.location='index.php';"></td></tr>
</table></form>
</body>
</html>