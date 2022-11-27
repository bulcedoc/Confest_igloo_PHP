<?php
session_start();
if(!$_SESSION['name']){
    session_destroy();
    header('Location:  index.php');
   
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <header> <div class="header" id="head">
        <div class="hambuger" id="ham"></div>
        <a href="main.php" ><h1 class="logo">IGLOOO</h1></a>
        <h3 class="cubic">Hey , <?php echo $_SESSION['name']?></h3>
    </div>
    </header>
    <section>
        <nav class="nav">
            <a href="main.php" class="ni">Home</a>
            <a href="createc.php" class="ni">Create a confest</a>
            <a href="myc.php" class="ni">My confests</a>
            <a href="account.php" class="ni">Account</a>
        </nav>
    </section>
</body>
</html>