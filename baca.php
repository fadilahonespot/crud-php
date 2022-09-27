<?php
session_start();
if ($_SESSION['username'] == "") {
   header("location:index.php?pesan=gagal_login");
}
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="style/style.css">
   <title>Dasboard</title>
</head>

<body>
   <section>
      <h2>Dasboard</h2>
      <div class="row">
         <div class="column side">
            <h2 class="title">Profile</h2>
            <?php
            if (isset($_GET['pesan'])) {
               if ($_GET['pesan'] == "sukses_hapus") {
                  echo "<h4 class='green width-dasboard center-img'>Berhasil Menghapus User</h4>";
               }
               if ($_GET['pesan'] == "sukses_edit") {
                  echo "<h4 class='green width-dasboard center-img'>Berhasil Mengubah Data</h4>";
               }
            }
            ?>
            <?php
            $id = $_SESSION['id'];
            $tampil = mysqli_query($koneksi, "SELECT * FROM users WHERE id = '$id'");
            $show = mysqli_fetch_assoc($tampil);

            echo "Nama: " . $show['nama'] . "<br>";
            echo "Username: " . $show['username'] . "<br>";
            echo "Alamat: " . $show['alamat'] . "<br>";
            echo "Tanggal Lahir: " . $show['tanggal_lahir'] . "<br>";
            echo "Jenis Kelamin: " . $show['jenis_kelamin'] . "<br>";
            echo "Pendidikan Terakhir: " . $show['pendidikan_terakhir'] . "<br>";
            echo "Kursus       : " . $show['kursus'] . "<br>";
            echo "<br><br>";
            ?>
            <a href="logout.php" onclick="return confirm('Anda yakin untuk logout ?')">Logout</a>
            <br><br>
         </div>
         <div class="column middle">
            <h2 class="title">Daftar Peserta</h2>
            <table id="customers">
               <tr>
                  <th>NO</th>
                  <th>NAMA</th>
                  <th>ALAMAT</th>
                  <th>TANGGAL LAHIR</th>
                  <th>JENIS KELAMIN</th>
                  <th>PENDIDIKAN TERAKHIR</th>
                  <th>KURSUS</th>
                  <th>USERNAME</th>
                  <th>AKSI</th>
               </tr>

               <?php
               $tampil = mysqli_query($koneksi, "SELECT * from users");
               $no = 1;
               foreach ($tampil as $row) {
                  echo "<tr>
                        <td>" . $no . "</td>
                        <td>" . $row['nama'] . "</td> 
                        <td>" . $row['alamat'] . "</td>
                        <td>" . $row['tanggal_lahir'] . "</td>
                        <td>" . $row['jenis_kelamin'] . "</td>
                        <td>" . $row['pendidikan_terakhir'] . "</td>
                        <td>" . $row['kursus'] . "</td>
                        <td>" . $row['username'] . "</td>";
                  echo '<td><a href="form_edit.php?id=' . $row['id'] . '">Edit</a> | <a href="hapus.php?id=' . $row['id'] . '" onclick="return confirm(\'Anda yakin mau menghapus item ini ?\')">Hapus</a></td>';
                  echo "</tr>";
                  $no++;
               }
               ?>
            </table><br>
         </div>
      </div>
   </section>
</body>

</html>