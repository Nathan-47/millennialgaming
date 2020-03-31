<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "games";

// This below is to create connection
$dbc = mysqli_connect($servername, $username, $password, $dbname);

// This below is to Check connection
if ($dbc->connect_error) {
die("Database connection failed: " . $dbc->connect_error);
}
?>

<?php
// In the code below reads the ID that has been selected from the main page and import the information onto this page. An example is with my databse the 'gameID' Fifa 18 has the ID number of 1 therefore when Fifa 18 is chosen by the user at the top of the url bar it will have this pages name which is overview.php and following that the ID number of 1. 
if(isset($_GET['ID'])); 
$sql = "SELECT * FROM ps4";
$result = mysqli_query($dbc, $sql) or die("Bad Create: $sql");

// Using this allows it to be much easier to create a game information page using only one page rather than having to make multiple. 
$id = $_GET['ID'];

// The code below selects everything from the database and with the 'WHERE gameID=id' tag this means that when different ID numbers are selected they are to be shown on different pages but if there is no ID number showing on the URL then the page wont load thus not existing.  
$sql = "SELECT * FROM ps4 WHERE gameID='$id'";
$result = mysqli_query($dbc, $sql) or die("Bad sql: $sql");
$row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html>
<head>
<title>Index.php</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="css/style.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Iceland" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   
</head>
<body>

<!--Navbar Code-->
<nav class="navbar navbar-inverse navbar">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand">Millennial GAMING</a>
</div>
    
<ul class="nav navbar-nav">
<li class=""><a href="http://localhost/">Home</a></li>
<li class=""><a href="#">|  Consoles</a></li>
<li class="active"><a href="#">|  Games</a></li>
<li class=""><a href="#">|  Gaming Accessories</a></li>
</ul>
    
<!--Search Bar Code-->
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
      
<ul class="nav navbar-nav navbar-right">
<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
</ul>
</div>
</nav>
    
  
<div class="container">
<div class="row">
<div class="col-sm-8">
    
<!--Carousel Code-->
<!--I have set the data interval to 0 so that the carousel wil stay in place when the user loads onto the overview page and not just keep zipping through the images and the video.-->
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
 <ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>
<li data-target="#myCarousel" data-slide-to="3"></li>
<li data-target="#myCarousel" data-slide-to="4"></li>
</ol>
    
<div class="carousel-inner">
<div class="item active">
<video width="100%" height="520px" controls>
<source src='<?php echo $row['trailer'];?>' type="video/mp4">
</video>
</div>
     
<!--The php used makes it easier insert photos onto the webapage.-->
<div class="item">
<img src='<?php echo $row['photo#1'];?>' alt="photo1" style="height:500px" "width:20px">
</div>

<div class="item">
<img src='<?php echo $row['photo#2'];?>' alt="photo2" style="height:500px" "width:20px">
</div>
   
<div class="item">
<img src='<?php echo $row['photo#3'];?>'alt="photo3" style="height:500px" "width:20px">
</div>
     
<div class="item">
<img src='<?php echo $row['photo#4'];?>'alt="photo4" style="height:500px" "width:20px">
</div>     
</div>
    
<!--Carousel Left control-->
<a class="prev" href="#myCarousel" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
<span class="sr-only"></span>
</a>
    
<!--Carousel Right carousel-->
<a class="next" href="#myCarousel" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
<span class="sr-only"></span>
</a>
    
</div>
</div>

    
<div class="col-sm-4">
<img src='<?php echo $row['platformlogo'];?>' alt="console-logo" style="height:100px" "width:20px">
    
<br>
<hr>

<h1><?php echo $row['name'];?></h1>
<h2>£<?php echo $row['price'];?></h2>
<h5>In stock</h5>

<hr>
<br>

<p>Select Quantity</p>
    
<form>
<div class="form-group">
<select class="form-control" id="sell">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
</select>

<br>

</div>
</form>

<!--Add to Cart button-->
<button type="button" class="button btn-lg">Add To Cart</button>
</div>
</div>
    
<hr>
</div>
<br>
<br>
<br>
<br>
    
<div class="container">
<div class="col-sm-3">
<!--This part of the webpage shows the depth of information within all of the differnt games.-->
<h3><p>PUBLISHER</p></h3>

<br>

<h3><p><?php echo $row['publisher'];?></p></h3>
</div>
    
<div class="col-sm-3">
<h3><p>DEVELOPER</p></h3>

<br>

<h3><p><?php echo $row['developer'];?></p></h3>
</div>
    
