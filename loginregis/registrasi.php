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
			<input type="varchar" name="nik" placeholder="Type your nik" required="This colomn harus di isi">
			<input type="varchar" name="nama" placeholder="Enter your nama" required="enter your password">
			
			<input type="varchar" name="username" placeholder="Type your username" required="enter your username">
			<input type="varchar" name="password" placeholder="Confirm password" required="enter your pass">
			<input type="varchar" name="telp" placeholder="Confirm password" required="enter your pass">
			
			<button type="submit" name="regis" class="btn">Registration</button>
			<p>Sudah punya akun? 
				<a href="../index.php" class="fp">Login !</a>
			</p>
		</form>
	</div>

</body>
</html>
<?php
	require_once 'koneksi.php';

	if (isset($_POST['regis'])) {
		if (registrasi($_POST) > 0) {
			echo "<script>
					alert('Data anda berhasil ditambahkan!');
					document.location='../index.php';
				  </script>";
		}
		else {
			echo mysqli_error($conn);
		}
		
	}

?>