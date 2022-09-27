<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <script src="validasi_sandi.js"></script>
    <title>Mendaftar</title>
</head>

<body>
    <form action="simpan.php" method="POST" class="pendaftaran">
        <h1 class="title">FORM PENDAFTARAN</h1>
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "pendaftaran_gagal") {
                echo "<h4 class='red'>Pendaftaran Gagal! Username sudah terdaftar</h4>";
            }
        }
        ?>
        <p>Nama: <br> <input type="text" name="ambilNama" required></p>
        <p>Alamat: <br> <textarea name="ambilAlamat" id="" cols="20" rows="5"></textarea></p>
        <p>Tgl Lahir: <br><input type="date" name="ambilTanggal"></p>
        <p>Jenis Kelamin: <br><input type="radio" name="ambilGender" value="laki-laki" required> Laki-Laki <br><input type="radio" name="ambilGender" value="perempuan"> Perempuan</p>
        <p>Pendidikan Terakhir: <br>
            <select name="ambilPendidikan">
                <option value="SD">SD</option>
                <option value="SLTP">SLTP</option>
                <option value="SLTA">SLTA</option>
                <option value="Sarjana">Sarjana</option>
            </select>
        </p>
        <p>Jenis Workshop: <br>
            <select name="ambilWorkshop" id="">
                <option value="PHP + MySQL">PHP + MySQL</option>
                <option value="Virtualisasi + Cloud">Virtualisasi + Cloud</option>
                <option value="Networking">Networking</option>
                <option value="Hardware + Pheriperal">Hardware + Pheriperal</option>
            </select>
        </p>
        <p>Username: <br><input type="text" name="ambilUsername" minlength="5" required /></p>
        <p>Sandi: <br><input type="password" id="pw1" name="ambilPassword" minlength="5" required /></p>
        <p>Konfirmasi Sandi: <br><input type="password" id="pw2" minlength="5" required /></p>
        <p> <input type="checkbox" onclick="showPassword()"> Show Password</p>
        <p> <input type="submit" value="Simpan" name="submit"></p>
        <p><input type="reset" value="Reset"></p>
    </form>
</body>

</html>