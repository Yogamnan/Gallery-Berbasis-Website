<?php
include "koneksi.php";


$username=$_POST['username'];
$pasword=$_POST['pasword'];
$email=$_POST['email'];
$namalengkap=$_POST['namalengkap'];
$alamat=$_POST['alamat'];

$sql=mysqli_query($conn,"insert into user values ('','$username','$pasword','$email','$namalengkap','$alamat')");
header("location:login.php");
?>