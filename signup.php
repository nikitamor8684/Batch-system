<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.cgoogleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <style>
        body{
            margin:0px;
            padding:0px;
            box-sizing:border-box;
            background-image:url('cmp2.jpg');
            background-repeat:no-repeat;
            background-size:cover;
        }
        .nav{
            background-color:black;
            color:goldenrod;
            height:60px;
            width:100%;
            margin:0px;
            position:relative;
            padding-left:550px;
        }
        .footer{
            background-color:black;
            color:goldenrod;
            height:40px;
            width:100%;
            margin-top:210px;
        }
        h1{
            display:inline-block;
   
        }
        .form{
            background-color:whitesmoke;
            height:300px;
            margin-left:450px;
            width:450px;
            padding:10px;
            padding-left:30px;
            box-sizing:border-box;
        }
    input{
        display:inline-block;
        width:350px;
        height:40px;
        margin:3px;
        margin-top:6px;
    }

 


        </style>
</head>
<body>
    <?php
include "conn.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $password=$_POST['password'];
    $sql="SELECT * FROM signup where name='$name' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        header('location:student.php');
    }
    session_start();
    $_SESSION['nm']=$name;
}
    ?>
    <div class="nav">
<h1 >Login</h1>
</div>
<div class="form">
    <form action="" method="post">
       

    <input type="text" placeholder="Enter your name" name="name" id="college"><br>
    <input type="password" placeholder="Enter your password" name="password" id="email"><br>
<input type="submit" value="Sign Up" style="background-color:green" id="signup">

    </form>
    </div>
  <div class="footer"></div>



     
 
</body>
</html>