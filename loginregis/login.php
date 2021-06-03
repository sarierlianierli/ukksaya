<?php 
session_start();
if (isset($_SESSION["nik"])) {
 	header("location:../");
 	exit;
 } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
</head>
<style type="text/css">
	.row .form .btn {
	margin: 10px auto;
	width: 100%;
	text-align: center;
	height: 35px;
	border-radius: 13px;
	border: none;
	outline: none;
	background: linear-gradient(to right, aqua, pink);
	color: #fff;
	font-size: 18px;
	opacity: 0.5;
}

.row .form .btn:hover {
	background: linear-gradient(to left, aqua, pink);
	transition: 1s;
	cursor: pointer;
	opacity: 0.5;
}
</style>
<body>

	<div class="row" style="margin-bottom: 169px;">
		<form class="form" action="" method="POST">
			<h1>Login</h1>
			<label>Username</label>
			<input type="varchar" name="username" placeholder="Type your username" required="This colomn harus di isi">
			<label>Password</label>
			<input type="password" name="password" placeholder="Type your password" required="enter your pass">
			<button type="submit" name="login" class="btn">Login</button>
			<p>Belum punya akun? 
				<a href="registrasi.php" class="fp">Registrasi di sini</a>
			</p>
		</form>
	</div>

</body>
</html>
<?php

	if($cek>0){
			session_start();
			$_SESSION['username']=$username;
			$_SESSION['data']=$data;
			$_SESSION['level']='masyarakat';
			header('location:masyarakat/');
		}
		elseif($cek2>0){
			if($data2['level']=="admin"){
				session_start();
				$_SESSION['username']=$username;
				$_SESSION['data']=$data2;
				header('location:admin/');
			}
			elseif($data2['level']=="petugas"){
				session_start();
				$_SESSION['username']=$username;
				$_SESSION['data']=$data2;
				header('location:petugas/');
			}
		}
		else{
			echo "<script>alert('Login gagal')</script>";
		}

	
		// if ($row === 1) { 
		// 	// lanjut ke password
		// 	$fetch_pass = mysqli_fetch_assoc($cek_user);
		// 	$cek_pass = $fetch_pass['password'];
		// 	if ($cek_pass <> $pass) {
		// 		echo "<script>alert('password anda salah!');</script>";
		// 	}
		// 	else {
		// 		// atur session
		// 		$_SESSION["login_id"] = $row["nip"];

		// 		echo "<script>
		// 				alert('login anda berhasil!!');
		// 				document.location='../index.php'
		// 			  </script>";
		// 			  exit;
		// 	}
		// }
		// else {
		// 	echo "<script>alert('nip anda salah atau belum terdaftar!');</script>";
		// }
	

?>