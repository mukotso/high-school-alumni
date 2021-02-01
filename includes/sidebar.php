

    <aside id="left-panel" class="left-panel stylenav">
        
           
            </style>

            <style>

                .navbar-fixed-left {
                    position: fixed-top;
                
                }
                .active{
                    color: red;
                }
                .shadow{
                color: white;
                text-shadow: 1px 1px 2px grey, 0 0 25px blue, 0 0 5px darkblue ;
                font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            }
            
            body{
                font-family: Verdana, Geneva, Tahoma, sans-serif;
            }
            .nav-link{
                font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            }
            #left-panel{
            background-color: #784920;
           }
           .stylenav{
            background-color: #784920;
           }
            </style>
            
        <nav class="navbar navbar-expand-sm  navbar-fixed-left">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button> 
                <a class="navbar-brand" href="dashboard.php">JOBO ALUMNI | </a>
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
<?php
                    $domain = $_SERVER['HTTP_HOST'];
                    $url = 'http://' . $domain .'/alumni_website/dashboard.php';
                    $geturl= 'http://' . $domain . $_SERVER['REQUEST_URI'];
                    if($url===$geturl){
                    echo'<li class="nav-item active">
                       <a  class="nav-link"  href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>';
                    }
                    else{
                        echo'<li class="nav-item">
                        <a  class="nav-link"  href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                 </li>';
                    }

                    $url = 'http://' . $domain .'/alumni_website/projects.php';
                    if($url===$geturl){
                    echo'<li class="nav-item active">
                       <a  class="nav-link"  href="projects.php"> <i class="menu-icon fa fa-dashboard"></i>Alumni Projects </a>
                </li>';
                    }
                    else{
                        echo'<li class="nav-item">
                        <a  class="nav-link"  href="projects.php"> <i class="menu-icon fa fa-dashboard"></i>Alumni Projects </a>
                 </li>';
                    }

                    $url = 'http://' . $domain .'/alumni_website/events.php';
                    if($url===$geturl){
                    echo'<li class="nav-item active">
                       <a  class="nav-link"  href="events.php"> <i class="menu-icon fa fa-dashboard"></i>Alumni Events </a>
                </li>';
                    }
                    else{
                        echo'<li class="nav-item">
                        <a  class="nav-link"  href="events.php"> <i class="menu-icon fa fa-dashboard"></i>Alumni Events </a>
                 </li>';
                    }

                    $url = 'http://' . $domain .'/alumni_website/alumni_heads.php';
                    if($url===$geturl){
                    echo'<li class="nav-item active">
                       <a  class="nav-link"  href="alumni_heads.php"> <i class="menu-icon fa fa-dashboard"></i>Alumni Heads </a>
                </li>';
                    }
                    else{
                        echo'<li class="nav-item">
                        <a  class="nav-link"  href="alumni_heads.php"> <i class="menu-icon fa fa-dashboard"></i>Alumni Heads </a>
                 </li>';
                    }

                    $url = 'http://' . $domain .'/alumni_website/sports.php';
                    if($url===$geturl){
                    echo'<li class="nav-item active">
                       <a  class="nav-link"  href="sports.php"> <i class="menu-icon fa fa-dashboard"></i>Sports </a>
                </li>';
                    }
                    else{
                        echo'<li class="nav-item">
                        <a  class="nav-link"  href="sports.php"> <i class="menu-icon fa fa-dashboard"></i>Sports </a>
                 </li>';
                    }

                    $url = 'http://' . $domain .'/alumni_website/school_management.php';
                    if($url===$geturl){
                    echo'<li class="nav-item active">
                       <a  class="nav-link"  href="school_management.php"> <i class="menu-icon fa fa-dashboard"></i>School Management </a>
                </li>';
                    }
                    else{
                        echo'<li class="nav-item">
                        <a  class="nav-link"  href="school_management.php"> <i class="menu-icon fa fa-dashboard"></i>School Management </a>
                 </li>';
                    }
                    ?>
                    
     

                    



                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>