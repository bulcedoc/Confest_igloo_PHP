
<?php

include 'header.php';
include 'connect.php';
$sql = "SELECT *  FROM `confest`;";
$query = mysqli_query($con,$sql);

$data=mysqli_fetch_all($query,MYSQLI_ASSOC);
mysqli_free_result($query);
Mysqli_close($con);

?>




<section class="algo">
 <?php foreach ($data as $datai) { ?>

   <section class="sin">
         <div class="see">
            <div class="title"><h2><?php echo htmlspecialchars($datai['title']);?></h2></div>
            <div><h3>Created by : <?php echo htmlspecialchars($datai['dname']);?> </h3></div>
            <div class="cont"><h4><?php echo htmlspecialchars($datai['confest']);?></h4></div>
            
            <input type="hidden" name="id" value='<?php echo htmlspecialchars($datai['id']);?>'>
            <a href="view.php?id=<?php echo $datai['id']?>" class="abtn">view</a>
          </div>
        </section>


   <?php } ?>
   </section>
<?php
include 'footer.html';

?>