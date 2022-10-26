<?php
include "config.php";
//cek dahulu, apakah benar URL sudah ada GET nim -> hapus_mhs.php?nim=nim
if (isset($_GET['induk_siswa'])) {
    // mengambil nim dari query sebagai klausa penghapusan data
    $indent = $_GET['induk_siswa'];
    //hapus data dari tabel mahasiswa
    //hapus gambar dari folder images
    $buku = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM data_buku where induk_siswa='$indent'"));
    $query = mysqli_query($connect, "DELETE FROM data_buku WHERE induk_siswa='$indent'");
    // Jika query delete berhasil
    if ($query) {
        header('Location: ../admincontroll.php');
    } else {
        die("Maaf Data Gagal di hapus <a href=admincontroll.php>Kembali</a>");
    }
}
mysqli_close($connect);
