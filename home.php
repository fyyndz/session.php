<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
if($cek > 0){

    $data = mysqli_fetch_assoc($login);

    if($data['role']=="admin"){
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $admin;
    header("location:admin/halaman_admin.php");

}else if($data['role']=="pelanggan"){
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $pelanggan;
    header("location:pelanggan/halaman_pelanggan.php");
}else{
    header("location:index.php?pesan=gagal");
}
}
?>