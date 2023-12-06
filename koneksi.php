<?php
$hostname ="localhost";
$user ="root";
$pw ="";
$database = "tokofiona";

$koneksi=mysqli_connect ($hostname, $user, $pw, $database);
if ($koneksi){
    echo "";
}
else{
    die("koneksi gagal").mysqli_connect_error();
}
?>