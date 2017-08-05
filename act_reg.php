<?php
require('API/routeros_api.class.php');

if ($_POST['pass1'] == $_POST['pass2']) {

    $server       = "hotspot1";
    $nis          = $_POST['nis'];
    $nama         = $_POST['fname']." ".$_POST['lname']." jur ".$_POST['jurusan'];
    $jurusan      = $_POST['jurusan'];
    $jk           = $_POST['sex-select'];
    $ttl          = $_POST['day']."-".$_POST['month']."-".$_POST['year'];
    $username     = $_POST['username'];
    $password     = $_POST['pass1'];
    $profile      = "daftar";
    $comment      = $_POST['nis']."-".$_POST['jurusan'];

    $connect = mysqli_connect("localhost","root","","hotmiks");
    $input   = mysqli_query($connect,"INSERT INTO user(nis,nama,jurusan,username,password,jk,ttl) VALUES ('$nis','$nama','$jurusan','$username','$password','$jk','$ttl')");
    $queri   = mysqli_query($connect,"SELECT * FROM admin WHERE login = 'dion'");
    $result  = mysqli_fetch_assoc($queri);


    $API = new RouterosAPI();
    $API->connect($result['ip'],$result['login'],$result['password']);
    $API->comm("/ip/hotspot/user/add", array(
      "server"   => $server,
      "name"     => $username,
      "password" => $password,
      "profile"  => $profile ,
      "comment"  => $comment
    ));
    $API->disconnect();

  header('location:http://192.168.2.1');


} else {
  header('location:index.php');
}

?>
