<?php
session_start();

if (!empty($_SESSION['username'])) {
	header('location:index.php');
}
?>
<html>
<head>
<title>LOGIN</title>
</head>

<body>
<h1>LOGIN</h1>

<?php 
//kode php ini kita gunakan untuk menampilkan pesan eror
if (!empty($_GET['error'])) {
	if ($_GET['error'] == 1) {
		echo '<h3>Username dan Password belum diisi!</h3>';
	} else if ($_GET['error'] == 2) {
		echo '<h3>Username belum diisi!</h3>';
	} else if ($_GET['error'] == 3) {
		echo '<h3>Password belum diisi!</h3>';
	} else if ($_GET['error'] == 4) {
		echo '<h3>Username dan Password tidak terdaftar!</h3>';
	}
}
?>

<form name="login" action="otentikasi.php" method="post">
<table border="0" cellpadding="5" cellspacing="0">
	<tr>
    	<td>Username</td>
    	<td>:</td>
    	<td><input type="text" name="username" /></td>
    </tr>
	<tr>
    	<td>Password</td>
    	<td>:</td>
    	<td><input type="password" name="password" /></td>
    </tr>
	<tr align="right">
    	<td colspan="3"><input type="submit" name="login" value="Login" /></td>
    </tr>
</table>
</form>
</body>
</html>