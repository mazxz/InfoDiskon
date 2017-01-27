<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
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
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br><br>
<div id="contact" class="container-fluid bg-grey">
  <h2 style="padding-left: 290px">CONTACT</h2>
  <div class="row">
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-primary" type="submit"><a href="index.php" style="color: white; text-decoration: none">Send</a></button>
        </div>
      </div>
    </div>
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
    </div>
  </div>
</div>

<div class="container">
  <div class="col-sm-8">
  <div class="maps" style="padding-left: 40%; width:500px">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4661034058554!2d106.77922471397906!3d-6.202077395510145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6dcc7d2c4ad%3A0x209cb1eef39be168!2sUniversitas+Bina+Nusantara%2C+Kampus+Anggrek!5e0!3m2!1sid!2sid!4v1480574584137" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</div>
</div>

<br>

<footer class="container-fluid text-center " style="background-color: silver">  
  
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