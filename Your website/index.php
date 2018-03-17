<?php
include('subscribe.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Afforadable and professional web design">
    <meta name="keywords" content="web design,afforadable web design,">
    <meta name="author" content="Aman ojha">
	<title>Your Web Design | Welcome</title>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<div id="branding">
				<h1><span class="highlight">Your</span> Web Design</h1>
			</div>
			<nav>
				<ul>
					<li class="current"><a href="index.php">Home</a>
				    <li><a href="about.php">About</a>
				    <li><a href="services.php">Service</a>
				</ul>
			</nav>
		</div>
	</header>
	

	<section id="showcase">
		<div class="container">
			<h1>Afforadable Professional Web Design</h1>
			<p>Good work done by hard worker.</p>
		</div>	
	</section>

    <section id="newsletter">
    	<div class="container">
    		<h1>Subscribe To Our Newsletter</h1>
            
    		<form method="post">
    			<input type="email" placeholder="Enter email" name="email">
    			<button type="submit" class="button_1" name="subs">Subscribe</button>
    		</form>
    	</div>	
    </section>

    <section id="boxes">
    	<div class="container">
    		<div class="box">
    			<img src="./img/html5.jpg">
    			<h3>HTML5 Markup</h3>
    			<p>Learn html5 from w3school</p>
    		</div>
    		<div class="box">
    			<img src="./img/css3.png">
    			<h3>Css3 Styling</h3>
    			<p>Learn css3 from w3school</p>
    		</div>	
    		<div class="box">
    			<img src="./img/graphic.png">
    			<h3>Graphic Design</h3>
    			<p>Learn Graphic from w3school</p>
    		</div>		

    	</div>	
    	
    </section>
    <footer>
    	<p><span class="highlight">Your</span> Web Design,Copyright &copy;2018</p>
    </footer>

</body>
</html>
