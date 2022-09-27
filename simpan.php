<?php
include 'koneksi.php';

$nama = $_POST["ambilNama"];
$alamat = $_POST["ambilAlamat"];
$tanggal = $_POST["ambilTanggal"];
$gender = $_POST["ambilGender"];
$pendidikan = $_POST["ambilPendidikan"];
$workshop = $_POST["ambilWorkshop"];
$username = $_POST["ambilUsername"];
$password = md5($_POST["ambilPassword"]);

$query="INSERT INTO users SET nama='$nama', alamat='$alamat', tanggal_lahir='$tanggal', jenis_kelamin='$gender', kursus='$workshop', username='$username', pass='$password', pendidikan_terakhir='$pendidikan'";
$result = mysqli_query($koneksi, $query);
if($result == true) {
    header("location:index.php?pesan=pendaftaran_sukses");
} else {
    header("location:form_pendaftaran.php?pesan=pendaftaran_gagal");
};
?>