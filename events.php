
  
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
            <h1 class="shadow"><center>ALUMNI EVENTS</center></h1>
            <hr>
        <div class="row">

         

          <div class="col-lg-6 col-md-6 mb-4 pl-4">
            <div class="card " style="height: 500px;">
              <a href="#"><img class="card-img-top" src="images/school_state.jpg" height="300px" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <h3>Class of 87/89 school briefing</h3>
                </h4>
               <p>School Director Josephat Mwaura briefs class of 87/89 delegation on the state of the school when they presented ksh.500,000 towards the SBC 2021 fundraising drive</p>
              </div>
   
            </div>
          </div>

         
          <div class="col-lg-6 col-md-6 mb-4 pr-4">
            <div class="card" style="height: 500px;">
              <a href="#"><img class="card-img-top" src="images/donation_2.jpg"  height="300px" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <h3>Class of 1996 presents bleach donation</h3>
                </h4>
               <p>Class of 1996  presenting their bleach donation to old starehian society vice chairperson mr.Harry Ndafa
                  .OSS then presented the bleach to the school director Mr.Josephat Mwaura</p>
            </div>
          </div>
        </div>
        </div>
    <div class="row">
          <div class="col-lg-6 col-md-6 mb-4 pl-4">
            <div class="card "style="height: 500px;">
              <a href="#"><img class="card-img-top" src="images/oss_1.jpg"  height="300px" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <h3>Class of 87/89 Donates Ksh.500,000</h3>
                </h4>
                <p> Starehe class of 87/89 chairman mr.Noah Meely Musungu and some members of the class group presenting
                  the initial cheque of ksh.500,000 to the old starehian society chairperson Mr.Raymond Rono
                  .OSS the presents the cheque to the school director Mr.Josephat Mwaura
                </p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6 mb-4 pr-4">
            <div class="card "style="height: 500px;">
              <a href="#"><img class="card-img-top" src="images/sheikh_cup2.jpg"   height="300px" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <h3>Upcoming Sheikh Cup</h3>
                </h4>
               <p>Its here wit us again.... Sheikh Cup /Griffins Memorial day/OSS family reunion day.... next sunday 30th January 2021. Spread the word..Bring your families</day></again></p>
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
