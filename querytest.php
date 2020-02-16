<?php
  require_once "system/db.php";
  $sql = "SELECT topic, jt_id FROM java_topics ORDER BY display_order";
  $result = $connection->query($sql);
  if ($result>num_rows > 0)
  {
    while($row = $result->fetch_assoc())
    {
      echo "id: " . $row["jt_id"]. " - Topic: " . $row["topic"] . "<br>";
    }
  }
  else
  {
      echo "No query results";
  }
    $connection->close();
  }
?>
