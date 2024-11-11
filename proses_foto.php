<?php
include "koneksi.php";
session_start();

$judulfoto=$_POST['judulfoto'];
$deskripsifoto=$_POST['deskripsi'];
$tanggalunggah=date("Y-m-d");
$lokasifile=$_POST['lokasifile'];
$albumid=$_SESSION['albumid'];
$id=$_SESSION['id'];

$sql=mysqli_query($conn,"insert into foto values('','$judulfoto','$deskripsifoto','$tanggalunggah','$lokasifile','$albumid','$id')");

header("location:foto.php");
?>