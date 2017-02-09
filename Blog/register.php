<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/login.css"/>
	<link rel="short icon" href="images/sign_in.png" type="image/x-icon">
	<script src="md5.js"></script>
</head>
<body>

	<div class="container">
		<form class="frame" action="add_user.php" name="user_check" methor="post">
			<p>
				<img src="images/login.png"/>
			</p>
			<p>
				<input type="text" placeholder="username" />
				<br/>
				<span class="mark">(必填，3-15字符长度，支持汉字、字母、数字及_)</span>
			</p>
			<p>
				<input type="password" placeholder="password" id="password"/>
				<br/>
				<span class="mark">(必填，不得少于6位)</span>
			</p>
			<p>
				<input type="text" name="confirm" placeholder="confirm" />
                <br/>
                <span class="mark">(必填，不得少于6位)</span>
            </p>
			<p>
				<input name="submit" type="submit" class="btn" value="Sign up"/>
			</p>
		</form>
	</div>
	
	<script type="text/javascript">
		var mypsw = document.getElementById("password");
		var hash = hex_md5(mypsw.value);
		mypsw.setAttribute("value","hash");
	</script>

</body>
</html>