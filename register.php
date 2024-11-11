<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>
    <!-- <form action="proses_register.php" method="post">
        <table>
            <h1>REGISTER</h1>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" id=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="namalengkap"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="alamat" id="">nama lengkap anda</textarea>
                </td>
            </tr>
            <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="register">
                        <input type="reset" value="reset">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="login.php">sudah punya akun</a></td>
                </tr>
        </table>
    </form> -->

    <div class="wrapper">
        <form action="proses_register.php" method="post">
            <h1>Register</h1>
            <div class="input-box">
            
                <input type="text" name="username" id="" placeholder="Masukkan Username" required>
                <i class='bx bx-user' ></i>
            </div>
            <div class="input-box">
            <input type="password" name="pasword"
            placeholder="Password" required>
                <i class='bx bx-lock' ></i>
            </div>
            <div class="input-box">
                <input type="text" name="email" placeholder="Masukkan Email" required>
                <i class='bx bx-user' ></i>
            </div>
            <div class="input-box">
                <input type="text" name="namalengkap" placeholder="Masukkan Nama " required>
                <i class='bx bx-user' ></i>
            </div>
            <div class="input-box">
                <input type="text" name="alamat" placeholder="Alamat lengkap " required>
                <i class='bx bx-user' ></i>
            </div>
            <button type="submit" class="btn">Register</button>
            <div class="register-link">
                <p>Sudah punya akun? <a href="login.php">Login</a></p>
            </div>
        </form>
    </div> 
</body>

</html>
