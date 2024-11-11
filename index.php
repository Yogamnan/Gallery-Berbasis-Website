<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>penyimpanan foto/video berbasis website</title>
<link rel="stylesheet" href="style.css"></head>

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
    <button class="btn-cta" onclick="window.location.href='login.php';">Login</button>
  </header>
  <!-- ISI -->
  <div class="container">
    <div class="intro">
      <p class="title">Hello, Galeri Rpl 26 Here!</p>
      <p class="description">Technology storage foto and video</p>
      <br>
    </div>
    <div class="slider">
      <div class="isi-slider">
        <img src="slide.jpg" alt="slider1">
        <img src="slide2.jpg" alt="slider2">
        <img src="slide3.jpg" alt="slider3">
        <img src="slide3.jpg" alt="slider4">
      </div>
      <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="next" onclick="moveSlide(1)">&#10095;</button>
    </div>
    <script src="script.js"></script>
  </div>
</body>

</html>