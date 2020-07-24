<?php

  $servername = 'localhost:3306';
  $username = 'root';
  $password = '';
  $database = 'professorgordon';
  $connection = new mysqli($servername, $username, $password, $database);
  if ($connection->connect_error)
  {
    echo "Connection Error: Unable to connect to MySQL." . PHP_EOL;
    die("Connection Error: " . $connection->connect_error);
  }
  echo '<b>Connection</b>: Successful<br>';
  echo '<b>Host information</b>: ' . mysqli_get_host_info($connection) . "<br />";
  echo '<b>Database</b>: ' . $database . "<br />";
  echo '<b>Date</b>: ' . date('Y-m-d H:i:s') . "<br /><br />";

  $query = "SELECT topic_number, topic, jt_id FROM java_topics ORDER BY topic_number";
  if ($result = $connection->query($query))
  {
    echo '<table style="border: 1px solid black;" cellspacing="5" cellpadding="5">
          <tr>
              <td style="border-bottom: 1px solid black; text-align: center;"><b>Topic Number</b></td>
              <td style="border-bottom: 1px solid black;""><b>Topic</b></td>
              <td style="border-bottom: 1px solid black; text-align: center;"><b>Topic ID</b></td>
          </tr>';
      while ($row = $result->fetch_assoc())
      {
          $field1name = $row["topic_number"];
          $field2name = $row["topic"];
          $field3name = $row["jt_id"];

          echo '<tr>
                 <td style="text-align: center;">'.$field1name.'</td>
                 <td>'.$field2name.'</td>
                 <td style="text-align: center;">'.$field3name.'</td>
                </tr>';

      }
      echo "</table>";
  }
  $result->free();
  $connection->close();

?>
