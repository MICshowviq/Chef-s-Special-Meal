<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <title>Cholo Khai</title>
    
    <!--Fabicon Image-->
    <link rel="shortcut icon"  href="../f-black.png">
    <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="css/starlight.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/cstm.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white log-cstm">
        <div class="  signin-logo tx-center tx-24 tx-bold tx-inverse "><a class="cstm-title" href="login.php">Cholo Khai</a></div>
        <div class="tx-center mg-b-60">Login with valid Information</div>

        <form action="action.php" method="POST">
        	<div class="form-group">
	          <input type="email" class="form-control" name="email" placeholder="Enter your email">
	        </div><!-- form-group -->
	        <div class="form-group">
	          <input type="password" class="form-control" name="password" placeholder="Enter your password">
	          
	        </div><!-- form-group -->
        
        <button type="submit" name="btn-login_user" class="btn btn-info btn-block">Sign In</button>

        

          <?php

            if(isset($_GET['msg']))
            {
          ?>

           <p style="color: green;font-weight: 700;">Login with Valid Credentials!</p>
          <?php 
            }
          ?>
          
          <?php

            if(isset($_GET['emsg']))
            {
          ?>

           <p style="color: red;font-weight: 700;">Invalid Credentials!</p>
          <?php 
            }
          ?>
        </form>
        <br>
       
        
        <hr>
        <a href="register.php" class="btn btn-success btn-block" style="text-align: center;">Create an Account</a>
      </div><!-- login-wrapper -->

    </div><!-- d-flex -->

    <script src="lib/jquery/jquery.js"></script>
    <script src="lib/popper.js/popper.js"></script>
    <script src="lib/bootstrap/bootstrap.js"></script>

  </body>
</html>

