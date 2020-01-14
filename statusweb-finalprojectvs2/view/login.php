<?php 
require '../handle/login_handle.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	<form class="form_login" action="" method="post">
		<img src="" alt="">
		<h2>STATUS WEB</h2>
		<div class="name_pass">
			<label>User Name</label>
			<input id = "user_name"type="text" name="name" placeholder="Email or Username">
			<label style="margin-top: 10px;">Password</label>
			<input type="password" name="pass" placeholder="Password">
		</div>
		<button id="button_login">LOGIN</button>
		<label id="lbunder_login">Or login with</label>
		<div class="div_button">
			<button><i style="color: blue; padding-right: 3px;" class="fab fa-facebook"></i>Facebook</button>
			<button><i style="color: red; padding-right: 3px;"class="fab fa-google-plus"></i>Google</button>
		</div>
		<label id="lb_footer">Not a member?<span><a href="resgister.php" style="text-decoration: none;"> Sign up now</a></span></label>
	</form>
</body>
</html>