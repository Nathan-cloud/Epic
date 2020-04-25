
<!DOCTYPE html>
<head>
<title> | Registration :: Email</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<div class="reg-w3">
<div class="w3layouts-main">
	<h2>Register Now</h2>
		<form action="" method="post">
                        <input type="text" class="ggg" name="first_name" placeholder="First Name" required="">
                        <input type="text" class="ggg" name="last_name" placeholder="Last Name" required="">
			<input type="email" class="ggg" name="email" placeholder="E-MAIL" required="">
			<input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
			<h4><input type="checkbox" />I agree to the Terms of Service and Privacy Policy</h4>
			
				<div class="clearfix"></div>
				<input type="submit" value="submit" name="register">
		</form>
		<p>Already Registered.<a href="login.php">Login</a></p>
</div>
</div>
    <?php
    require_once ('connection.php');
      
        if(isset($_POST['register'])){
            $First_name =$_POST['first_name'];
            $Last_name=$_POST['last_name'];
            $Email=$_POST['email'];
            $Password=$_POST['password'];
            
             if($First_name !="" and $Last_name != "" and $Email != "" and $Password != ""){

                 $q="INSERT INTO users(First_name,Last_name,Email,Password ) VALUES"
                         . "('".$First_name."','".$Last_name."','".$Email."','".$Password."')";
                 if(mysqli_query($con, $q)){
                    header("location:login.php");
                }else{
                    echo $q;
                }
                

             }
             else{
                echo 'please fill all boxes';
            }
             
                 
             }
    ?>
   
<script src="js/bootstrap.js"></script>


</body>
</html>
