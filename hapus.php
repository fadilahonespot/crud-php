<?php
session_start();
if($_SESSION['username']==""){
   header("location:index.php?pesan=gagal_login");
}

include 'koneksi.php';
$id = $_GET['id'];
$delete = mysqli_query($koneksi, "DELETE FROM users WHERE id = '$id'");
header("Location:baca.php?pesan=sukses_hapus");
?>