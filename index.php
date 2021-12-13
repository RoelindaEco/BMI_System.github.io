<?php
	session_start();
	include('conn.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Using Cookie with Logout</title>
<style>
body {
	background-image:url("Images/cover.jpg");
	background-repeat:no-repeat;
	background-size:cover;
}
ul{
	position: absolute;
	top: 550px;
	left: 550px;
}


ul li{
	display: inline-block;
}

ul li a{
	text-decoration: none;
	color: black;
	padding: 5px 20px;
	border: 1px solid transparent;
}
ul li a:hover{
	background-color: #fff;
	color: #000;

}

.button{
	position: absolute;
	top: 550px;
	left: 550px;


}
.btn{
	border: 5px solid black;
	padding: 10px 30px;
	color: black;
	text-decoration: none;

}
.btn:hover{
	background-color: #fff;
	color: #000;
}



</style>



<link href="Style/Add_Form.css" rel="stylesheet" type="text/css" />

<body>
	<h2><center><font size="8" face="Berlin Sans FB Demi">LOG-IN FORM</form></center></h2>
	<div id="form">
	<table>
	<form method="POST" action="login.php">
	<center>
	<label><font size="5" face="Arial">Username:</font></label> <input type="text" value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>" name="username"><br><br>
	<label><font size="5" face="Arial">Password:</font></label> <input type="password" value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>" name="password"><br><br>
	<input type="submit" value="Login" name="login">
	</center>
	</form>
	</table>
	</div>
	
	<span>
	<?php
		if (isset($_SESSION['message'])){
			echo $_SESSION['message'];
		}
		unset($_SESSION['message']);
	?>
</span>
</body>
</html>