<?php
// Menentukan folder file yang boleh di download
$folder = "photo/"; //nama folder tempat file di simpan
$filename = $_GET['photo'];
$file_extension = strtolower(substr(strrchr($filename,"."),1)); //memeriksa ekstensi
// Lalu mengecek apakah file masih ada apa tidak dengan menggunakan fungsi file_exist
if (!file_exists($folder.$_GET['photo'])) {
echo "<p>Maaf, File Sudah Tidak Ada</p>";
exit;
}
else {
// Apabila mendownload file di folder memakai fungsi header di php untuk download file
header("Content-Disposition: attachment; filename=".basename($filename));
header("Content-Type: application/octet-stream;");
readfile("photo/".$filename);
}
?>