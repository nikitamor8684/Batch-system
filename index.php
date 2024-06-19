<?php
require "conn.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="bootstrap.min.css">
  <?php

  require "headerfile.php";
  ?>
</head>

<body>

  <?php

  require "navbar.php";

  ?>

  <div class="container mt-3">
    <h2>Create Batch</h2>


    <form method="post">
      <div class="input-group mb-3">
        <span class="input-group-text">Time</span>
        <input type="time" class="form-control" placeholder="Time" name="btime">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <div class="container mt-3 py-3">

    <?php

  


    $sql = "SELECT * from batch";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        $time = $row['batchtime'];
        $sql1 = "SELECT * from student WHERE batchtime='$time'";
        $result1 = $conn->query($sql1);
        echo"<a class='btn btn-primary mx-2 my-2' href='batch.php?time=" . $row["batchtime"] . "'>" . $row["batchtime"] ." To ".$row["batch"]. " <span class='badge bg-danger'>" . $result1->num_rows . "</span></a>";
      }
    }
  
  


    ?>

  </div>

</body>

</html>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $btime = $_POST['btime'];

  if ($btime != "") {


   $etime = '01:30:00';

    $hr = substr($btime, 0, 2) + substr($etime, 0, 2);
    $mn = substr($btime, 3, 2) + substr($etime, 3, 2);

    if ($mn == '60') {
      $hr = $hr + 1;
      $mn = '00';
    } else if ($mn == '00') {
      $mn = '00';
    } else {
      $mn = '30';
    }

    if ($hr < 10) {
      $hr = '0' . $hr;
    }

    $bend =  $hr . ':' . $mn . ':00';




    $sql = "INSERT INTO batch (batchtime,batch) VALUES ('$btime','$bend')";

    $result = $conn->query($sql);
  }


}

$conn->close();

?>