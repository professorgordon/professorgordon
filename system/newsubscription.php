<?php

  $servername = '127.0.0.1:3308';
  $username = 'root';
  $password = '';
  $database = 'professorgordon';
  $connection = new mysqli($servername, $username, $password, $database);
  if ($connection->connect_error)
  {
    echo "Connection Error: Unable to connect to MySQL." . PHP_EOL;
    die("Connection Error: " . $connection->connect_error);
  }
  $FirstName = $connection->real_escape_string($_GET['FirstName']);
  $LastName = $connection->real_escape_string($_GET['LastName']);
  $EmailAddress = $connection->real_escape_string($_GET['EMail']);
  date_default_timezone_set("America/Denver");
  $Subscribed = date('Y-m-d H:i:s');
  $query = "INSERT INTO subscriptions (first_name, last_name, email_address, subscribed, status) VALUES ('" . $FirstName . "','" . $LastName . "','" . $EmailAddress . "','" . $Subscribed . "', 'Subscribed')";
  $result = $connection -> query($query);
  if(!$result) die($connection->error);
  echo "Thank you for subscribing.";
  //header("Location: ../index.php");
  $connection -> close();

?>
