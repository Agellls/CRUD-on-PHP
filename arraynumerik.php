<?php
include 'config.php';
//tampilkan tabel anggota_kartar
$result=mysqli_query($connect,'SELECT * FROM anggota_kartar order by no_ktp asc');
while ($row=mysqli_fetch_array($result))
{
echo "Nomer KTP : " . $row[1]. "<br>";
echo "Nama : " . $row[2]. "<br>";
echo "Alamat : " . $row[3]. "<br>";
echo "No Telepon : " . $row[4]. "<br>";
echo "Jenis Kartar : " . $row[0]. "<br><br>";
}
?>