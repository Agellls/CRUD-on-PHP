<!DOCTYPE html>
<html>
<head><title>Data Kartar</title></head>
<body>
<?php include "auth.php"; ?>
Welcome User <b><?php echo $_SESSION['username']?></b> || <a href="logout.php">Logout</a>
<header><h3>Data Anak Kartar</h3></header>
<nav><a href="form_kartar.php">[+] Tambah Data </a></nav>
<br>
<table border="1"> 
<thead><tr><th>No</th><th>No KTP</th><th>Nama</th><th>Alamat</th><th>No Telepon</th><th>Photo</th><th>Jenis Kartar</th><th>Opsi</th></tr>
</thead>
<tbody>
<?php include 'command.php'; ?>