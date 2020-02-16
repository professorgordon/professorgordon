<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'web');
define('DB_PASSWORD', 'jj8xsg$ziBOQ3WT!9R0mNm');
define('DB_NAME', 'professorgordon');

/* Attempt to connect to MySQL database */
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
