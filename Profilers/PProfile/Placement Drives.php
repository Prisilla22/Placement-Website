<?php
  session_start();
  if(($_SESSION["pusername"])){
    
  }
   else {
	   header("location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--favicon-->
        <link rel="shortcut icon" href="favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Placement - Preferences</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
    Visual Admin Template
    http://www.templatemo.com/preview/templatemo_455_visual_admin
    -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
<?php
		  $Welcome = "Bomjour!!!";
          echo "<h1>" . $Welcome . "<br>". $_SESSION['pusername']. "</h1>";
		  ?>
        </header>
        <div class="profile-photo-container">
          <img src="images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">
          <div class="profile-photo-overlay"></div>
        </div>
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
        <nav class="templatemo-left-nav">
          <ul>
            <li><a href="login.php"><i class="fa fa-home fa-fw"></i>Dashboard</a></li> 
            <li><a href="Placement Drives.php" class="active"><i class="fa fa-home fa-fw"></i>Placement Drives</a></li>          
            <li><a href="manage-users.php"><i class="fa fa-users fa-fw"></i>View Students</a></li>
            <li><a href="queries.php"><i class="fa fa-users fa-fw"></i>Queries</a></li>
            <li><a href="Students Eligibility.php"><i class="fa fa-sliders fa-fw"></i>Students Eligibility Status</a></li>
            <li><a href="logout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>
        </nav>
      </div>
      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                  <li><a href="../../Homepage/indes.php">Home ICEM</a></li>
                <li><a href="">Drives Home</a></li>
                <li><a href="Notif.php">Notifications</a></li>
                <li><a href="Change Password.php">Change Password</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
           <div class="templatemo-flex-row flex-content-row">
            <div class="col-1">              
              <div class="templatemo-content-widget orangee-bg">
                <i class="fa fa-times"></i>                
                <div class="media">
                  <div class="media-left">
                    <a href="Placement Drives/addpdrive.php">
                      <img class="media-object img-circle" src="images/sunset11.png" alt="Sunset" width="100px" height="100px">
                    </a>
                  </div>
                  <div class="media-body">
                    <h2 class="media-heading text-uppercase">Add Placement Drives</h2>
                    <p>Add New/Existing Company To the Current Drive List</p>  
                  </div>        
                </div>                
              </div> 
				<div class="templatemo-content-widget orangeee-bg">
                <i class="fa fa-times"></i>                
                <div class="media">
                  <div class="media-left">
                   <a href="Placement Drives/update.php">
                      <img class="media-object img-circle" src="images/UD.png" alt="Sunset" width="100px" height="100px">
                   </a>
                  </div>
                  <div class="media-body">
				  
                    <h2 class="media-heading text-uppercase">Update Drive Details</h2><p>Update the Details of Drives happened and the Status of Students </p>				
                  </div>        
                </div>                
              </div> 
				<div class="templatemo-content-widget orangeeee-bg">
                <i class="fa fa-times"></i>                
                <div class="media">
                  <div class="media-left">
                    <a href="Placement Drives/Companydetails.php">
                      <img class="media-object img-circle" src="images/sunset33.jpg" alt="Sunset" width="100px" height="100px">
                    </a>
                  </div>
                  <div class="media-body">
                    <h2 class="media-heading text-uppercase">Company Details</h2>
                    <p>View the Eligibility Criteria of Companies Visited to Our Campus</p>  
                  </div>        
                </div>                
              </div> 			  
				<div class="templatemo-content-widget oranggge-bg">
                <i class="fa fa-times"></i>                
                <div class="media">
                  <div class="media-left">
                    <a href="Placement Drives/drivehome.php">
                      <img class="media-object img-circle" src="images/DD.jpg" alt="Sunset" width="100px" height="100px">
                    </a>
                  </div>
                  <div class="media-body">
                    <h2 class="media-heading text-uppercase">Drive Details</h2>
                    <p>Get the Whole Information of the Happened Drives</p>  
                  </div>        
                </div>                
              </div>        			  
              <div class="templatemo-content-widget orangge-bg">
                <i class="fa fa-times"></i>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object img-circle" src="images/UI.png" alt="Sunset" width="100px" height="100px">
                    </a>
                  </div>
                  <div class="media-body">
                    <h2 class="media-heading text-uppercase">Upload Image to Gallery</h2>
                    <p>Update the Image To ICEM Gallery</p>  
                  </div>
                </div>                
              </div>            
            </div>
          </div>
          <footer class="text-right">
            <p>Copyright &copy; 2024 ICEM
            | </p>
          </footer>       
        </div>
      </div>
    </div>

    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>        <!-- jQuery -->
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>  <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>        <!-- Templatemo Script -->
  </body>
</html>
