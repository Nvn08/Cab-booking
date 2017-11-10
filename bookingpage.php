<?php
session_start();

if(isset($_SESSION['id']))
{
	
}
else
{
	header("Location:registrationpage.php");
}
?>


<!DOCTYPE HTML>
<html>
<head>
      <link rel="stylesheet" href="bookingcss.css">
</head>
<body>
    <header>
        <div class="wrapper">
            <h1>Welcome</h1>
            <nav>
	    	<ul>
                	<li><a href="#">Home</a></li>
                	<li><a href="#">My Bookings</a></li>
                	<li><a href="#">About</a></li>
                	<li><a href="logout.php">Log Out</a></li>
            	</ul>
	    </nav>
        </div>
    </header>
    
    <div id="hero-image">
        <div class="wrapper">
            <h2><strong>GET THERE</strong><br/>
        Your day belongs to you</h2>
        <a href="#" class="button-1">Book Now</a>
        </div>
    </div>
    
    <div id="features">
        <div class="wrapper">
            <ul>
            <li class="feature-1">
		
		<img src="https://goo.gl/YXchai" width="220" height="200"> 
                <h4>Easiest Way Around</h4>
                <p>One tap and a car comes directly to you. Hop in—your driver knows exactly where to go. And when you get there, just step out. Payment is completely seamless.</p>
            </li>
            <li class="feature-2">
		<img src="https://goo.gl/K19yHE" width="220" height="200">
                <h4>Anywhere, Anytime</h4>
                <p>Daily commute. Errand across town. Early morning flight. Late night drinks. Wherever you’re headed, count on for a ride—no reservations required.</p>
            </li>
            <li class="feature-3">
		<img src="https://goo.gl/j3b11E" width="220" height="200">
                <h4>Low-cost to luxury</h4>
                <p>Economy cars at everyday prices are always available. For special occasions, no occasion at all, or when you just a need a bit more room, call a black car or SUV. </p>
            </li>
            <div class="clear"></div>
        </ul>
        </div>
    </div>
    
	<div id="cta">
    		<div class="wrapper">
       		 <h3>Our Awesome Fleet</h3>
        		<p>The widest variety of cars to choose from </p>
        		
		 <ul>
            <li class="cta-1">
		
                <h4>Micro</h4>
                <p>Compact yet comfortable AC cars that seat up to 3 people and give you great value for your money. Small fares for short rides.</p>
		<img src="https://goo.gl/2GVMBT" width="220" height="200">
            </li>

            <li class="cta-2">
		
                <h4>Prime Sedan</h4>
                <p>Top rated drivers, free Wi-Fi and a hand-picked fleet of the best cars available with extra legroom and boot space.</p>
		<img src="https://goo.gl/rJnKAU" width="220" height="200">
            </li>
            
	<li class="cta-3">
		
                <h4>SUV</h4>
                <p>A perfect choice of car for your weekend getaways, with free Wi-Fi and plenty of room for everyone including that extra bag. </p>
		<img src="https://goo.gl/syjxqT" width="220" height="200">
            </li>
            <div class="clear"></div>

    		</div>
	</div>

    <footer>
       <div class="wrapper">
        <div id="footer-info">
            <p>Copyright 2017. All rights reserved. (Naveen Saini)</p>
            <p><a href="#">Terms of Service</a> I <a href="#">Privacy</a></p>
        </div>
        <div class="clear"></div>
    </div>
    </footer>
    
</body>
</html>
