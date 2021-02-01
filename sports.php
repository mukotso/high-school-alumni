
  
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
            <h1 class="shadow"><center>SPORTS</center></h1>
            <hr>
        <div class="row">

         

          <div class="col-lg-6 col-md-6 mb-4 pl-4">
            <div class="card " style="height: 500px;">
              <a href="#"><img class="card-img-top" src="images/nationalsports.jpg" height="300px" alt=""></a>
              <div class="card-body">
              <h4 class="card-title">
                  <h3>Footbal Under 16 team Preparing for national finals games</h3>
                </h4>
               <p>The resumption of nationwide sports make it possible for our under 16 footbal team to participate in the upcoming national finals</p>
              </div>
   
            </div>
          </div>

         
          <div class="col-lg-6 col-md-6 mb-4 pr-4">
            <div class="card" style="height: 500px;">
              <a href="#"><img class="card-img-top" src="images/sports.jpg"  height="300px" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <h3>Table tennis Championship (2019/2020)</h3>
                </h4>
                <p>Table tennis team wins East African Competition (2019/2020)
               The Shakers won all of their three matches in a subjuniour group in the seventh East African games, Tbale tennis Championship at st.pauls High School Kigali</p>
            </div>
          </div>
        </div>
        </div>
    <div class="row">
          <div class="col-lg-6 col-md-6 mb-4 pl-4">
            <div class="card "style="height: 500px;">
              <a href="#"><img class="card-img-top" src="images/St-Anthony.jpeg" height="300px" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <h3>Footbal Club Friendlies</h3>
                </h4>
                <p>The school team coach Mr.Edwin Simatwa talking to the boys during the half time break in the last weekend friendly game with kCB club at Kasarani Annex</p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6 mb-4 pr-4">
            <div class="card "style="height: 500px;">
              <a href="#"><img class="card-img-top" src="images/backe.png"   height="300px" alt="BASKBALL"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <h3>Six Students Earns USA College Basketball Scholarship</h3>
                </h4>
               <p>
                 six basketball players offered scholarships to the United States after successfully trials at Umoja  two ,Basketball court , Nairobi om Monday by American coach and scout Robert Lihalakha  
               </p>
            </div>
          </div>
    </div>
    <div class="col-lg-12 container-fluid">
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
