<?php
include "conn.php";
$sql="INSERT INTO signup(name,password) values('SATISH','SATISH')";
$result=mysqli_query($conn,$sql);
?>