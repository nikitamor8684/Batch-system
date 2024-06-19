<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://ajax.cgoogleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css">

    <style>
        .box{
            height:100%;
            width:100%;
        }
        .add{
            display: inline-block;
            background-color: blue;
            color:white;
            padding:15px;
            border-style:none;
            border-radius: 10px;
            margin:40px;
        }
        th{
            font-weight:bold;
            font-size:25px;
        }
        .delete{
            display: inline-block;
            background-color: red;
            color:white;
            padding:15px;
            border-style:none;
            border-radius: 10px; 
        }
        .update{
            display: inline-block;
            background-color: blue;
            color:white;
            padding:15px;
            border-style:none;
            border-radius: 10px;  
        }

    </style>
</head>
<body>


   <?php

   include 'conn.php';


$counter = 0;
   if(isset($_POST['submit'])){
    foreach($_POST['attendence'] as $id=>$attendence){
        $name1=$_POST['sname'][$id];
        $btime1=$_POST['btime'][$id];
        // echo $fname1;
        $roll=$_POST['rollno'][$id];
        // $course1=$_POST['course'][$id];
        $date=date('m-d-Y');
        // $month=date('F');
        $sql2="SELECT * FROM attendance where rollno='$roll' AND date ='$date'";
        $result2=mysqli_query($conn,$sql2);
        if(mysqli_num_rows($result2)>0){  
            while($row=mysqli_fetch_assoc($result2)){
            echo "attendance submitted already";
            echo "<br>";
        }}
        else{


        $sql1="INSERT INTO attendance(rollno,attendance,name,date) values('$roll','$attendence','$name1','$date')";
        $result1=mysqli_query($conn,$sql1);
       }}
    }

?>


<form action="" method="post">
<div class="mb-3">


                <label for="stime" class="form-label">Start Time:</label>

                <?php
include "conn.php";
                $sql = "SELECT * from batch";

                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    echo "<select class='form-control' id='stime' name='stime'>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["batchtime"] . "'>" . $row["batchtime"]." TO ".$row["batch"] . "</option>";

                    }
                    echo "</select>";
                    echo "<input type='submit' id='show'>";
                }

                // $btime = $_POST['stime'];
                ?>

            </div>
    <table class="table table-striped">
        <tr><h1 name='dat'><?php echo date('d-m-Y') ?></h1></tr>
        

        <tr>
            <th>roll no.</th>
            <th>NAME</th>
            <th>batchtime</th>
            
            <th>attendence</th>
        </tr>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // $num = 1;
            session_start();
            $tname=$_SESSION['nm'];
            echo "$tname";
            $btime = $_POST['stime'];
        echo $btime;
        if($tname=='NAVEEN'){
            $sql = "SELECT * FROM `student` WHERE batchtime ='$btime'";
        }
        else{
            $sql = "SELECT * FROM `student` WHERE batchtime ='$btime' AND teacher='$tname'";

        }
            $result = $conn->query($sql);
        
        
            if ($result->num_rows > 0) {
                // output data of each row
        
                while ($row = $result->fetch_assoc()) {
        
                   
            
                ?>

        <tr>
             <form action='' method='post'>
             <!-- <td><?php echo $serial ?></td> -->

             <td><?php echo $row['rollno'] ?>
             <input type="hidden" class='td' name='rollno[]'  value='<?php echo $row['rollno']  ?>'>
             </td>
             <td><?php echo $row['sname'] ?>
             <input type="hidden" name="sname[]"  value="<?php echo $row['sname'] ?>">
             </td>
            <td><?php echo $row['batchtime'] ?>
            <input type="hidden" name='btime[]'  value='<?php echo $row['batchtime'] ?>'>
            </td>
          


            <td>
         
                    <input type='radio'   value='present'   name="attendence[<?php echo $counter; ?>]">Present 
                    <input type='radio' value='absent'   name="attendence[<?php echo $counter; ?>]">Absent
         </td>
                </tr>
                <?php
$counter++;
                }}}
?>
</table>
<input type='submit' value='submit' name='submit'>;
</form>

     
    

        
    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script> -->

 
         </body>
</html>
