<?php
include 'config.php';
$result = mysqli_query($connect, "SELECT * FROM data_buku");
$no = 1;
while ($row = mysqli_fetch_array($result)) {
    $tgl1 = $row['tanggal'];
    $tgl2 = date('Y-m-d', strtotime($row['hari_pinjam'], strtotime($tgl1)));
    echo "<tr>";
    echo "<th>" . $no . "</th>";
    echo "<td>" . $row['nama_siswa'] . "</td>";
    echo "<td>" . $row['induk_siswa'] . "</td>";
    echo "<td>" . $row['kelas_siswa'] . "</td>";
    echo "<td>" . $row['nama_buku'] . "</td>";
    echo "<td>" . $row['tanggal'] . "</td>";
    echo "<td>" . $tgl2 . "</td>";
    echo "<td>";
    echo "<a href='CRUD/hapusorder.php?induk_siswa=" . $row['induk_siswa'] . "' Onclick=\"return confirm('Apakah Peminjaman Ini Selesai ?')\">"; ?>
    <button type="button" class="btn btn-info" style="--bs-btn-padding-y: .10rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Selesai</button>
<?php "</a>";
    echo "</td>";
    echo "</tr>";
    $no++;
}

mysqli_close($connect);
?>

</tbody>
</table>
<h3>Total Peminjam Adalah : <?php echo mysqli_num_rows($result) ?></h3>