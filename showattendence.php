<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.min.css">

</head>
<body>
    <?php
include "conn.php";
    ?>
    <form action="" method="post">
        
  <div class="mb-3 form-check">
      <label class="form-check-label" for="exampleCheck1">Enter date</label>
      <input type="date" class="form-control" id="exampleCheck1" name="dat">
  </div>
  <div class="mb-3 form-check">
      <label class="form-check-label" for="exampleCheck1">Enter date</label>
      <input type="date" class="form-control" id="exampleCheck1" name="dat1">
  </div>
  

  <input type="submit" class="btn btn-primary">
</form> 
<table class="table table-striped">
  
        

        <tr>
            <th>roll no.</th>
            <th>NAME</th>
            <th name="date[]" >1</th>
            <th name="date[]" >2</th>
          <th name="date[]" >3</th>
          <th name="date[]" >4</th>
          <th name="date[]" >5</th>
          <th name="date[]" >6</th>
          <th name="date[]" >7</th>
          <th name="date[]" >8</th>
          <th name="date[]" >9</th>
          <th name="date[]" >10</th>
          <th name="date[]" >11</th>
          <th name="date[]" >12</th>
          <th name="date[]" >13</th>
          <th name="date[]" >14</th>
          <th name="date[]" >15</th>
          <th name="date[]" >16</th>
          <th name="date[]">17</th>
          <th name="date[]" >18</th>
          <th name="date[]" >19</th>
          <th  name="date[]">20</th>
          <th  name="date[]">21</th>
          <th  name="date[]">22</th>
          <th  name="date[]">23</th>
          <th  name="date[]">24</th>
          <th  name="date[]">25</th>
          <th  name="date[]">26</th>
          <th  name="date[]">27</th>
          <th  name="date[]">28</th>
          <th name="date[]">29</th>
          <th  name="date[]">30</th>
          <th  name="date[]">31</th>

        </tr>
        <?php 
   

    $firstDayOfMonth = date("1-m-Y");
    $totalDaysInMonth = date("t", strtotime($firstDayOfMonth));
   
    // Fetching Students 
    $sql1="SELECT * FROM attendance";
    $fetchingStudents=mysqli_query($conn,$sql1);
    $totalNumberOfStudents = mysqli_num_rows($fetchingStudents);
    $studentsNamesArray = array();
    $studentsIDsArray = array();
    $counter = 0;
    while($students = mysqli_fetch_assoc($fetchingStudents))
    {
        $studentsNamesArray[] = $students['name'];
        
    }


?>
<?php
include "conn.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
    $date=$_POST['dat'];
    $date1=$_POST['dat1'];
   $month= substr($date, 0, 2);
$month1=substr($date1,0,2);
$sql3="SELECT count(rollno) as name1 FROM attendance where date BETWEEN '$date' AND '$date1' ORDER BY date ";
$result3=mysqli_query($conn,$sql3);
if(mysqli_num_rows($result3)>0){
    while($row=mysqli_fetch_assoc($result3)){
$student2=$row['name1'];
echo $student2;
    }}
    $sql="SELECT * FROM attendance where  date BETWEEN '$date' AND '$date1' ORDER BY date  ";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            $roll1=array();
            // $roll=$row['rollno'];
            $roll1[]=$row['rollno'];
            echo $row['rollno'];
            $name=$row['name'];
            
            $date4= $row['date'];
            
            $date5=substr($date4, 3, 2);
            echo $date5;
            
            
            echo "<tr>";
            for($j=1;$j<$student2;){
                $rollno1=$roll1[$j];
                for($i=1;$i<=33;$i++){
                    if($i==1){
                        echo"<td>".$row['rollno']."</td>";
                        
                    }
                    elseif($i==2){
                    echo"<td>".$row['name']."</td>";

                }
                else{
                    echo $rollno1;
                     $sql2="SELECT * FROM attendance  WHERE rollno='$rollno1'";
                     $result2=mysqli_query($conn,$sql2);
                     if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                            if($i=$date5){
                                    echo "<td>".$row['attendance']."</td>";
                                }
                                echo "</tr>";
                 }} 
                }
                $j++;
            }

        }}}
    }
?>
</table>
</div>
</body>
</html>