<?php include_once('server.php');?>
    
<!doctype html>
<html class="no-js" lang="en">
<head>
    
    <title>MOI LRMS</title>
    

    <link rel="apple-touch-icon" href="apple-icon.png">
   


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


<style>
    .loginlinks:hover{
        background-color: #F9C08E;
          font-size: large;
    }
    body{
        background:url("images/alumni.jpg");
        background-repeat:repeat;
    }
    #form{
        margin-top:10%;
        margin-bottom:20%; 
         background-color: #F9C08E;
         
        padding: 4%;
    }
    .btn{
        background-color:  #784920;
    }
    </style>
</head>
<body>
<?php include_once('includes/topnavigation.php');?>

    <div class="sufee-login d-flex align-content-center flex-wrap" >
        <div class="container">
            
        <?php include_once('success_messages.php'); 
        ?>
            <div class="login-content row">
            <div class="col-md-3"></div>
                <div class="login-form col-md-6">
                    <form action="login.php" method="post" id="form" >
                   
                        <div>

                            <h2>LOGIN </h2>
                          <?php  include_once('errors.php'); 
                          ?>
                        <div class="form-group">
                            
                            <label> <i class="fa fa-lock"></i>Email address</label><a href="#" ></a>
                            <input type="email" class="form-control" placeholder="email address"  name="email" required>
                        </div>
                            <div class="form-group">
                                <label> <i class="fa fa-key"></i>Password</label><a href="#" ></a>
                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                        </div>
                              
                               
                                
                              
                                <button  type="submit" class="btn btn-success btn-block btn-flat m-b-30 m-t-30" name="login">Sign in</button>
                                
                               
                                    
                                    <a class="loginlinks" href="register.php"style="padding-left:25px;padding-right:25px;">Register</a>
                                       
                                    <a class="loginlinks" href="forgot-password.php"style="padding-left:25px;padding-right:25px;" >Forgot Password?</a>
                        </div>
                        
                    <div class="col-md-4"></div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include_once('includes/outerfooter.php'); ?>
    <!-- <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body> -->

</html>
