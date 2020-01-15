<?php
 require '../handle/profile_handle.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="../css/profile.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
         integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
         integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <?php require 'header.php';?>
        <div class="profile">
            <img src="<?php echo($_SESSION['image']);?>">
            <h3>
                <?php
                    if(isset($_SESSION['name']) && isset($_SESSION['pass'])){
                        echo strtoupper($_SESSION['fullname']);
                } ?>
            </h3>
            <h3>YOUR PROFILES</h3>
        </div>
        <?php require 'displaystatus.php'; ?>
    </div>
</body>
</html>