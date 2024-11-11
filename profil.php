
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="profil.css">
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
  <h1>Profil</h1>
    <div class="profil">
        <form action="logout.php">
            <input type="text" name="username" placeholder="Username" id="">
            <input type="text" name="pasword" placeholder="Password" id="">
            <input type="text" name="email" placeholder="Email" id="">
            <input type="text" name="namalengkap" placeholder="Nama" id="">
            <input type="text" name="alamat" placeholder="Alamat" id="">
            <button type="submit">Logout</button>
        </form>
    </div>
  </div>
</body>
</html>