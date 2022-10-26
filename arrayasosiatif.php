<?php
include 'config.php';
//tampilkan tabel anggota_kartar
$result=mysqli_query($connect,'SELECT * FROM anggota_kartar order by no_ktp asc');
while ($row=mysqli_fetch_array($result))
{
echo "Nomer KTP : " . $row['no_ktp']. "<br>";
echo "Nama : " . $row['nama_anak']. "<br>";
echo "Alamat : " . $row['alamat']. "<br>";
echo "No Telepon : " . $row['no_tlp']. "<br>";
echo "Jenis Kartar : " . $row['jenis_kartar']. "<br><br>";
}
?>