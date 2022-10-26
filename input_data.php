<?php
include "config.php";
// cek terlebih dahulu apabila tombol simpan di klik
if (isset($_POST['simpan'])) {
    // jika tombol simpan benar di klik, ambil data dari formulir mahasiswa simpan dalam variabel sesuai inputan
    $nama = $_POST['nama_siswa'];
    $induk = $_POST['induk_siswa'];
    $kelas = $_POST['kelas_siswa'];
    $buku = $_POST['nama_buku'];
    $pinjam = $_POST['hari_pinjam'];
    // melakukan query untuk insert data ke database
    $query = mysqli_query($connect, "INSERT INTO data_buku (nama_siswa,induk_siswa,kelas_siswa,nama_buku,hari_pinjam) VALUE ('$nama','$induk','$kelas','$buku','$pinjam')");
    // mengecek apakah penyimpanan berhasil
    if ($query) {
        // apabila berhasil maka di arahkan ke halaman index.php
        header('Location: ../kirim.php');
    } else {
        // apabila gagal tetap di halaman form input mhs
        echo "data gagal di masukkan! silahkan ulangi";
    }
}
mysqli_close($connect);
