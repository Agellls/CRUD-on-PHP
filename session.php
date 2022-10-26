<?php
// memulai session
session_start();
// inisialisasi variabel session
$_SESSION['user_id'] = '1';
$_SESSION['username'] = 'admin';
// akses variable session
echo "Session Id : $_SESSION[user_id]";
echo "<br>";
echo "Session Name : $_SESSION[username]";
?>