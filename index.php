

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WebGrabber</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="grabber.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div id="center">
      <form method="POST">
        <input type="password" name="pass"><br>
        <button>Acessar</button>
      </form>
    </div>
  </body>
</html>
<?php
if (isset($_POST["pass"])){
  $pw = htmlspecialchars($_POST["pass"]);
  if ($pw == "senha"){
    echo "<script>alert('Login successful')</script>";
    session_start();
    $_SESSION['idusuario'] = $pw;
    header("Location: infos.php");
  }else{
    echo "<script>alert('Password incorrect.')</script>";
  }
}
?>
