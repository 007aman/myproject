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
	<title>Your Web Design | About</title>
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
					<li><a href="index.php">Home</a>
				    <li class="current"><a href="about.php">About</a>
				    <li><a href="services.php">Service</a>
				</ul>
			</nav>
		</div>
	</header>
	

	
    <section id="newsletter">
    	<div class="container">
    		<h1>Subscribe To Our Newsletter</h1>
    		<form method="post">
    			<input type="email" placeholder="Enter email" name="email">
    			<button type="submit" class="button_1" name="subs">Subscribe</button>
    		</form>
    	</div>	
    </section>

    <section id="main">
    	<div class="container">
            <article id="main-col">
                <h1 class="page-title">About Us</h1>
                <p>This is my project for webdesign using HTML5,CSS3,PHP,MYSQLI.We created this with the user's perspective in mind. We wanted to offer a platform that would require no coding skills or design experience. We keep it simple, so users can focus on creating an amazing website that reflects their brand. Best of all - it's free. You can get online, showcase your brand, or start selling products right away</p>

                <p class="dark">We created this with the user's perspective in mind. We wanted to offer a platform that would require no coding skills or design experience. We keep it simple, so users can focus on creating an amazing website that reflects their brand. Best of all - it's free. You can get online, showcase your brand, or start selling products right away.</p>
            </article>

            <aside id="sidebar">
              <div class="dark">  
                <h3>What We Do</h3>
                <p>We create website,Templates for user demands as client want to create. </p>
              </div>
            </aside>
    	</div>	
    	
    </section>
    <footer>
    	<p> <span class="highlight">Your</span> Web Design,Copyright &copy;2018</p>
    </footer>

</body>
</html>