<?php 

    require 'custom_function.php';

    if(isset($_GET['post_id'])){

          //updateing the view count
          $sql = "UPDATE `post` SET view = view + 1 WHERE post_id='".$_GET['post_id']."'";
          $db->query($sql);

        $post = fetch_all_data_usingDB($db,"select * from post where post_id = '".$_GET['post_id']."'");

        $seller = fetch_all_data_usingDB($db,"select * from user where id = '".$post['seller_id']."'");   
    }
    else{
        header("Location: index.php");
    }
    
    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cholo Khai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>  

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="index.php">Home Food</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse container" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="blog.php">Blog</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
        </li>
        
       
        </ul>
        
    </div>
  </div>
</nav>





<section>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <h3><?= $post['title'] ?></h3>
            </div>

            <div class="col-md-6">
                <img src="<?= $post['image'] ?>" style="max-width:500px;max-height:400px;" alt="">
            </div>

            <div class="col-md-6">
            <div class="row">
                    <div class="col-md-4">
                        <h5 class="mt-3">Seller Info:</h5>
                    </div>
                    <div class="col-md-4">
                        Views: <?= $post['view'] ?> | Likes: <?= $post['liked'] ?>
                    </div>
                    <div class="col-md-4">
                        <?php
                            if(isset($_GET['liked']))
                            {
                        ?>

                        <?php
                            }
                            else{
                        ?>
                                <a href="action.php?like_post_id=<?= $post['post_id'] ?>" class="btn btn-primary"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>&nbsp;Like</a>
                        <?php 
                            }
                        ?>
                    
                   
                    </div>

                   
                </div>
                <div class="row">
                    <div class="col-3">
                        Name: <?= $seller['name'] ?> 
                    </div>

                    <div class="col-3">
                        Phone: <?= $seller['phone'] ?>  
                    </div>

                    <div class="col-3">
                        Location: <?= $seller['location'] ?>  
                    </div>
                    <div class="col-3">
                        Address: <?= $seller['address'] ?>  
                    </div>
                    
                </div>
            </div>

            <div class="col-md-12 mt-4 mb-4">
                        Details: <br> <?= $post['details'] ?>  
            </div>

            <div class="col-md-12 mt-3 mb-5">
                    <a href="index.php" class="btn btn-dark btn-block">Back</a>
            </div>
        </div>
    </div>
</section>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>