<?php 
  
session_start();

$isLogin = false;
if ( !isset($_SESSION['username']) ) {
    //header('location:login.php?errMsg=Silahkan Login Dahulu!'); 
    $isLogin = false;

} 
else 
{   
    $username = $_SESSION['username']; 
    $isLogin = true;
}
include 'controllers/connect.php';
$query = mysql_query("SELECT * FROM tbl_master_admin WHERE username = '$username'");
$data = mysql_fetch_array($query);

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Holy Diskon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="Assets/logo.png">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      
      height: 100px;
    }
    .collapse #myNavbar .nav{
      color: black;
    }
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color:  silver;
      
    }
    
  .carousel-inner img {
    padding-top: 50px;
      width: 100%; /* Set width to 100% */
      margin: auto;
      
      max-height: 295px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 1600px) {
    .carousel-caption {
      display: none;
      
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-collapse collapse navbar-fixed-top" style="background-color: silver;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="index.php"><img src="Assets/logo.png"  width="60px" > </a>

   </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        </ul>
        
      <?php 

      if ($isLogin) 
      {
        echo '</ul>';
          echo '<ul class="nav navbar-nav navbar-right">';
            echo '<li><a href="admin/index.php"><span class="glyphicon glyphicon-user"></span> Go to Dashboard</a></li>';
          echo '</ul>';

      }
      else
      {
        echo '</ul>';
          echo '<ul class="nav navbar-nav navbar-right">';
            echo '<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>';
          echo '</ul>';
        echo '</ul>';
          echo '<ul class="nav navbar-nav navbar-right">';
            echo '<li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>';
          echo '</ul>';
      }

  ?>
      </div>
  </div>
</div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
       <li data-target="#myCarousel" data-slide-to="2"></li>
       <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
      <a href="http://www.lazada.co.id/infinix-hot-s/" target="_blank">
        <img src="http://id-live-01.slatic.net/cms/banners2016/112016/hot-s-cb_.jpg" alt="Image">
        <div class="carousel-caption">
         
        </div>
      </a>
        
      </div>

      <div class="item">
      <a href="https://tiket.tokopedia.com/travel/promo-gajian/?utm_source=desktop&utm_campaign=promo+urgent+tiket&utm_medium=sliderbanner" target="_blank">
         <img src="https://ecs7.tokopedia.net/img/banner/2016/11/24/5977291/5977291_ca64c1f9-0c1a-4480-b976-874cb4f82777.jpg.webp" alt="Image">
        <div class="carousel-caption">
         
        </div>
      </a>
       
      </div>
      <div class="item">
      <a href="https://mybigwish.blibli.com/" target="_blank">
        <img src="https://www.static-src.com/siva/asset/11_2016/MBW-carousel-1370x460.jpg" alt="Image">
        <div class="carousel-caption">
          
         
        </div>
      </div>
      </a>
        
       <div class="item">
      <a href="https://www.blibli.com/promosi/kamis-ganteng" target="_blank"  >
        <img src="https://www.static-src.com/siva/asset/11_2016/MAIN-1-DES.jpg" alt="Image">
        <div class="carousel-caption">
        </div>
      </div>
      </a>

    </div>

    


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  <BR>
<div class="container text-center">
  <h1 style="font-style:bold">HOT LIST</h1>
  <br>  <br>

      <?php 
          include 'controllers/connect.php';
          $query = "SELECT * FROM tbl_transaction_promo GROUP BY lastUpdate desc";
          $execute = mysql_query($query) or trigger_error(mysql_error().$query);

          while ($data= mysql_fetch_array($execute))
          {
           
            echo"<div class='row'>";
              echo"<div class='col-md-12'>";
                echo"<div class='thumbnail'>";
                    echo"<img src='Assets/img/promo/$data[promo_image]' style='width:100%'>";
                    echo"<div class='caption'>";
                      echo"<h2>$data[promo_name] $data[merchant_name]</h2>";  
                        echo"<span>$data[promo_description]</span>";
                    echo"</div>";
                     echo"<a href='$data[promo_link]' target='_blank'><button type='button' class='btn btn-warning btn-m'><span class='glyphicon glyphicon-tag'></span> Get This Promo!&nbsp&nbsp</button></a>";
                echo"</div>";
              echo"</div>";
             
              echo"</div>";

          }

      ?>
      <div class="table-responsive">
        <table class="table">
        
        </table>
      </div>
</div>

<div class="container text-center">
  <h1 style="font-style:bold">OUR PARTNERS</h1>
  <br>  <br>
  <div class="row">
      <div class="col-md-4">
        <div class="thumbnail">
          
            <img src="Assets/logo-blibli.png" alt="Lights" style="width:73%">
          
        </div>
      </div>
       <div class="col-md-4">
        <div class="thumbnail">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwUOVaeUSwN3N-ArZJj74TQR1GApIZMAamKE-KZ5u5nWYK6iR7" alt="Lights" style="width:58%">
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
            <img src="Assets/logo-lazada.png" alt="Lights" style="width:100%">
          
        </div>
      </div>

  </div>
</div>
<br>

<footer class="container-fluid text-center ">  
  
  <div class="col-md-12">
      <h3 style="font-family: cursive;">Feedback</h3>
      <div class="feedback-area">
        <a href="feedback.php" class="btn btn-primary wide">Send Feedback</a>
          <p style="padding-top: 10px; font-family: cursive;"><img src="Assets/logo.png" width="50px">Copyright&copy Holy Diskon</p>
      </div>
     
  </div>
  
</footer>

</body>
</html>

