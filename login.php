<?php
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD']== "POST")
{
	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
      //read from database
    	$query = "select * from users where user_name = '$user_name' limit 1";

        $result = mysqli_query($con,$query);

        if($result)
        {
        	if($result && mysqli_num_rows($result)>0)
        	{
        		$user_data = mysqli_fetch_assoc($result);
		        if($user_data['password'] === $password)
		        {
		        	$_SESSION['user_id'] = $user_data['user_id'];
		        	header("Location: studentinfo1.php");
                    die;
		        }
        	}
        }
        echo "Wrong username or password";
        
    }else
    {
    	echo "Wrong username or password";
    }
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="loginstyle.css">
</head>
<body style="margin-left: 150px;margin-top: 50px; background-image: url(home.jpg);
background-repeat: no-repeat;background-size: cover;">
<div class="title"><h2>SIRISIA TECHNICAL TRAINING INSTITUTE <br>STUDENT ADMISSION<br></h2></DIv><br><br>


	<div id="box">
		
      <form method="post">
      	<div style="font-size: 20px;margin: 10px;color: white">User Login</div>

      	<input id="text" type="text" name="user_name" placeholder="user_name"><br><br>
      	<input id="text" type="password" name="password" placeholder="password"><br><br>
		  <input id="button" type="submit" value="Login">
      	<button id="button" type="submit" >	<a href="alogin.php">Home</a></button><br><br>
      	<a href="signup.php">Click to Signup</a><br><br>
      </form>


	</div>

</body>
</html>