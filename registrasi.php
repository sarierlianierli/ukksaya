<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
</head>
<style type="text/css">
	.row {
		margin-top: 50px;
		margin-bottom: 50px;
	}
</style>
<body>

	<div class="row">
		<form class="form" action="" method="POST">
			<h1>Registration</h1>
			<input type="varchar" name="nik" placeholder="Masukkan nik" required="This colomn harus di isi">
			<input type="varchar" name="nama" placeholder="Masukkan nama" required="enter your nama">
			
			<input type="varchar" name="username" placeholder="Masukkan username" required="enter your username">
			<input type="varchar" name="password" placeholder="Masukkan password" required="enter your password">
			<input type="varchar" name="telp" placeholder="Masukkan nomor telpon" required="enter your telp">
			
			<button type="submit" name="regis" class="btn">Registration</button>
			<p>Sudah punya akun? 
				<a href="index.php" class="fp">Login !</a>
			</p>
		</form>
	</div>

</body>
</html>
<?php
	require_once 'koneksii.php';

	if (isset($_POST['regis'])) {
		if (registrasi($_POST) > 0) {
			echo "<script>
					alert('Data anda berhasil ditambahkan!');
					document.location='index.php';
				  </script>";
		}
		else {
			echo mysqli_error($conn);
		}
		
	}

?>