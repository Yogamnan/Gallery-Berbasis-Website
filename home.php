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
  <title>penyimpanan foto/video berbasis website</title>
  <link rel="stylesheet" href="home.css">
</head>

<body>
  <header>
    <!-- NAVBAR -->
    <div class="logo">
      <img src="album.png" alt="logo" class="logo-img" />
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
    <div class="intro">
      <p class="title">Hello, Galeri Rpl 26 Here!</p>
      <p class="title">Selamat datang <b><?=$_SESSION['namalengkap']?></b></p>
      <p class="description">Technology storage foto and video</p>
      <br>
    </div>
  </div>
 
</body>

</html>