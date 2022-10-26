<?php
include 'config.php';
$result = mysqli_query($connect, 'SELECT * FROM anggota_kartar');
$jumlah= mysqli_num_rows($result);
echo "Total Anggota Kartar : " .$jumlah;
mysqli_close($connect);
?>