<?php
if(isset($_POST['comment'])){
   include 'connect.php';
   include 'header.php';
    $id = $_POST['id'];
    $comment = $_POST['cmt'];
    $username = $_SESSION['name'];
    $sql = "INSERT INTO `comments` (`com_id`, `comment`, `id`, `usernam`) VALUES (NULL,'$comment','$id','$username');";
    $query =  mysqli_query( $con , $sql );
    if($query){
        ?>
        <script>
            location.href = "view.php?id=<?php echo $id?>"
        </script>
        <?php
    }
}
?>
