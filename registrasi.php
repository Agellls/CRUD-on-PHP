<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
</head>
<body>
<div>
<h1>Form Registrasi</h1>
<form action="input_registrasi.php" method="post">
<label>Username</label><br>
<input type="text" name="username" required><br><br>
<label>Email</label><br/>
<input type="email" name="email" required><br><br>
<label>Password</label><br/>
<input type="password" name="password" required><br><br>
<input type="submit" name="submit" value="Register"> <input type="reset" name="reset" value="Batal" onClick="window.location='index.php';">
</form>
</div>
</body>
</html>