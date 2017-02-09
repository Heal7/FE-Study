<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/login.css"/>
	<link rel="short icon" href="images/sign_in.png" type="image/x-icon">
	<script src="md5.js"></script>
</head>
<body>

	<div class="container">
		<form class="frame" action="user_check.php" name="user_check" methor="post">
			<p>
				<img src="images/login.png"/>
			</p>
			<p>
				<input type="text" placeholder="username" />
			</p>
			<p>
				<input type="password" placeholder="password" id="password"/>
			</p>
			<p>
				<input name="Signin" type="submit" class="btn" value="Log in"/>
			</p>
			<p>
				<a class="btn" href="register.php">Sign up</a>
			</p>
		</form>
	</div>
	
	<script type="text/javascript">
		var mypsw = document.getElementById("password");
		var hash = hex_md5(mypsw);
		mypsw.setAttribute("value","hash");
	</script>

</body>
</html>