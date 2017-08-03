<?php

require('API/routeros_api.class.php');

$server  = "hotspot1";
$nama    = "AAK_JONI";
$pass    = "STOP";
$profile = "siswa";
$comment = "{newuser}";


$API->connectsql("localhost","root","","hotmiks");
$API->query("SELECT * FROM admin WHERE login = 'dion'");

$API = new RouterosAPI();
$API->comm("/ip/hotspot/user/add", array(
  "server"   => $server,
  "name"     => $nama,
  "password" => $pass,
  "profile"  => $profile,
  "comment"  => $comment,
));
$API->disconnect();

?>
