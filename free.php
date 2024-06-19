<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <?php
include "conn.php";
?>
<div class="container">

<form method="post">
    <div class="mb-3">
        <label for="stime" class="form-label">Start Time:</label>

        <?php

        $sql = "SELECT * from batch";

        $result =mysqli_query($conn,$sql);


        if ($result->num_rows > 0) {
            // output data of each row
            echo "<select class='form-control' id='stime' name='btime'>";
            while ($row = $result->fetch_assoc()) {
                ?>

<option value="<?php echo $row['batchtime'] ?>"><?php echo  $row["batchtime"].' TO '.$row["batch"] ?></option>
<?php
            }
            echo "</select>";
        }
?>

   

    </div>


 

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
  <?php
  include "conn.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $btime=$_POST['btime'];
// echo $btime;

$sql="SELECT count(sname) as name FROM student where batchtime='$btime'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
$student=$row['name'];

$sql3="SELECT count(sname) as name1 FROM student where batchtime <='$btime'";
$result3=mysqli_query($conn,$sql3);
if(mysqli_num_rows($result3)>0){
    while($row=mysqli_fetch_assoc($result3)){
$student2=$row['name1'];
// echo "$student2";
// echo "<br>";

    }}
$sql2="SELECT count(sname) as name1 FROM student where batchend <='$btime'";
$result2=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result2)>0){
    while($row=mysqli_fetch_assoc($result2)){
$student1=$row['name1'];
// echo $student1;
echo "<br><br>";
$total=20;

$total1=$total-$student2+$student1;
echo "<h1 style='background:rgb(0,0,255)'> Free system avaliable            $total1 </h1>";

    }}
 
}
}}
?>
  
  
</body>
</html>