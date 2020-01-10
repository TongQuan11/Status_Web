<?php
	session_start();
	// if(isset($_SESSION['success'])){
	// 	 echo "<script> alert('Sign up successfull !');</script>";
	// }
	require "db.php";
	$sql = "SELECT * from users";
    $result = $db->query($sql)->fetch_all();
    $users=array();
	class User{
		public $id;
		public $name;
		public $pass;
		public $fullname;
		public $image;

		function __construct($id,$name,$pass,$fullname,$image) {
    		$this->id = $id;
    		$this->name = $name;
    		$this->pass = $pass;
    		$this->fullname = $fullname;
    		$this->image = $image;
  		}
	}
	for($i=0;$i<count($result); $i++){
	$u1 = new User($result[$i][0], $result[$i][1], $result[$i][2], $result[$i][3], $result[$i][4]);
	array_push($users, $u1);
	};
	if(isset($_POST['name']) && isset($_POST['pass'])){
		$name = $_POST['name'];
		$pass = $_POST['pass'];
		if($name == 'admin' && $pass =='admin'){
			$_SESSION['name'] = $name;
			$_SESSION['pass'] = $pass;
			$_SESSION['fullname'] ='admin';
			$_SESSION['image'] ='images_back/cho.png';
			header("location: home.php");
		}
		else{
			$check = 0;
			for($i=0; $i<count($users); $i++){
				if($name == $users[$i]->name && $pass == $users[$i]->pass){
					$check = 1;
					$_SESSION['id'] = $users[$i]->id;
					$_SESSION['name'] = $name;
					$_SESSION['pass'] = $pass;
					$_SESSION['fullname'] = $users[$i]->fullname;
					$_SESSION['image'] = $users[$i]->image;
				}
			}
			if($check == 1){
				header("location: home.php");
			}
			else{
				echo "<script> alert('Name or Password is not correct !');</script>";
				header("location: login.php");
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="login.css">
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