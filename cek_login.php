<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$login = mysqli_query($koneksi,"select * from login_akun where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
if($cek > 0){
    $data = mysqli_fetch_assoc($login);
    if($data['role']=="admin"){
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "admin";
        header("location:user/home.php");
    
}else if($data['role']=="user"){
    $_SESSION['username'] = $username;
    $_SESSION['role'] = "user";
    header("location:user/home.php");
}
else{
    header("location:index.php?pesan=gagal");
}}
else{
    header("location:index.php?pesan=gagal");
}
?>