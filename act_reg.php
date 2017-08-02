<?php

require('API/routeros_api.class.php');

$server  = "hotspot1";
$nama    = "AAK_JONI";
$pass    = "STOP";
$profile = "siswa";
$comment = "{newuser}";

$API = new RouterosAPI();
$API->connect('192.168.2.1', 'dion', 'bintang');
$API->comm("/ip/hotspot/user/add", array(
  "server"   => $server,
  "name"     => $nama,
  "password" => $pass,
  "profile"  => $profile,
  "comment"  => $comment,
));
$API->disconnect();

?>
