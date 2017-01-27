  <!DOCTYPE html>
<html>
<head>
  <title></title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    footer {
      background-color:  silver;
      
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
<form>
<div class="container" style="padding-left: 20%">
  <div class="col-md-8">
      <div class="well">
    <div class="form-group">
           <label for="email">Send Feedback</label> 
            <br>
          <textarea class="form-control" style="height: 300px"></textarea>
          <div class="btn btn-primary" style="margin-top: 7px" >
            <a href="index.php" style="color: white">Submit</a>
          </div>
    </div>
    </div>
  </div>
  </div>
  
    
</form>
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