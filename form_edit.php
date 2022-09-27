<?php
session_start();
if ($_SESSION['username'] == "") {
    header("location:index.php?pesan=gagal_login");
}
include 'koneksi.php';
$id = $_GET['id'];
$tampil = mysqli_query($koneksi, "SELECT * FROM users WHERE id = '$id'");
$data = mysqli_fetch_assoc($tampil);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>Edit</title>
</head>

<body>
    <form action="edit.php" method="POST" enctype="multipart/form-data" class="pendaftaran">
        <h1 class="title">EDIT USER</h1>
        <input type="hidden" name="ambilID" value="<?php echo $data['id'] ?>" />
        <p> Nama: <br> <input type="text" name="ambilNama" value="<?php echo $data['nama'] ?>"></p>
        <p> Alamat: <br><textarea name="ambilAlamat" id="" cols="20" rows="5"><?php echo htmlspecialchars($data['alamat']) ?></textarea></p>
        <p> Tgl Lahir: <br><input type="date" name="ambilTanggal" value="<?php echo $data['tanggal_lahir'] ?>" class="lahiran"></p>
        <p> Jenis Kelamin: <br><?php $jk = $data['jenis_kelamin']; ?><input type="radio" name="ambilGender" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked" : "" ?>> Laki-Laki <input type="radio" name="ambilGender" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked" : "" ?>> Perempuan</p>
        <p>Pendidikan Terakhir: <br><?php $pen = $data['pendidikan_terakhir']; ?>
            <select name="ambilPendidikan" id="">
                <option value="SD" <?php echo ($pen == 'SD') ? "selected" : "" ?>>SD</option>
                <option value="SLTP" <?php echo ($pen == 'SLTP') ? "selected" : "" ?>>SLTP</option>
                <option value="SLTA" <?php echo ($pen == 'SLTA') ? "selected" : "" ?>>SLTA</option>
                <option value="Sarjana" <?php echo ($pen == 'Sarjana') ? "selected" : "" ?>>Sarjana</option>
            </select>
        </p>
        <p>Jenis Workshop: <br><?php $jw = $data['kursus']; ?>
            <select name="ambilWorkshop" id="">
                <option value="PHP + MySQL" <?php echo ($jw == 'PHP + MySQL') ? "selected" : "" ?>>PHP + MySQL</option>
                <option value="Virtualisasi + Cloud" <?php echo ($jw == 'Virtualisasi + Cloud') ? "selected" : "" ?>>Virtualisasi + Cloud</option>
                <option value="Networking" <?php echo ($jw == 'Networking') ? "selected" : "" ?>>Networking</option>
                <option value="Hardware + Pheriperal" <?php echo ($jw == 'Hardware + Pheriperal') ? "selected" : "" ?>>Hardware + Pheriperal</option>
            </select>
        </p>
        <p> <input type="submit" value="Edit" name="submit"></p>
    </form>

</body>

</html>