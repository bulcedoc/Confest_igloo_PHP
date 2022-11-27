<?php
session_start();
include 'connect.php';

if (isset($_POST['sub'])){
    $uname = $_POST['usrn'];
    $pass = $_POST['pass'];
   
     $sql = "SELECT *  FROM `accounts` WHERE `username` LIKE  '$uname' AND `password` LIKE '$pass';";
     $query= mysqli_query($con,$sql);
     $result = mysqli_fetch_array($query);
     if(!$result){   
        echo '<h1 style="text-align: center; margin-top: 1%;">Wrong credentials :) </h1>';
          }
    else {
        $_SESSION['name']=$uname;
        
         header('Location: main.php'); }    }
    
?>
<script>
    window.history.forward();
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> <header> <div class="header" id="head">
        <div class="hambuger" id="ham"></div>
        <a href="index.php" ><h1 class="logo">IGLOOO</h1></a>
    </div></header>
    <section class="sec">
        <div>
   <form action="index.php" method="post">
       <label for="name" >User Name : </label><br>
       <input type="text" required name="usrn"><br><br>
       <label for="pass">Password : </label><br>
       <input type="password" required name="pass"><br><br>
       <input type="submit" class="btn" name="sub"><br><br>
   
   
       <label for="text">If you don't have account,<a href="reg.php">Register here.</a></label>
   </form>
   </div>
       </section>
    
</body>
</html>
<?php include 'footer.html';?>