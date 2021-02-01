
  
<!doctype html>
<html class="no-js" lang="en">
<head>
    
    <title>LRMS dashboard</title>
   

    <link rel="apple-touch-icon" href="apple-icon.png">
   

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>




    <?php include_once('includes/sidebar.php');
session_start();
    ?>

    
<div id="right-panel" class="right-panel">

        <?php include_once('includes/header.php');?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                        
                    </div>
                </div>
            </div>
           
        </div>

        <?php include_once('success_messages.php'); ?>
        <div class="content container mt-3">

            


         <div class="col-sm-6 col-lg-6">
                <div class="card text-white bg-info">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton4" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    
                                </div>
                            </div>
                        </div>
                        <?php 
                        $totalsubjects=213;
                        ?>
                        <h4 class="mb-0">
                        <h1 class="count"><?php  echo htmlentities($totalsubjects);?></h1>
                        </h4>
                        <h3 class="text-light">ACTIVE PROJECTS</h3>

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            <canvas id="widgetChart1"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-6">
                <div class="card text-white bg-info">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    
                                </div>
                            </div>
                        </div>
                        <?php
                        $totalteacher=10200;
                            ?>
                        <h4 class="mb-0">
                        <h1 class="count"><?php  echo htmlentities($totalteacher);?></h1>
                        </h4>
                        <h3 class="text-light">ACTIVE ALUMNI MEMBERS</h3>


                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart2"></canvas>
                        </div>

                    </div>
                    </div>
            </div>

                    <div class="col-sm-6 col-lg-6">
                <div class="card text-white bg-info">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    
                                </div>
                            </div>
                        </div>
                        <?php
                        $schools=38;
                            ?>
                        <h4 class="mb-0">
                        <h1 class="count"><?php  echo htmlentities($schools);?></h1>
                        </h4>
                        <h3 class="text-light">SPONSORED STUDENTS</h3>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart3"></canvas>
                        </div>

                    </div>
                    </div>
            </div>

                    <div class="col-sm-6 col-lg-6">
                <div class="card text-white bg-info">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    
                                </div>
                            </div>
                        </div>
                        <?php
                        $departments=14;
                            ?>
                        <h4 class="mb-0">
                        <h1 class="count"><?php  echo htmlentities($departments);?></h1>
                        </h4>
                        <h3 class="text-light bg-info">UPCOMING ALUMNI EVENTS</h3>
                        <div class="chart-wrapper px-0 " style="height:70px;" height="70">
                            <canvas id="widgetChart4"></canvas>
                        </div>

                    </div>

                </div>
 </div>
  

            
           
           

        </div> <!-- .content -->

       
        <?php //include_once('includes/footer.php'); ?> 
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
