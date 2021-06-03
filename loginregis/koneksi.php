<?php

$conn = mysqli_connect("localhost","root","","pengaduan_masyarakat");

function registrasi($data){
	global $conn;

	$nik = $data['nik'];
	$nama = $data['nama'];
	$username = @$data['username'];
	$password = $data['password'];
	$telp = $data['telp'];

	$result = mysqli_query($conn, "SELECT nik from masyarakat where nik = '$nik' ");
	if (mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('nik sudah tersedia!');
			  </script>";
		return false;
	}
	//konfirmasi password
	if ($pass !== $pass2) {
		echo "<script>
				alert('password tidak sama');
			  </script>";
		return false;
	}

	//masukkan data ke database
	mysqli_query($conn, "INSERT into masyarakat values('$nik','$nama','$username','$password','telp')");
	return mysqli_affected_rows($conn);
}
?>