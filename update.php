<?php

include 'koneksi.php';
$id_petugas = $_POST['id_petugas'];
$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];
$level = $_POST['level'];

mysqli_query("UPDATE pegawai SET nama_pegawai='$nama_pegawai',username='$username',password='password',telp='$telp',level='$level' where id='$id'");

header("location:tambahpetugas.php?pesan=update");
?>