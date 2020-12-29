<?php
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
    <title>InfoWritter</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="grabber.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>

  </body>
</html>
