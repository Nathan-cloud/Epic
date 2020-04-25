
<!DOCTYPE html>
<head>
<title> | Login :: Email</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2>Sign In Now</h2>
		<form action="#" method="post">
			<input type="email" class="ggg" name="email" placeholder="E-MAIL" required="">
                        <input type="text" class="ggg" name="last_name" placeholder="User Name" required="">
			<input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
                        <span><input type="checkbox" name="check" />Remember Me</span>
                        <p><a href="#">Forgot Password?</a></p>
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
		</form>
		<p>Don't Have an Account ?<a href="registration.php">Create an account</a></p>
</div>
</div>
    <?php session_start();
    require_once ('connection.php');
    if(isset($_POST['login'])){
        $Email = $_POST['email'];
        $Last_name= $_POST['last_name'];
        $Password = $_POST['password'];
        
         $q="SELECT * FROM users WHERE  Email='".$Email."' and Last_name ='".$Last_name."' and Password ='".$Password."'";
          $r= mysqli_query($con, $q);
                if(mysqli_num_rows($r) > 0){
                    $_SESSION['last_name']=$Last_name;
                            
                    header("location:index.php");
                    
                }else{
                    echo '<div class="w3layouts-main"><p class="feed">your Last name and password donot match</p></div>';
                }
            }
        
        
    
    ?>


</body>
</html>
