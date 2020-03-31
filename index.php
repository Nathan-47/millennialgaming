<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "games";               

// This below is to create connection
$dbc= mysqli_connect($servername, $username, $password, $dbname);

// This below is to Check connection
if ($dbc->connect_error) {
    die("Database connection failed: " . $dbc->connect_error);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Millennial Gaming</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="css/style.css" type="text/css" rel="stylesheet">
    
<!--The link below allows connection between this webpage and google font.com, so that this webpage can use the font contained within it.-->
<link href="https://fonts.googleapis.com/css?family=Iceland" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
</head>
<body>

<!--Navbar Code-->
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
<div class="navbar-header">
    
<!--Title of the website-->
<a class="navbar-brand">millennial GAMING</a>
</div>
    
<ul class="nav navbar-nav">
    
<!--The hyperlink below allows for the home button on the webpage to once clicked take the user back to starting page when first loaded up-->
<li class=""><a href="http://localhost/">Home</a></li>
<li class=""><a href="#">|  Consoles</a></li>

<!--The active used is there to indicate to the user that what has been clicked on the webpage is now the active item or page which on the webapge will be highlighted by white or any owebsite another colour.-->
<li class="active"><a href="#">|  Games</a></li>
<li class=""><a href="#">|  Gaming Accessories</a></li>
</ul>

<!--Search bar-->
<!--Navbar left code tells the code below itself to stick to the left of the navbar and not move anywhere else on the navbar-->
<form class="navbar-form navbar-left" action="/action_page.php">
<div class="input-group">
<input type="text" class="form-control" placeholder="Search" name="search">
<div class="input-group-btn">
<button class="btn btn-default" type="submit">
<i class="glyphicon glyphicon-search"></i>
</button>
</div>
</div>
</form>
      
 <!--Simialr to the navbar left, navbar right code causes code underneath to favor the right side of the navbar and stay there-->     
<ul class="nav navbar-nav navbar-right">
    
<!--Sign up code and icon-->
<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    
<!--Basket code and icon-->
<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
</ul>
</div>
</nav>

<br>
<br>

<!--Consoles sections-->
<div class="container">
<div class="col-sm-12">
<ul class="nav nav-tabs nav-justified">
<li><a href="#">Xbox One</a></li>
<li class="active"><a href="">Playstation 4</a></li>
<li><a href="">Nintendo Switch</a></li>
<li><a href="">PC - Steam</a></li>
</ul>
</div>
</div>
    
    
<div class="jumbotron text-center">
<h1>Playstation 4 Games</h1>
<p>Want deals on playstion 4 games then you're at the right place. Popular games ranging from £20 to £30 never done before</p> 
</div>
  
<div class="container">
<div class="row">
<div class="col-sm-3">

<!--The code below is a hyperlink to the overview page which is a mother page to all of the games on the webpage. Adding the ID=1 directs it straight to the game that is under the number 1 within the sql database. This has been done for all of the games on the site.-->
<a href="overview.php?ID=1"><img src="images/cover-fifa18.png" height="300px" width="250px">
<h3>Fifa 18</h3>     
</a>
<p>£30.00</p>
</div>
      
<div class="col-sm-3">
<a href="overview.php?ID=2"><img src="images/cover-nba2k18.jpg" height="300px" width="250px">
<h3>NBA2K18</h3>
</a>
<p>£28.00</p>
</div>
      
<div class="col-sm-3">
<a href="overview.php?ID=3"><img src="images/cover-injustice2.jpg"  height="300px" width="250px" alt="Fifa 18">
<h3>Injustice 2</h3> 
</a>
<p>£26.00</p>
</div>
      
<div class="col-sm-3">
<a href="overview.php?ID=4"><img src="images/cover-hzd.jpg" height="300px" width="250px">
<h3>Horizon Zero Dawn</h3>    
</a>
<p>£28.00</p>
</div>
  
<br>
<br>
    
<div class="col-sm-3">
<a href="overview.php?ID=5"><img src="images/cover-unch4.jpg" height="300px" width="250px">
<h3>Uncharted 4</h3>    
</a>
<p>£26.00</p>
</div>
         
<div class="col-sm-3">
<a href="overview.php?ID=6"><img src="images/cover-bf1.jpg" height="300px" width="250px">
<h3>Battlefield 1</h3>  
</a>
<p>£30.00</p>
</div>
         
<div class="col-sm-3">
<a href="overview.php?ID=7"><img src="images/cover-codww2.jpg" height="300px" width="250px">
<h3>Call Of Duty: World War II</h3> 
</a>
<p>£30.00</p>
</div>
         
<div class="col-sm-3">
<a href="overview.php?ID=8"><img src="images/cover-doom.jpg" height="300px" width="250px">
<h3>Doom(2016)</h3>  
</a>
<p>£22.00</p>
</div>
      
<br>
<br>

<div class="col-sm-3">
<a href="overview.php?ID=9"><img src="images/cover-gtav.jpg" height="300px" width="250px">
<h3>Grand Theft Auto V</h3>  
</a>
<p>£26.00</p>
</div>
      
<div class="col-sm-3">
<a href="overview.php?ID=10"><img src="images/cover-witch3.jpg" height="300px" width="250px">
<h3>Witcher 3 : The Wild Hunt</h3>  
</a>
<p>£21.00</p>
</div>
      
<div class="col-sm-3">
<a href="overview.php?ID=11"><img src="images/cover-ffxv.jpg" height="300px" width="250px">
<h3>Final Fantasy : XV</h3>  
</a>
<p>£18.00</p>
</div>
      
<div class="col-sm-3">
<a href="overview.php?ID=12"><img src="images/cover-acorigins.jpg" height="300px" width="250px">
<h3>Assassins Creed : Origins</h3>  
</a>
<p>£27.00</p>
</div>
</div>
</div>

<!--Footer-->
<div class="footer">
Copyright &copy; MillennialGaming.co.uk
    
<br>
<br>
<!--Twitter social-->
<a class="btn btn-social-icon btn-twitter">
<span class="fa fa-twitter" style="font-size:22px"></span>
</a>

<!--Facebook social-->
<a class="btn btn-social-icon btn-facebook">
<span class="fa fa-facebook" style="font-size:22px"></span>
</a>

<!--Instagram social-->
<a class="btn btn-social-icon btn-instagram">
<span class="fa fa-instagram" style="font-size:22px"></span>
</a>

<!--google plus social-->
<a class="btn btn-social-icon btn-google-plus">
<span class="fa fa-google-plus" style="font-size:22px"></span>
</a>
    
<!--reddit social-->
<a class="btn btn-social-icon btn-reddit">
<span class="fa fa-reddit" style="font-size:22px"></span>
</a>
      
<br>
<br>
      
<!--visa payment logo-->   
<span class="fa fa-cc-visa" style="font-size:42px"></span>

<!--mastercard payment logo-->
<span class="fa fa-cc-mastercard" style="font-size:42px"></span>

<!--american express payment logo-->
<span class="fa fa-cc-amex" style="font-size:42px"></span>
</div>
</body>
</html>