<div class="col-sm-6">
<center><img src='<?php echo $row['agerating'];?>' alt="agerating-logo" style="height:240px" "width:200px"></center>
</div>

<div class="col-sm-3">
<h3><p>GENRE</p></h3>

<br>

<h3><p><?php echo $row['genre'];?></p></h3>
</div>

<div class="col-sm-3">
<h3><p>RELEASE DATE</p></h3>

<br>

<h3><p><?php echo $row['Release Date'];?></p></h3>
</div>
</div>

<br>
<br>
<br>
<hr>

    
<div class="container">
<div class="row">
<div class="col-sm-12">

<!--This will extract the description tag of each game in my sql databse and show them on the webpage. The description shows whats the games about letting customers understand what there buyinh before or after watching gameplay-->
<h1>Game Description</h1>   
<h4><p><?php echo $row['description'];?></p></h4>
<br>
<h4><p><?php echo $row['description2'];?></p></h4>
<br>
<h4><p><?php echo $row['description3'];?></p></h4>
    
<br>
    
</div>
</div>
</div>
    
<br>
<br>
<hr>
    
<div class="container">
<div class="row">
<div class="col-lg-10">  
            
<form>
    
<!--Named this form-group1 due to the fact that in the css file if i used form-group and entered a style that suited this text box then it would affect the search bar textbox thus being out of the place and buggy casuing the website to not function.-->
<div class="form-group1">
<label for="comment">Go ahead! give your feeback on your experience with the game come on don't be shy.</label>

<!--The rows allowed for the form to be bigger length wise without using css.-->
<textarea class="form-control" rows="20" id="comment"></textarea>
</div>
</form>
    
<br>
    
<button type="button" class="button btn-lg">Submit</button>
</div>
</div>
</div>
    
<br>
<hr>
    
<div class="container">
<div class="row">
<center><h1>Popular Picks</h1></center>
<div class="col-sm-12">
    
<!--The difference with this carousel and the other is that this one dosen't have an interval timer. I have chosen to do this because with the top caousel i want the user to take thir time and look at the imagery and trailer with time. Whereas with this carousel i want it to flick through the games showing the user a mixture of games.-->
<div id="imageCarousel" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
<div class="item active">
<div class="row">
              
<div class="col-sm-3">
<a href="overview.php?ID=3"><img src="images/cover-injustice2.jpg" alt="Injustice 2" class="img-responsive"></a>
<h3>Injustice 2</h3>
<p>£26.00</p>
</div>

<div class="col-sm-3">
<a href="overview.php?ID=1"> <img src="images/cover-fifa18.png" alt="Fifa 18" class="img-responsive"></a>
<h3>Fifa 18</h3>
<p>£31.00</p>
</div> 
              
<div class="col-sm-3">
<a href="overview.php?ID=7"><img src="images/cover-codww2.jpg" alt="Call Of Duty: World War II" class="img-responsive"></a>
<h3>Call Of Duty World War II</h3>
<P>£32.00</P>
</div>
    
<div class="col-sm-3">
<a href="overview.php?ID=9"><img src="images/cover-gtav.jpg" alt="Grand Theft Auto V" class="img-responsive"></a>
<h3>Grand Theft Auto V</h3>
<p>£26.00</p>
</div>
</div>
</div>
          
<div class="item">
<div class="row">
<div class="col-sm-3">
<a href="overview.php?ID=12"><img src="images/cover-acorigins.jpg" alt="Assassins Creed: Origins" class="img-responsive"></a>
<h3>Assassins Creed: Origins</h3>
<p>£27.00</p>
</div>
    
<div class="col-sm-3">
<a href="overview.php?ID=2"><img src="images/cover-nba2k18.jpg" alt="NBA2K18" class="img-responsive"></a>
<h3>NBA2K18</h3>
<p>£28.00</p>
</div> 
              
<div class="col-sm-3">
<a href="overview.php?ID=4"><img src="images/cover-hzd.jpg" alt="Horizon Zero Dawn" class="img-responsive"></a>
<h3>Horizon Zero Dawn</h3>
<p>£28.00</p>
</div>
        
<div class="col-sm-3">
<a href="overview.php?ID=5"><img src="images/cover-unch4.jpg" alt="Uncharted 4" class="img-responsive"></a>
<h3>Uncharted 4</h3>
<p>£26.00</p>
</div>
</div>
</div>
     
<a class="prev1" href="#myCarousel" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
<span class="sr-only"></span>
</a>
<a class="next1" href="#myCarousel" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
<span class="sr-only"></span>
</a>
    
</div>
</div>
</div>
</div>

<br>
<br>

</div>
    
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