<?php
include('config.php');
header("Content-Type: application/force-download");
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Thu, 25 Agu 2022 12:00:00 GMT");
header("content-disposition: attachment;filename=Report_Data_PeminjamBuku.xls");
?>


<center>
    <h2>Rekap Data Perpustakaan</h2>
</center>
<table border='1'>
    <h3>
        <thead>
            <tr>
                <td width=27 align="center">No.</td>
                <td width=150 align="center">Nama Siswa</td>
                <td width=150 align="center">Induk Siswa</td>
                <td width=150 align="center">Kelas Siswa</td>
                <td width=150 align="center">Nama Buku</td>
                <td width=150 align="center">Tanggal Pinjam</td>
                <td width=150 align="center">Lama Pinjam</td>
            </tr>
        </thead>
        <h3>
            <tbody>


                <?php
                $result = mysqli_query($connect, "SELECT * FROM data_buku");
                $no = 1;
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td align="center"><?php echo $no; ?></td>
                        <td align="center"><?php echo $row['nama_siswa']; ?></td>
                        <td align="center"><?php echo $row['induk_siswa']; ?></td>
                        <td align="center"><?php echo $row['kelas_siswa']; ?></td>
                        <td align="center"><?php echo $row['nama_buku']; ?></td>
                        <td align="center"><?php echo $row['tanggal']; ?></td>
                        <td align="center"><?php echo $row['hari_pinjam']; ?></td>
                    </tr>
                <?php $no++;
                } ?>
            </tbody>
        </h3>
</table>