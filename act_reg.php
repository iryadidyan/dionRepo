<?php
require('API/routeros_api.class.php');

$server       = "hotspot1";
$nis          = $_POST['nis'];
$nama         = $_POST['nama'];
$jurusan      = $_POST['jurusan'];
$jk           = $_POST['jk'];
$ttl          = $_POST['ttl'];
$username     = $_POST['username'];
$password     = $_POST['password'];
$profile      = "daftar";
$comment      = $_POST['nis']."-".$_POST['jurusan'];

$connect = mysqli_connect("localhost","root","","hotmiks");
$input   = mysqli_query("INSERT INTO user (nis,nama,jurusan,username,password,jk,ttl) VALUES ($nis,$nama,$jurusan,$username,$password,$jk,$ttl)");
$queri   = mysqli_query("SELECT * FROM admin WHERE login = 'dion'");
$result  = mysqli_fetch_assoc($queri);
$API     = new RouterosAPI($result['ip'],$result['login'],$result['password']);

$API->comm("/ip/hotspot/user/add", array(
  "server"   => $server,
  "name"     => $username,
  "password" => $pass,
  "profile"  => $profile,
  "comment"  => $comment,
));
$API->disconnect();

?>
