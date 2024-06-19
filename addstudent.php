<?php
include "conn.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
  <link rel="stylesheet" href="bootstrap.min.css">

    <?php

    require "headerfile.php";
    ?>
</head>

<body>

    <?php
    include "navbar.php";
    ?>

    <div class="container">

        <form action="" method="post">
            <div class="mb-3 mt-3">
                <label for="rollno" class="form-label">RollNo:</label>
                <input type="number" class="form-control" id="rollno" placeholder="Enter Roll NO" name="rollno">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Student Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Student Name" name="name">
            </div>


            <div class="mb-3">
                <label for="btime" class="form-label">Batch Time:</label>

                <?php

$sql = "SELECT batchtime from batch";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    echo "<select class='form-control' id='btime' name='btime'>";
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["batchtime"] . "'>" . $row["batchtime"] . "</option>";
    }
    echo "</select>";
}


?>

               </div>

               <div class="mb-3">
                    <label for="tname" class="form-label">Teacher Name:</label>


                    <select class="form-control" id="name" name="tname">
                        <option value="DEEPAK">DEEPAK</option>
                        <option value="SATISH">SATISH</option>
                        <option value="MEENU">MEENU</option>
                        <option value="NAVEEN">NAVEEN</option>


                    </select>
                </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <div class="container">
        <table class="table">


            <tr>
                <th>#</th>
                <th>Roll No</th>
                <th>Name</th>
                <th>Batch Time</th>
                <th>Teacher</th>
                <th>--</th>
            </tr>

            <?php

            $sql1 = "SELECT * from student";

            $result1 = mysqli_query($conn,$sql1);


            if(mysqli_num_rows($result1)>0){
                while($row=mysqli_fetch_assoc($result1)){
                    echo "<tr>" .

                        "<td>" . $row["id"] . "</td>" .
                        "<td>" . $row["rollno"] . "</td>" .
                        "<td>" . $row["sname"] . "</td>" .
                        "<td>" . $row["batchtime"] . "</td>" .
                        "<td>" . $row["teacher"] . "</td>" .


                        "<td>
              
                <a href='update.php?updateid=".$row["id"]."'>
            <button type='button' class='btn btn-primary'><i class='bi bi-pencil-square'></i></button>
            </a>
         
            <a href='delete.php?deleteid=".$row["id"]."'>
            <button type='button' class='btn btn-danger'><i class='bi bi-trash-fill'></i></button>
            </a>
              
              </td>";
                }
            }


            ?>
        </table>
    </div>
</body>

</html>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $rollno = $_POST['rollno'];
    $sname = $_POST['name'];
    $btime = $_POST['btime'];
    $tname = $_POST['tname'];
    $sql2="SELECT * FROM batch WHERE batchtime='$btime'";
    $result2=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result2)>0){
    while($row=mysqli_fetch_assoc($result2)){
        $bend=$row['batchend'];
        // echo "$bend";
    }}

    if ($btime != "" && $rollno != "" && $sname != "") {


        $sql3 = "INSERT INTO student (rollno, sname, batchtime,batchend, teacher) VALUES ('$rollno','$sname','$btime','$bend','$tname')";

        $result3 = mysqli_query($conn,$sql3);
    }
}

$conn->close();

?>