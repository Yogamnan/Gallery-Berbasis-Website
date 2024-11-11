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
    <title>Halaman Edit Album</title>
    <link rel="stylesheet" href="edit.css">
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
    <h1>Halaman Edit Album</h1>
    <p>Selamat datang <b><?=$_SESSION['namalengkap']?></b></p>
    
    <form action="update_album.php" method="post">
        <?php
            include "koneksi.php";
            $albumid=$_GET['albumid'];
            $sql=mysqli_query($conn,"select * from album where albumid='$albumid'");
            while($data=mysqli_fetch_array($sql)){
        ?>
        <input type="text" name="albumid" value="<?=$data['albumid']?>" hidden>
        <table>
            <tr>
                <td>Nama Album</td>
                <td><input type="text" name="namaalbum" value="<?=$data['namaalbum']?>"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi" value="<?=$data['deskripsi']?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Ubah"></td>
            </tr>
        </table>
        <?php
            }
        ?>
    </form>

    
</body>
</html>
