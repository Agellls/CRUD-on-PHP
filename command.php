<?php
include 'config.php';
$result = mysqli_query($connect, "SELECT * FROM anggota_kartar");
$no = 1;
while($row = mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td align=center>".$no."</td>";
	echo "<td>".$row['no_ktp']."</td>";
	echo "<td>".$row['nama_anak']."</td>";
	echo "<td>".$row['alamat']."</td>";
	echo "<td>".$row['no_tlp']."</td>";
	echo "</td><td>";
	if($row['photo']!=null){
	echo "<img src='photo/".$row['photo']."' width=100 height=100>";
	} else{
	echo "";
	}
	echo "<td align=center>".$row['jenis_kartar']."</td>";
	$ambil=mysqli_query($connect,"select * from jabatan_kartar where no_ktp='$row[no_ktp]'"); 
	$data=mysqli_fetch_array($ambil);
	echo "<td>";
	echo "<a href='form_edit.php?no_ktp=".$row['no_ktp']."'>Edit</a> | ";
	echo "<a href='hapus_kartar.php?no_ktp=".$row['no_ktp']."' Onclick=\"return confirm('Anda Yakin Menghapus?')\">Hapus</a> | ";
	echo "<a href='donlot.php?photo=$row[photo]'>Download</a>";
	echo "</td>";
	echo "</tr>";
	$no++;
}

mysqli_close($connect);
?>

</tbody></table>
<p>Jumlah Anggota Kartar : <?php echo mysqli_num_rows($result) ?></p>
</body>
</html>