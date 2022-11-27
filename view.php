
<?php
include 'header.php';
include 'connect.php';
if(isset(($_GET['id']))){
  $id = htmlspecialchars($_GET['id']);
  $sql = "SELECT *  FROM `confest` WHERE `id` = $id;";
  
  $query = mysqli_query($con,$sql);

$data=mysqli_fetch_assoc($query);
mysqli_free_result($query);
Mysqli_close($con);
}
?>
<?php

if(isset($_POST['del'])){
  $id = $_POST['id'];
  echo $id;
  
  $sql = "DELETE FROM `confest` WHERE `id` = $id;";
  $query = mysqli_query($con,$sql);
  if($query){
    header('Location: main.php');
  }
}
?>
<?php if($data) :?>
  <section class="algo">
  <section class="sin" >
         <div class="see">
            <div class="title"><h2><?php echo htmlspecialchars($data['title']);?></h2></div>
            <div><h3>Created by : <?php echo htmlspecialchars($data['dname']);?> </h3></div>
            <div class="cont"><h4><?php echo htmlspecialchars($data['confest']);?></h4></div>
            <form action="view.php" method="post">
            <input type="hidden" name='id' value=<?php echo $data['id']?>>
              <input type="submit" name="del" class="abtn" value="delete">
            </form>
          </div>
        </section></section>
       
        <form action="com.php" method="post"><textarea name="cmt" id="txtarea" cols="50" rows="5" placeholder="  Add your comment" style="resize: none; border-radius: 10px;margin-left: 35%;"></textarea><br>
       <br><input type="hidden" name='id' value=<?php echo $data['id']?>> <button id="vanum" style="margin-left: 55%;" name="comment">Sub</button><br></form>
       <?php

if(isset(($_GET['id']))){
  $id = htmlspecialchars($_GET['id']);
  $sql2 = "SELECT *  FROM `comments` WHERE `id` = $id ORDER BY `time` ASC;";
  include 'connect.php';
  $query2 = mysqli_query($con,$sql2);

$com = mysqli_fetch_all($query2,MYSQLI_ASSOC);
mysqli_free_result($query2);
Mysqli_close($con);

}
?>
 <?php foreach ($com as $comment) { ?>

<section>
      <div style='display: flex; flex-direction: column; margin: 0; 
      overflow: auto;border: 1px solid grey; margin-top: 5px; margin-left: 25%; 
      margin-right: 25%; padding-bottom: -10px; padding-left: 10px;'>
         <h4><?php echo htmlspecialchars($comment['usernam']);?></h4>
         <p><?php echo htmlspecialchars($comment['comment']);?></p>
       </div>
     </section>

<?php } ?>
       <?php else:
      echo 'NO DATA FOUND';
      ?>
        
   
      

<?php endif;?>



<?php
include 'footer.html';
?>