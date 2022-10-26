<?php
include 'config.php';
// jika form di submit, masukkan data ke basis data.
if (isset($_POST['submit'])){
// menghapus backslashes
$username = stripslashes($_POST['username']);
$email = stripslashes($_POST['email']);
$password = stripslashes($_POST['password']);
//memberi perlindungan dari karakter unik atau khusus dalam string
$username = mysqli_real_escape_string($connect,$username); 
$email = mysqli_real_escape_string($connect,$email);
$password = mysqli_real_escape_string($connect,$password);
$query = mysqli_query($connect,"INSERT into data_kartar (username, email, password)
VALUES ('$username', '$email', '".md5($password)."')");
if($query){
echo "<h3>Alhamdulilah...Register Berhasil</h3>
<br/>Silahkan klik di sini untuk <a href='login.php'>Login</a>";
}
}else{
header('Location: registrasi.php');
}
?>