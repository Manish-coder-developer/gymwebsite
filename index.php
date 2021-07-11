<?php  

include 'conn.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"><meta name="viewport"
	content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Mega Menu</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	








</head>
<body>
<nav>
	<div class="logo">
		<img src="images/logo.jpg" class="limg">
	</div>
	
	<div class="menu" id="menus">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#f">contact</a></li>
			<li><a href="#">Product</a><i class="fa fa-caret-down p"></i>
<ul class="submenu1">

	<h2>Mobile</h2>
	<li><a href="#">Iphone</a></li>
	<li><a href="#">Samsung</a></li>
	<li><a href="#">Motrola<i class="fa fa-caret-right r"></i></a>
<ul class="submenu2">

	<h2>Television</h2>
	<li><a href="#">Sony</a></li>
	<li><a href="#">sansui<i class="fa fa-caret-right r"></i>
	</a>
<ul class="submenu4">

	<h2>Laptop</h2>
	<li><a href="#">Dell</a></li>
	<li><a href="#">Mac</a></li>
	<li><a href="#">HP</a></li>
		<li><a href="#">Redmi</a></li>
</ul>
	</li>
	<li><a href="#">Link1</a></li>
		<li><a href="#">Link1</a></li>
		

</ul>
	</li>
		<li><a href="#">Link1</a></li>
		<li><a href="#">Link1<i class="fa fa-caret-left l"></i>
			<ul class="submenu3"></a>

	<h2>Cookies</h2>
	<li><a href="#">Britania</a></li>
	<li><a href="#">Amul</a></li>
	<li><a href="#">Nestle</a></li>
		<li><a href="#">Cadbury</a></li>
		

</ul>
		</li>
		<li><a href="#">Xiaomi</a></li>

</ul>

			</li>
			<li><a href="#">services  &nbsp <i class="fa fa-caret-down p"></i></a>

<ul class="submenu5 service">

	<h2>Development</h2>
	<li><a href="#">Website Development</a></li>
	<li><a href="#">App Development<i class="fa fa-caret-left l4"></i></a>

<ul class="submenu6">

	
	<li><a href="#">Android App</a></li>
	<li><a href="#">Ios App</a>
</ul>
	</li>
	<li><a href="#">Database Management</a></li>
		<li><a href="#">Digital Marketing</a></li>
</ul>


			</li>
		</ul>
	</div>
	<div class="contact">
		<a href="tel:9326033562" title="Call us"><i class="fa fa-phone" style="color:grey"></i></a>
		<a href="#" title="Follow us on facebook"><i class="fa fa-facebook f"></i></a>
		<a href="#" title="contact us on Whatsapp"><i class="fa fa-whatsapp w"></i></a>
		<a href="#" title="Follow us on Instagram"><i class="fa fa-instagram i"></i></a>
		<a href="#" title="Follow us on Twitter"><i class="fa fa-twitter t"></i></a>
	</div> 
	<div class="icon" id="opennav">
	<a href="javascript:void(0);"  onclick="myfun()" ><i class="fa fa-bars"></i></a>
</div>
</nav>

<div class="container">
	<div class="slider">
		<img src="images/e.jpg">
<div class="atraction">
	<h2>Fitness is key to good Health</h2>
	<button>Start Todays only</button>
</div>
	</div>
	<div class="slider">
		<img src="images/b.jpg">
<div class="atraction">
	<h2>Fitness is key to good Health</h2>
	<button>Start Todays only</button>
</div>
	</div>
	<div class="slider">
		<img src="images/a.jpg">
<div class="atraction">
	<h2>Fitness is key to good Health</h2>
	<button>Start Todays only</button>
</div>
	</div>
	<div class="slider">
		<img src="images/c.jpg">
<div class="atraction">
	<h2 >Fitness is key to good Health</h2>
	<button >Start Todays only</button>
</div>
	</div>
	<div class="slider">
		<img src="images/d.jpg">
<div class="atraction">
	<h2 class="bmi">Health is Wealth</h2>
	<button><a href = "file:///C:/Users/user/Desktop/wed%20dev%20projects/bmicalculator.html" target="blank" >Check Bmi now</a></button>
</div>
	</div>
<button class="next" onclick="plusimage(1)">&#10095</button>
<button class="prev" onclick="plusimage(-1)">&#10094</button>

</div>
<hr>
<div class="marque">
		<p><marquee direction="right" >Exclusive Deals. This deals only for limited period Hurry Up</marquee></p>
		<p><marquee direction = "left"><strong>For more details Follows on </strong><i class="fa fa-twitter"></i><i class="fa fa-facebook"></i><i class="fa fa-whatsapp"></i><i class="fa fa-instagram"></i></marquee></p>

	</div>
