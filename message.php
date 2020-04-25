<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/message.css" rel="stylesheet" type="text/css"/>
        <style>
         
        </style>
    </head>
    <body>
        <p class="par"><?php require_once ("profile_name.php");?></p>
        <a href="index.php" class="navbar-brand"><span>Email</span></a>
    
        <div id="main">
            <div id="message_area">
                  <?php                   
            require_once ('connection.php');
           
            $sq1="SELECT * FROM messages";
            $r1= mysqli_query($con, $sq1);
            while ($row = mysqli_fetch_assoc($r1)){
                $message = $row['message'];
                $last_name =$row['last_name'];
                echo '<h4>'.$last_name.'</h4>';
                echo '<p class="mes">'.$message.'</p>';
            }
            
            
            if(isset($_POST['submit'])){
                $message=$_POST['message'];
                $q="INSERT INTO messages(id,message,last_name) VALUES('','".$message."','".$_SESSION['last_name']."')";
                if(mysqli_query($con, $q)){
                    echo '<h6 class="name">'.$_SESSION['last_name'].'</h6>';
                    echo '<p class="mes">'.$message.'</p>';
                    
                }
            }
            ?>
                
                
            </div>
          
            <form method="post">
                <input type="text" name="message"  placeholder="type your message"/>
                <input type="submit" name="submit" value="Send"/>
                
            </form>
            
        </div>
        
    </body>
</html>
