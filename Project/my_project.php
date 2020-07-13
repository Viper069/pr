<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Online Food Oredering</title>
	<link rel="stylesheet" type="text/css" href="faisal.css">
</head>
<body>
	<div class="wrapper">
		<nav>
			<img src="logo.jpg" class ="img" alt="logo">	
			 <ul>
			 <li><a href="#">HOME</a></li>
			 <li><a href="#">ABOUT</a></li>
			 <li><a href="#">GALLERY</a></li>
			 <li><a href="#">BLOGS</a></li>
			 <li><a href="#">PAGES</a></li>
			 <li><a href="#">CONTACTS</a></li>

			 </ul>		
		</nav>
		<div class="section">
			<h1>We Try provide our best food on time</h1>

			<a href="#"><button class="btn-1">GET STARTED
			</button></a>
			<div class="features">
				<button><a href="Review/Review.html">Food Review</a></button>
				<button>Food cart</button>
				<button>Delivery Lis</button>

			</div>
		</div>
	</div>
	<showcase>
		<h1>POPULAR FOOD,FRUITS,DRINKS WE OFFER</h1>
		<div class="c">
			<div class="cs">
			<h3>Drinks</h3> 
			<img src="c.jpg" width="50%" alt="cs">
			<a href="Drinks/Drinks.html"><button class="apply">VIEW
			</button></a>
		</div>
			<div class="b">
			<h3>Pizza</h3> 
			<img src="b.jpg" width="50%" alt="b">
			<a href="Pizza/Pizza.html"><button class="apply">VIEW
			</button></a>
			</div>
			<div class="js">
			<h3>Fruits</h3> 
			<img src="j.jpg" width="50%" alt="js">
			<a href="Fruits/Fruits.html"><button class="apply">VIEW</button></a>
			</div>
			<div class="a">
			<h3>Burger</h3> 
			<img src="a.jpg" width="50%" alt="a">
			<a href="Burger/Burger.html"><button class="apply">VIEW</button></a>
				</div>
				<div class="ms">
			<h3>Chicken Item</h3> 
			<img src="ms.jpg" width="50%" alt="ms">
			<a href="Chicken/Chicken.html"><button class="apply">VIEW</button></a>	
		</div>
		</div>
	</showcase>
	<FOOTER>
		<p>Copyright &copy;2019;The Machine </p>
	</FOOTER></body>
</html>