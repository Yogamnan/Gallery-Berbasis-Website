<?php
include "koneksi.php";
session_start();

$username=$_POST['username'];
$pasword=$_POST['pasword'];

$sql=mysqli_query($conn,"select * from user where username='$username' and pasword='$pasword'");

$cek=mysqli_num_rows($sql);

if($cek==1){
    while($data=mysqli_fetch_array($sql)){
        $_SESSION['id']=$data['id'];    
        $_SESSION['namalengkap']=$data['namalengkap'];
    }
    header("location:home.php");
}else{
    header("location:login.php");
}

?>