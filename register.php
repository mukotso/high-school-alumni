<?php include_once('server.php');?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    
    <title> Forgot Password</title>
  

    <link rel="apple-touch-icon" href="apple-icon.png">
   


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
<!-- 
    <link rel="stylesheet" href="assets/css/style.css"> -->
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<style>
  body{
        background:url("images/alumni.jpg");
        background-repeat:repeat;
    }
    
</style>

</head>

 <body>
 <?php include_once('includes/topnavigation.php');?>




    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-md-1"></div>
       <div class="col-md-10">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-md-12">
                  
                <h1 class="shadow mb-0"><center>Registration Form</center></h1>
                
                <?php include_once('errors.php'); ?>
                </div>
                <!-- <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div> -->
              </div>
            </div>
            <div class="card-body">
              <form action="register.php" method="post">
                <!-- The erros are displayed here-->
                <?php //include('../errors.php'); ?>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4 pr-lg-4">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-name">Name</label>
                        <input name="name" type="text" id="input-name" class="form-control" placeholder="Name" required>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input name="email"  type="email" id="input-email" class="form-control" placeholder="Email" required>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-id-number">ID Number</label>
                        <input name="id_number" type="number" id="input-id-number" class="form-control" placeholder="ID Number"  required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-gender">Gender</label>
                          <select id="input-gender" class="form-control" name="gender">
                            <option >Male</option>
                            <option >Female</option>
                          </select>
                      </div>
                    </div>
                  
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-admission">Admission Number</label>
                        <input name="admission_number" type="number" id="input-admission" class="form-control" placeholder="Addmission Number"  required>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-gender">Year 0f Completion</label>
                        <input name="completion_year" type="number" id="input-admission" class="form-control" placeholder="e.g 2014"  required>
      
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-tel">Phone Number</label>
                        <input name="tel" id="input-tel" class="form-control" placeholder="Phone Number"  type="number" required>
                      </div>
                    </div>
                  
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input name="address" id="input-address" class="form-control" placeholder="Home Address"  type="text" required>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">City</label>
                        <input name="city" type="text" id="input-city" class="form-control" placeholder="City"  required>
                      </div>
                    </div>
                  </div>
                </div>
                </div>

                
                <hr class="my-4" />
                <div class="pl-lg-4">
                <h6 class="heading-small text-muted mb-4">Authentication</h6>
                
                  
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-new-password"> Password</label>
                        <input name="password_1" id="input-new-password" class="form-control" placeholder="New Password" type="password">
                      </div>
                    </div>
                  
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-confirm-new-password">Confirm Password</label>
                        <input name="password_2" type="password" id="input-confirm-new-password" class="form-control" placeholder="Confirm New Password">
                      </div>
                    </div>
                  </div>
                <hr class="my-4" />

                <div class="row align-items-center">
                  <div class="col-md-9"></div>
                  <button type="submit" name="reg_user" class="btn btn-primary col-2 mb-3">Register</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include_once('includes/outerfooter.php'); ?>
    
      </body>
</html>