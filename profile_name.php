
<?php
session_start();
if(isset($_SESSION['last_name'])){

      echo $_SESSION['last_name'];
      
      echo '<a href="logout.php"  style="text-decoration:none; margin-left:50px; font-size:15px;">Logout</a> ' ;
        }else{
            header("location:login.php");
        }
        

