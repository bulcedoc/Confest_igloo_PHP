
<?php
include 'header.php';
$name ='';
$title='';
$conf ='';
$cname = $_SESSION['name'];

?>
<?php
if(isset($_POST['sub'])){
    $name = htmlspecialchars($_POST['dname']);
    $title = htmlspecialchars($_POST['title']);
$conf = htmlspecialchars($_POST['confest']);
include 'connect.php';
$sql = "INSERT INTO `confest` (`username`, `dname`, `title`, `confest`, `id`) VALUES ('$cname', '$name','$title','$conf', NULL);";
 
   if(mysqli_query($con , $sql)){
       echo "okay done";
   }
   else {"error: ".$sql."<br>". mysqli_error($con);}
   mysqli_close($con);

}
?>






<section class="sec">
     <div>
         <form action="createc.php" method="post">
         
          <label for="name" class="label">Display Name : </label>
          <input type="text" class="place" name="dname" placeholder=" use your name or post anonymous"> <br><br>
          <label for="title" class="label">Title : </label>
          <input type="text" class="place" name="title" placeholder=" add your tiltle"> <br><br>
          <label for="con" class="label">Confest : </label><br>
          <textarea name="confest" id="confestc" cols="30" rows="10" ></textarea><br><br>
          <input type="submit" class="btn" name="sub">
         </form>
     </div>
    </section>

    <?php
    
    
    ?>


<?php

include 'footer.html';

?>