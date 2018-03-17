<?php
$con=mysqli_connect("localhost","root","","webpage");
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
				    <li><a href="about.php">About</a>
				    <li  class="current"><a href="services.php">Services</a>
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
                <h1 class="page-title">Service</h1>
                <ul id="services">
                    <li>
                        <h3>Website Design</h3>
                        <p>We create Website.<p>
                        <p>Pricing: </p>
                    </li>
                    <li>
                        <h3>Website Maintenance</h3>
                        <p>We create and manage the site.</p>
                        <p> Pricing: </p>
                    </li>
                    <li>
                        <h3>Website Hosting</h3>
                        <p>We provide the Hosting.</p>
                        <p> Pricing:</p>
                    </li>                            
                        </article>

            <aside id="sidebar">
              <div class="dark">  
                <h3>Get A Quote</h3>
                <form class="quote" method="post">
                  <div>
                      <label>Name</label><br>
                      <input type="text" placeholder="Name" name="name">
                  </div>
                  <div>
                      <label>Email</label><br>
                      <input type="email" placeholder="Email Address" name="email">
                  </div>
                  <div>
                      <label>Message</label><br>
                      <textarea placeholder="Message" name="message"></textarea>
                  </div>
                  <button class="button_1" type="submit" name="sub">Send</button>     
                </form>
              </div>
            </aside>
    	</div>	
    	
    </section>
    <footer>
    	<p><span class="highlight">Your</span> Web Design,Copyright &copy;2018</p>
    </footer>

</body>
</html>
<?php
if(isset($_POST['sub']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $message=$_POST['message'];
  $query="INSERT INTO quote(name,email,message) VALUES('$name','$email','$message')";
  mysqli_query($con,$query);
}