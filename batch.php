<?php
require "conn.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batch</title>
    <?php

    require "headerfile.php";
    ?>
</head>

<body>

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
            $time = $_GET['time'];

            $sql = "SELECT * from student WHERE batchtime='$time'";

            $result = mysqli_query($conn,$sql);


            if ($result->num_rows > 0) {
                // output data of each row

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>" .

                        "<td>" . $row["id"] . "</td>" .
                        "<td>" . $row["rollno"] . "</td>" .
                        "<td>" . $row["sname"] . "</td>" .
                        "<td>" . $row["batchtime"] . "</td>" .
                        "<td>" . $row["teacher"] . "</td>" .


                        "<td>
              
                <a href='cupdate.php?updateid=".$row["id"]."'>
            <button type='button' class='btn btn-primary'><i class='bi bi-pencil-square'></i></button>
            </a>
         
            <a href='cdelete.php?deleteid=".$row["id"]."'>
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