<?php
class Connect{
  public $server = "localhost";
  public $username = "root";
  public $password = "";


  function returnConn($database){
    $conn = mysqli_connect($this->server, $this->username, $this->password, $database) or die();
    return $conn;
  }

  function returnQuery($conn, $query){
    return mysqli_query($conn, $query);
  }

}

?>
