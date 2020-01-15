<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="../css/displayStatus.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php 
        for($i=0; $i<count($post); $i++){?>
            <div class="status">
                <div class="infor_user">
                    <img src="<?php echo($post[$i][0]);?>">
                        <p><?php echo($post[$i][1]);?></p>
                        <p>are feeling <?php echo($post[$i][4]);?></p>
                    </div>
                    <?php 
                    	if($post[$i][2] != null && $post[$i][3] != '../images/' ){?>
                        <p><?php echo($post[$i][2]);?></p>
                        <div class="body_image">
                            <img src="<?php echo($post[$i][3]);?>">
                        </div>
                        <?php require 'express.php';
                     }

                    if($post[$i][3] == '../images/' && $post[$i][2] != null ){?>
                        <p><?php echo($post[$i][2]);?></p>
                        <?php require 'express.php';
                    }

                    if($post[$i][3] != '../images/' && $post[$i][2] == null ){?>
                        <div class="body_image">
                            <img src="<?php echo($post[$i][3]);?>">
                        </div>
                        <?php require 'express.php';
                    } ?>
                </div>
        <?php  } ?>
</body>
</html>