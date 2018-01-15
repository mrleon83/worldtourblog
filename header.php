<?php
session_start();
$_SESSION["accesslevel"] = "viewer";
$page = $_GET['p'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cat &amp; Leon's World Tour</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="boostrap-lightbox.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Indie+Flower">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <script src="bootstrap-lightbox/bootstrap-lightbox.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <sciprt src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></sciprt>

<style>
#aboutus
{
  padding: 5px;
  text-align: justify;

}
#heading{
	text-align: center;
	font-family: 'Indie Flower', cursive;
	font-size: 6vw;
  background-color:  #801638;
  color: #fff;
}
#heading2{
  text-align: center;
  font-family: 'Indie Flower', cursive;
  font-size: 2vw;
  background-color:  #801638;
  color: #fff;
  border-top: 2px solid #fff;
  padding-top: 5px;
}
.text-center{
	text-align: center;
	border: 1px solid #000;
	font-family: 'Indie Flower', cursive;
}
.navleon, .navleon a
{
  /*background-color: #fff;*/
  color: #801638;
}
.navbar a:hover
{
  color: yellow;
}
#blog{
  border: 2px solid #666; 
  padding: 5px; 
  text-align: justify;
  font-family: 'Indie Flower', cursive;
}
#blogInner{
  border: 1px solid #666; 
  padding: 5px; 
  text-align: justify;
  font-family: 'Indie Flower', cursive;
}
#blogmenu{
  border: 2px solid #666; 
  padding: 5px; 
  text-align: justify;
  font-weight: bold;
}
.blogmenuinner{
  border: 1px solid #666; 
  padding: 5px; 
  text-align: justify;
}
#bloggy
{
cursor: pointer; text-align: center;
}

.card{
	border: none;
}

</style>

</head>
<body>

<nav class="navbar navbar-expand-md navleon">
  <a class="navbar-brand navleon" href="index.php">
    <img src="images/wtemot.jpg" alt="Cat and leon World tour logo" style="max-width: 50px;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <i class="fa fa-server" aria-hidden="true"></i>
  </button>
  
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="?p=home">Home |</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?p=about">About Us |</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?p=wherearewe">Where are Cat &amp; Leon? |</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="?p=itinerary">Itinerary |</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="?p=gallery">Gallery |</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="?p=messageboard">Message Board |</a>
      </li> 
      <?php
    if($_SESSION['user'] == "leon" || $_SESSION['user'] == "cat")
    {
    ?>     
         <li class="nav-item">
          <a class="nav-link" href="?p=login">Post Blog/Logout |</a>
        </li> 
    <?php
    }
    else{
    ?> 
       <li class="nav-item">
        <a class="nav-link" href="?p=login">Login |</a>
      </li> 
    <?php
    }
    ?>
    </ul>

  <?php

  if($_SESSION['user'] == "leon" || $_SESSION['user'] == "cat")
  {
?>

  <ul class="nav navbar-nav navbar-right">
      <li style="font-family: 'Indie Flower', cursive;">Logged In as  <?php echo $_SESSION["user"]; ?></li>
    </ul>
<?php
}
?>
  </div>  
</nav>


<div class="container-fluid">

  <div class="row" id="heading">
    <div class="col-md-12">
      <h1 id="heading"><a href="index.php" style="color: #fff">Cat &amp; Leon's World Tour</a></h1>
    </div>
  </div>