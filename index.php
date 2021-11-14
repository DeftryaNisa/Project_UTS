<?php 
include('cek-login.php');
?>
<html>
<head>
<title>Belajar PHP</title>
</head>

<body>
<h1>Form Input Data</h1>

<?php 
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
	echo '<h3>Berhasil menambah data!</h3>';
}

echo "Selamat Datang <strong>".$_SESSION['username']."</strong>";
?>



<a href="view.php">Lihat Data</a> ||  <a href="logout.php">Logout</a> ||  <a href="tambah.php">Tambah data</a>

</body>
</html>