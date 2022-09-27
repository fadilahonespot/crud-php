<?php
session_start();
if (isset($_SESSION['level'])) {
    if ($_SESSION['level'] != "") {
        header("location:baca.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <script src="validasi_sandi.js"></script>
    <title>Login PHP</title>
</head>

<body>
    <form action="login.php" method="POST" class="login">
        <h1 class="title">FORM LOGIN</h1>
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal") {
                echo "<h4 class='red'>Username dan Password tidak sesuai !</h4>";
            } else if ($_GET['pesan'] == "pendaftaran_sukses") {
                echo "<h4 class='green'>Pendaftaran Berhasil !</h4>";
            } else if ($_GET['pesan'] == "gagal_login") {
                echo "<h4 class='red'>Anda Harus Login Dulu !</h4>";
            }
        }
        ?>
        <p> Username: <br><input type="text" name="ambilUsername" required /></p>
        <p> Password: <br> <input type="password" name="ambilPass" id="pw1" required /></p>
        <p> <input type="checkbox" onclick="showPassword()"> Show Password</p>
        <p> <input type="submit" name="submit" value="Login"></p>
        <p> Belum punya akun? <a href="form_pendaftaran.php">Mendaftar</a></p>
    </form>
</body>

</html>