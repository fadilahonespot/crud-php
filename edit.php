<?php
session_start();
if($_SESSION['username']==""){
   header("location:index.php?pesan=gagal_login");
}
include 'koneksi.php';

$id = $_POST["ambilID"];
$nama = $_POST["ambilNama"];
$alamat = $_POST["ambilAlamat"];
$tanggal = $_POST["ambilTanggal"];
$gender = $_POST["ambilGender"];
$pendidikan = $_POST["ambilPendidikan"];
$workshop = $_POST["ambilWorkshop"];

$query="UPDATE users SET nama='$nama', alamat='$alamat', tanggal_lahir='$tanggal', jenis_kelamin='$gender', kursus='$workshop', pendidikan_terakhir='$pendidikan' WHERE id = '$id'";
mysqli_query($koneksi, $query);

header("location:baca.php?pesan=sukses_edit");
?>