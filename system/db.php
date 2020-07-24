<?php
/*
  define('DB_SERVER', 'localhost:3306');
  define('DB_USERNAME', 'John');
  define('DB_PASSWORD', 'P3nn5ylv4ni44v3nu3');
  define('DB_NAME', 'professorgordon');
  $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
  if($connection === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
*/

  $servername = 'localhost:3306';
  $username = 'root';
  $password = 'P3nn5ylv4ni44v3nu3!';
  $database = 'professorgordon';
  $connection = new mysqli($servername, $username, $password, $database);
  if ($connection->connect_error)
  {
    #echo "Connection Error: Unable to connect to MySQL." . PHP_EOL;
    die("Connection Error: " . $connection->connect_error);
  }

?>
