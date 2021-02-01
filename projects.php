
  
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


    
    <style>
      h3{
        color: yellowgreen;
      }
      .card{
        border-radius: 10%;
      }
     
      </style>
</head>

<body>




    <?php include_once('includes/sidebar.php');?>

    
<div id="right-panel" class="right-panel">

        <?php include_once('includes/header.php');?>
        <!-- Header-->

        <hr>
            <h1 class="shadow"><center>ALUMNI PROJECTS</center></h1>
            <hr>
        
    <div class="row">

    <div class="col-lg-6 col-md-6 mb-4 pl-4">
            <div class="card "style="height: 500px;">
              <a href="#"><img class="card-img-top" src="images/project5.jpg"  height="300px" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <h3>Sagana Poultry Farm</h3>
                </h4>
             <p> The Poultry project is solicitizing assistance for a period for a period of 4 months .Thereafter it will be in a position to finance its operation from the proceeds of the farm</p>   
            </div>
          </div>
          </div>

         
          
          <div class="col-lg-6 col-md-6 mb-4 pr-4">
            <div class="card "style="height: 500px;">
              <a href="#"><img class="card-img-top" src="images/project2.jpg"   height="300px" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <h3>The Nyando Green House Project</h3>
                </h4>
               <p> The association has started production of sukuma wiki, raising hopes that the popular vegetable  will become available throught the year at affordable prices to the community of Nyando</p>
            </div>
          </div>
    </div>
    </div>
       

        <div class="row">
          
        <div class="col-lg-6 col-md-6 mb-4 pl-4">
            <div class="card "style="height: 500px;">
              <a href="#"><img class="card-img-top" src="images/agricultural-images-organic-farming.jpg"  height="300px" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <h3>Kambiti Farm</h3>
                </h4>
                <p>Ongoing farm works in Kambiti in preparation of the new seasons..There is harvesting of the french beans</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mb-4 pr-4">
            <div class="card "style="height: 500px;">
              <a href="#"><img class="card-img-top" src="images/project6.jpg"  height="300px" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <h3>The Marigiti Cattle Farm</h3>
                </h4>
                <p> The association has a cattle farm in marigiti as a way of educating the communities on how to do small-scale farming, which can generate high revenues and provide enough food for the community throught the year</p>
           
            </div>
          </div>
          </div>
          <div class="col-lg-12">
    <?php include_once('includes/footer.php'); ?>
    </div>
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    

   
    
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
