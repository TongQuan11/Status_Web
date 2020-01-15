<?php
	session_start();
	// if(isset($_SESSION['success'])){
	// 	 echo "<script> alert('Sign up successfull !');</script>";
	// }
	require "../database/db.php";
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
			$_SESSION['image'] ='../images/la.png';
			header("location: ../view/home.php");
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
				header("location:../view/home.php");
			}
			else{
				echo "<script> alert('Name or Password is not correct !');</script>";
				header("location: ../view/login.php");
			}
		}
	}
?>