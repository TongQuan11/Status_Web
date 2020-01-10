 <?php
    require 'home_handle.php';
 ?>
 <!DOCTYPE html>
    <html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="home.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-light" style="background-color: #bfff00; border-bottom: 1px #808080 solid; position: fixed; top: 0px; width: 82.5%">
                <a href="home.php"><i class="fa fa-home" style="font-size:36px"></i></a>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="background: #00dbde; color: black;">Search</button>
                </form>
                <a href="detail_users.php"><i class="fa fa-user" style="font-size:36px"></i></a>
                <i class="fa fa-users" style="font-size:36px"></i>
                <i class="fa fa-bell" style="font-size:36px"></i>
                <a href="login.php"><i class="fa fa-sign-out" style="font-size:36px" ></i></a>
            </nav>
        <div class="sybol">
            <img src="<?php echo($_SESSION['image']);?>" style="height: 300px; width: 300px; border-radius: 100%; border: 1px solid #ff8000;">

            <h3 style="font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
                <?php
                if(isset($_SESSION['name']) && isset($_SESSION['pass'])){
                    echo "WELCOME"." ".strtoupper($_SESSION['fullname'])." COME TO ";
                } ?>
                </h3>
                <h3 style="font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
                STATUS WEB - PLACE TO MAKE YOU HAPPY</h3>
            </div>

            <form class="post" action="" method='post' enctype="multipart/form-data">
                <img src="<?php echo($_SESSION['image']);?>">
                <input type="text" name="status" style="border-radius: 50px;width: 50%; height: 40px; 
                 margin-left: 10px; margin-right: 10px" ; placeholder="   What are you thinking?">
                <div class="image-upload" style="padding-right: 50px;">
                    <label for="fileToUpload">
                        <i class="fa fa-file-image-o" style="font-size:36px" /></i>
                        <b>Photo</b>
                    </label>
                    <input id="fileToUpload" type="file" name="fileToUpload" />
                </div>
                <div class="emotion">
                    <select name="select" id="select">
                        <option value="Normal">Normal</option>
                        <option value="Happiness">Happiness</option>
                        <option value="Sadness">Sadness</option>
                        <option value="Fear">Fear</option>
                        <option value="Disgust">Disgust</option>
                        <option value="Anger">Anger</option>
                        <option value="Sadness">Sadness</option>
                        <option value="Sursprise">Sursprise</option>
                    </select>
                    <b>Emotion</b>
                </div>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name='post'
                 style="background: #00dbde;color: black; height: 40px;"><b>POST</b></button>
            </form>

            <?php 
            for($i=0; $i<count($post); $i++){?>

                <div class="status">
                    <div class="infor_user">
                        <img src="<?php echo($post[$i][0]);?>">
                        <p style="font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;
                         padding-top: 3px;"><?php echo($post[$i][1]);?></p>
                        <p style="font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;
                         padding-top: 3px;padding-left: 3px;">are feeling <?php echo($post[$i][4]);?></p>
                    </div>

                    <?php 
                    if($post[$i][2] != null && $post[$i][3] != 'images_back/' ){?>
                        <p style="font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;
                         padding-top: 3px;"><?php echo($post[$i][2]);?></p>
                        <div class="body_image">
                            <img src="<?php echo($post[$i][3]);?>" alt="" style="width: 100%; height: 550px;">
                        </div>
                        <div class="like">
                            <i class="fa fa-thumbs-o-up" style="font-size:20px">Like</i>
                            <i class="fa fa-comment-o" style="font-size:20px">Comment</i>
                            <i class="fa fa-share" style="font-size:20px">Share</i>
                            <?php if($_SESSION['name']=="admin"){?>
                                <form action="" method="post">
                                    <button type="submit" name="delete" value="<?php echo $post[$i][5];?>"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
                                </form>
                            <?php } ?>
                        </div>
                    <?php }

                    if($post[$i][3] == 'images_back/' && $post[$i][2] != null ){?>
                        <p style="font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue',
                        sans-serif; padding-top: 3px;"><?php echo($post[$i][2]);?></p>
                        <div class="like">
                            <i class="fa fa-thumbs-o-up" style="font-size:20px">Like</i>
                            <i class="fa fa-comment-o" style="font-size:20px">Comment</i>
                            <i class="fa fa-share" style="font-size:20px">Share</i>
                            <?php if($_SESSION['name']=="admin"){?>
                                <form action="" method="post">
                                    <button type="submit" name="delete" value="<?php echo $post[$i][5];?>"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
                                </form>
                            <?php } ?>
                        </div>
                    <?php }

                    if($post[$i][3] != 'images_back/' && $post[$i][2] == null ){?>
                        <div class="body_image">
                            <img src="<?php echo($post[$i][3]);?>" alt="" style="width: 100%; height: 550px;">
                        </div>
                        <div class="like">
                            <i class="fa fa-thumbs-o-up" style="font-size:20px">Like</i>
                            <i class="fa fa-comment-o" style="font-size:20px">Comment</i>
                            <i class="fa fa-share" style="font-size:20px">Share</i>
                            <?php if($_SESSION['name']=="admin"){?>
                                <form action="" method="post">
                                    <button type="submit" name="delete" value="<?php echo $post[$i][5];?>"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
                                </form>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
        <?php  } ?>
        </div>
    </body>

    </html>
   <!--  <form  class="like" action="" method="post">
                                <button type="submit" name="delete" value="<?php echo $post[$i][5];?>"> <i class="fa fa-thumbs-o-up" style="font-size:20px"></i></button>
                                <button type="submit" name="delete" value="<?php echo $post[$i][5];?>"><i class="fa fa-comment-o" style="font-size:20px"></i></button>
                                <button type="submit" name="delete" value="<?php echo $post[$i][5];?>"> <i class="fa fa-share" style="font-size:20px"></i></button>
                            </form> -->