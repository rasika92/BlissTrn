<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/global.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<title>Index</title>

<script
src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>


<script>
$(document).ready(function() {
	$('#login p').click(function() {
		$('#login-form').slideToggle(300);
		$(this).toggleClass('close');
	});
}); // end ready
</script>

</head>


<body>
<div id="page">

<header>

<div id="header">

<div id="logo">
<img src="images/logo.png" />
</div>

<div id="nav-container">

<div id="register">
<a href="php/register.php">Register</a>
</div>

<nav id="login">
<p>Login</p>
<div id="login-form">
<form action="php/login.php" method="post">
<label for="name">Username:</label> <input type="text" name="fname" />

<label for="password">Password:</label> <input type="password" name="upwd" />
<input type="submit" value="Login" />
</form>
</div>
</nav><!-- end of login nav -->

</div><!-- end of nav-container div -->

<div class="clear-both"></div>

</div><!-- end of header div -->

</header>


<section>

<div id="section">

<div id="menu">

<ul>
<li><a href="index.php">Home</a></li>
<li><a href="aboutus.html">About us</a></li>
<li><a href="news.html">News</a></li>
<li><a href="faqs.html">FAQs</a></li>
<li><a href="contacts.html">Contacts</a></li>
</ul>

</div><!-- end of menu div -->


<div id="content">

<div id="tagline">
<h1>SERVE YOUR COMPANY BETTER</h1>
</div><!-- end of tagline div -->

<div id="matter">

Studies have proven that at certain opportune type your customers<br>
-build tremendous goodwill for you through social media<br>
-Can help you directly with product/service improvements but hate
product service feedbqack forms<br>
<br> Using A1 Places we will help you to connect with
customers at these times and make them your brand ambassadors.

</div><!-- end of matter div -->

<div id="imagecont">

<div class="tags">
<div id="book">Book a demo</div>
<div id="quote">Book a quote</div>

<div class="clear-both"></div><!-- so that grey cont doesn't overlap with orange area -->
</div><!-- end of tags div -->

<div id="grey">
<div id="text">Find out how</div>

<div id="imgbox">
<div id="institutional">
									<img src="images/institutional.jpg" />
								</div>

								<div id="standalone">
									<img src="images/standalone.jpg" />
								</div>

								<div class="clear-both"></div><!-- so that grey cont doesn't fall short -->

								<div id="ia1">Instituitional A1</div>

								<div id="sa1">Standalone A1</div>
							</div><!-- end of image box -->

						</div><!-- end of grey div -->

						</div><!-- end of imagecont div -->

						</div><!-- end of content div -->

						</div><!-- end of section div -->

						</section>

						<footer>
						<div id="footer">
						<div id="copy">&copy Game changers. All rights reserved.</div>
						<div id="links">
						| <a href="index.php">Home</a> | <a href="aboutus.html">About
						us</a> | <a href="news.html">News</a> | <a href="faqs.html">FAQs</a> |
						<a href="contacts.html">Contacts</a> | 
						</div>
						<!-- end of links div -->
			</div>
						<!-- End of footer div -->
		</footer>

		</div>
		<!-- end of page div-->

		</body>
		</html>
		
