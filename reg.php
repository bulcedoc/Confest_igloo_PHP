<?php


include 'connect.php';
$jim = '';
?>
<?php


if (isset($_POST['sub'])){
    $name = $_POST['name'];
    $uname = $_POST['usrn'];
    $pass = $_POST['pass'];
    
    $sql = "SELECT *  FROM `accounts` WHERE `username` LIKE '$uname';";
    $query = mysqli_query($con,$sql);
    
    if(mysqli_num_rows($query)>0){   
    $jim = "already this user name exist";
    }
    else {
        $sql2 = "INSERT INTO `accounts` (`username`, `name`, `password`, `u_id`) VALUES ('$uname', '$name', '$pass', NULL);";
        $query2 = mysqli_query($con,$sql2);
        echo "account created";
        header('Location: index.php');
    }
}

?>
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
<form action="reg.php" method="post">
    <label for="name">Name : </label><br>
    <input type="text" name="name"><br><br>
    <label for="name">User Name : </label><br>
    <input type="text" name="usrn"><p><?php echo $jim?></p>
    <label for="pass">Password : </label><br>
    <input type="password" name="pass"><br><br>
    <input type="reset" class="btn">
    <input type="submit" name="sub" class="btn"><br><br>


    <label for="text">If you already have account,<a href="index.php">Login here.</a></label>
</form>
</div>
    </section>
    
  <?php

include 'footer.html';

?>