<?php
include "conn.php";
$sql="CREATE DATABASE attendence";

$result = mysqli_query($conn,$sql);

if($result){
    echo "database created";
}
?>