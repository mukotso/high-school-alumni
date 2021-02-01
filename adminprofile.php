<?php session_start() ?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    
    <title>TRMS Admin Profile</title>
   

    <link rel="apple-touch-icon" href="apple-icon.png">
   


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <?php include_once('includes/sidebar.php');?>

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include_once('includes/header.php');?>

       

<!-- Header -->
    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 100px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <h1 class=" text-white">Hello <?php echo $_SESSION['name']; ?></h1>
            <p class="text-white mt-0 mb-2">This is your profile page. You can see your details and manage your account</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
       <div class="col-xl-12 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit profile </h3>
                </div>
                <!-- <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div> -->
              </div>
            </div>
            <div class="card-body">
              <form action="admin.php" method="post">
                <!-- The erros are displayed here-->
                <?php //include('../errors.php'); ?>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4 pr-lg-4">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-name">Name</label>
                        <input name="name" type="text" id="input-name" class="form-control" placeholder="Name" value="<?php echo $_SESSION['name'] ?>" required>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input name="email"  type="email" id="input-email" class="form-control" placeholder="Email" value="<?php echo $_SESSION['email'] ?>" required>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-id-number">ID Number</label>
                        <input name="id_number" type="number" id="input-id-number" class="form-control" placeholder="ID Number" value="<?php echo $_SESSION['id_number'] ?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-gender">Gender</label>
                        <select id="input-gender" class="form-control" name="gender">
                            <option <?php if($_SESSION['gender'] == "Male") echo 'selected'; ?>>Male</option>
                            <option <?php if($_SESSION['gender'] == "Female") echo 'selected'; ?>>Female</option>
                          </select>
                      </div>
                    </div>
                  
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-admission">Admission Number</label>
                        <input name="admission_number" type="number" id="input-admission" class="form-control" placeholder="Addmission Number" value="<?php echo $_SESSION['admission_number'] ?>" required>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-gender">Year 0f Completion</label>
                        <input name="completion_year" type="number" id="input-admission" class="form-control" placeholder="e.g 2014" value="<?php echo $_SESSION['completion_year'] ?>"  required>
      
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-tel">Phone Number</label>
                        <input name="tel" id="input-tel" class="form-control" placeholder="Phone Number"  type="number" value="<?php echo $_SESSION['tel'] ?>"required>
                      </div>
                    </div>
                  
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input name="address" id="input-address" class="form-control" placeholder="Home Address"  type="text" value="<?php echo $_SESSION['address'] ?>"required>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">City</label>
                        <input name="city" type="text" id="input-city" class="form-control" placeholder="City" value="<?php echo $_SESSION['city'] ?>"  required>
                      </div>
                    </div>
                  </div>
                </div>
                </div>

                <hr class="my-4" />
                <!-- Address --><div class="pl-lg-4 pr-lg-4">
                <h6 class="heading-small text-muted mb-4">Authentication</h6>
                
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-current-password">Current Password</label>
                        <input name="password" id="input-current-password" class="form-control" placeholder="Current Password" type="password">
                      </div>
                    </div>
                  
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-new-password">New Password</label>
                        <input name="password_1" id="input-new-password" class="form-control" placeholder="New Password" type="password">
                      </div>
                    </div>
                  
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-confirm-new-password">Confirm New Password</label>
                        <input name="password_2" type="password" id="input-confirm-new-password" class="form-control" placeholder="Confirm New Password">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />

                <div class="row align-items-center">
                  <div class="col-md-9"></div>
                  <button type="submit" name="edit_profile" class="btn btn-primary col-2 mb-3">Edit Profile</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>




                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
</body>
</html>
