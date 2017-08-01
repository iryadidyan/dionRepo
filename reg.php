<?php

require('API/routeros_api.class.php');
$API = new RouterosAPI();
$API->connect('192.168.2.1', 'dion', 'bintang');
$API->write("/ip/hotspot/user/add",false);
$API->write(".Server="."hotspot1",false);
$API->write(".Nama="."aaaaaaaaaa",false);
$API->write(".Profile="."daftar",true);

$API->disconnect();

?>
