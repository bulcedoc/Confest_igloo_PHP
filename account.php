<?php
include 'header.php';
include 'connect.php';
?>

  <section class="sec">
     <div>
         <form action="account.php" method="post">
             <label for="name" class="label">Account Name : </label>
             <input type="text" value="<?php echo $_SESSION['name'] ?>" name="accname"><br><br>
             <label for="no.of posts" class="label">No.of posts : </label>
             <div> <h4>no.of posts</h4> <button class="btn" id="but">Edit posts</button></div><br>
             <br>
             <button class="btn">SAVE</button>
             <a href="logout.php" class="btn" >Logout</a>

         </form>
         <Script>
             let ham = document.getElementById('but');
          ham.addEventListener('click',run);
           function run (){
                  alert("This feature is currently not avaliable.Please wait for some time");
              }            
         </Script>
     </div>
    </section>

    <?php

include 'footer.html';

?>


