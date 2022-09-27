<?php
include "koneksi.php";
session_start();

$username = $_POST['ambilUsername'];
$password = md5($_POST['ambilPass']);

$login = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND pass='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);
        $_SESSION['username'] = $data['username'];
        $_SESSION['id'] = $data['id'];
    header("location:baca.php");
} else {
    header("location:index.php?pesan=gagal");
}
