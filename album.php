<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Album</title>
    <link rel="stylesheet" href="album.css">
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
  <div class="container">
  <div class="intro">
      <p class="title">Hello, Galeri Rpl 26 Here!</p>
      <p class="title">Selamat datang <b><?=$_SESSION['namalengkap']?></b></p>
      <br>
    </div>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Tanggal dibuat</th>
            <th>Aksi</th>
        </tr>
        <?php
            include "koneksi.php";
            $id=$_SESSION['id'];
            $sql=mysqli_query($conn,"select * from album where id='$id'");
            while($data=mysqli_fetch_array($sql)){
        ?>
                <tr>
                    <td><?=$data['albumid']?></td>
                    <td><?=$data['namaalbum']?></td>
                    <td><?=$data['deskripsi']?></td>
                    <td><?=$data['tanggaldibuat']?></td>
                    <td>
                        <a href="hapus_album.php?albumid=<?=$data['albumid']?>">Hapus</a>
                        <a href="edit_album.php?albumid=<?=$data['albumid']?>">Edit</a>
                    </td>
                </tr>
        <?php
            }
        ?>
    </table>
    <form action="proses_album.php" method="post">
        <table>
            <tr>
                <td>Nama Album</td>
                <td><input type="text" name="namaalbum"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
  </div>
  
</body>
</html>