<div class="container2">
	
	<div class="row">
		<div class="card">
			<img src="images/gym equip1.jpg">
			<h2>Gym Equipment</h2>
			<p>25$</p>

			<a href="">Buy Now</a>
		</div>
		<div class="card">
			<img src="images/gym2.jpg">
			<h2>Gym Equipment</h2>
			<p>25$</p>
			<a href="">Buy Now</a>
		</div>
		<div class="card">
			<img src="images/gym3.jpg">
			<h2>Gym Equipment</h2>
			<p>25$</p>
			<a href="">Buy Now</a>
		</div>
		<div class="card">
			<img src="images/gym4.jpg">
			<h2>Gym Equipment</h2>
			<p>25$</p>
			<a href="">Buy Now</a>
		</div>
		<div class="card">
			<img src="images/gym5.jpg">
			<h2>Gym Equipment</h2>
			<p>25$</p>
			<a href="">Buy Now</a>
		</div>
		<div class="card">
			<img src="images/gym6.jpg">
			<h2>Gym Equipment</h2>
			<p>25$</p>
			<a href="">Buy Now</a>
		</div>
		<div class="card">
			<img src="images/gym equip1.jpg">
			<h2>Gym Equipment</h2>
			<p>25$</p>
			<a href="">Buy Now</a>
		</div>
		<div class="card">
			<img src="images/gym5.jpg">
			<h2>Gym Equipment</h2>
			<p>25$</p>
			<a href="">Buy Now</a>
		</div>
		<div class="card">
			<img src="images/gym6.jpg">
			<h2>Gym Equipment</h2>
			<p>25$</p>
			<a href="">Buy Now</a>
		</div>
		<div class="card">
			<img src="images/gym4.jpg">
			<h2>Gym Equipment</h2>
			<p>25$</p>
			<a href="">Buy Now</a>
		</div>
		<div class="card">
			<img src="images/gym3.jpg">
			<h2>Gym Equipment</h2>
			<p>25$</p>
			<a href="">Buy Now</a>
		</div>
		<div class="card">
			<img src="images/gym2.jpg">
			<h2>Gym Equipment</h2>
			<p>25$</p>
			<a href="#">Buy Now</a>
		</div>
		<div class="card">
			<img src="images/gym equip1.jpg">
			<h2>Gym Equipment</h2>
			<p>25$</p>
			<a href="#">Buy Now</a>
		</div>
		<div class="card">
			<img src="images/gym5.jpg">
			<h2>Gym Equipment</h2>
			<p>25$</p>
			<a href="#">Buy Now</a>
		</div>
	</div>

</div>
<!-- for contact form -->
<div class="container3">
	<div class="c1">
		<img src="images/gym7.jpg">
		<p>To put it simply, physical activity and exercise is important for everyone. Children, adolescents, and adults of all ages need regular physical activity. Physical activity promotes good health, and you should stay active throughout all stages of your life regardless of your body type or BMI.</p>
		<p>Understanding the benefits of physical fitness and knowing how active you should be can help you maintain good health and improve your overall quality of life. Here are a few benefits of regular physical activity that demonstrate the importance of physical fitness.</p>


	</div>
	<div class="c2" id="f">
		<p><marquee direction="right">Don't Compromise with your Health! <i>Start Today</i></marquee></p>
		<h2>Contact Us</h2>
		<form>
			Name: <input type="text" name="fname">
			<br><br>
			Age: <input type="number" name="fage">
			<br><br>
			Select Your Gender <br>
			<input type="radio" name="gender" value="male"> Male 
			<input type="radio" name="gender" value="femaile">Female
			<input type="radio" name="gender" value="Transgender">Others<br><br>
			Phone Number: <input type="number" name="fnum">
			<br><br>
			Email: <input type="text" name="femail">
			<br><br>
			Address: 
			<textarea rows="10" cols="60"></textarea><br><br>
			<input type="submit" name="fsub" value="Contact">

		</form>
	</div>
</div>
<hr>
	<footer>
		<div class="about">
			<h2>About Us</h2>
			<a href="#">Chairman & Owner</a>
			<a href="#">Cheif Manager</a>
			<a href="#">Achievements</a>
			<a href="#">History</a>
		</div>
		<div class="services">
<h2>Services We offer</h2>
			<a href="#">
			Digital Marketing
		</a><a href="#">
			Web Development
		</a>
		<a href="#">
			App Development
		</a>
		<a href="#">
			Web Hosting Services
		</a>


	</div>
		<div class="car">
			<h2>Our Carriers for Working Professional</h2>
			<div class="extra1">
			<a href="#">Gym Traninee</a>
			<a href="#">Fullstack developer</a>
			<a href="#">Marketing professional</a>
		</div>
			<div class="extra2"><a href="#">Accountant</a>
			<a href="#">General Manager</a>
			<a href="#">Yoga Instructor</a></div>
			


		</div>
		<div class="links">
<h2>Follows Us</h2>
			<a href="tel:9326033562" title="Call us"><i class="fa fa-phone" style="color:grey"></i></a>
		<a href="#" title="Follow us on facebook"><i class="fa fa-facebook f"></i></a>
		<a href="#" title="contact us on Whatsapp"><i class="fa fa-whatsapp w"></i></a>
		<a href="#" title="Follow us on Instagram"><i class="fa fa-instagram i"></i></a>
		<a href="#" title="Follow us on Twitter"><i class="fa fa-twitter t"></i></a></div>
<p>@Copyright 2018 - <span id="current"></span>:<strong> Uniquo Gym</strong></p>
	</footer>
	

</body>
<script src="index.js"></script>
</html>
