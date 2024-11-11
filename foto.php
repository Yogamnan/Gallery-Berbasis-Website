<?php
session_start();
if(!isset ($_SESSION['id'])){
  header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GaleriRpl</title>
  <link rel="stylesheet" href="foto.css">
</head>

<body>
  <header>
    <!-- NAVBAR -->
    <div class="logo">
        <a href="home.php"><img src="album.png" alt="logo" class="logo-img" /></a>
      
      <h1 class="logo-title">GALERI</h1>
    </div>
    <nav>
      <ul>
        <li><a href="album.php">ALBUM</a></li>
        <li></li>
        <li><a href="foto.php">FOTO</a></li>
        <li></li>
        <li><a href="mailto:amnannajid3@gmail.com">KONTAK</a></li>
        <li></li>
      </ul>
    </nav>
    <a class="profil" href="profil.php">
    <img src="profil.png" alt="profil">
    </a>
  </header>
  <!-- ISI -->
  <div class="container">
    <h1>Tambah Foto</h1>
    <form action="proses_foto.php" method="post">
    <table>

        <tr>
            <td>Judul Foto</td>
            <td><input type="text" name="judulfoto" id=""></td>
        </tr>
        <tr>
            <td>Deskripsi Foto</td>
            <td>
              <input type="text" name="deskripsifoto" id="">
            </td>
        </tr>
        <tr>
            <td>Pilih Foto</td>
            <td>
              <input type="file" name="lokasifile" id="">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Tambah">
            </td>
        </tr>
    </table>
    </form>
  </div>
 
</body>

</html>