<!DOCTYPE HTML>
<!--
	
-->

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
<script>
							  function myFunction() {
			  var x = document.getElementById("q1");
			  if (x.style.display === "none") {
				x.style.display = "block";
			  } else {
				x.style.display = "none";
			  }
			}
					  function myFunction1() {
			  var x = document.getElementById("q2");
			  if (x.style.display === "none") {
				x.style.display = "block";
			  } else {
				x.style.display = "none";
			  }
			}
					  function myFunction9() {
			  var x = document.getElementById("q3");
			  if (x.style.display === "none") {
				x.style.display = "block";
			  } else {
				x.style.display = "none";
			  }
			}
			
			<!-- background video -->
			var video = document.getElementById("myVideo");
			var button = document.getElementById("myBtn");
			
			function myFunction2(){
				
				if(video.paused){
					
					video.play();
					btn.innerHTML = "Pause";
				} else {
					video.paused();
					btn.innerHTML ="Play";
					
				}
				
			}
			
	</script>
<html>
	<head>
		<title>Air Pollution Awareness</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.php">Air Pollution <span>Awareness</span></a></div>
				<a href="#menu"><span>Menu</span></a>
			</header>

		<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="login.php">Log In</a></li>
					<li><a href="signup.php">SignUp</a></li>
					<li><a href="content.php">Preventions</a></li>
				</ul>
			</nav>

		<!-- Banner -->
		<!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
			<section id="banner" class="bg-img" data-bg="7.jpg">
				<div class="inner">
					<header>
						<h1>What is Air Pollution?</h1>
						
						<ul class="actions">
									<li><a href="login.php" class="button special big">BE PART OF THE MOVEMENT</a></li>
		
						</ul>
						
					</header>
				</div>
				
				
				
			</section>

		<!-- One -->
			<section id="one" class="wrapper post bg-img" data-bg="6.jpg"
			
			<video autoplay muted loop id="myVideo">
			
			 <source src="video/wix.mp4" type="video/mp4">
			
			</video>
				<div class="inner">
					<article class="box">
					
					  
						<header>
							<h2>Heading 1</h2>
							<p>01.01.2017</p>
						</header>
						<div class="content">
							<p>Scelerisque enim mi curae erat ultricies lobortis donec velit in per cum consectetur purus a enim platea vestibulum lacinia et elit ante scelerisque vestibulum. At urna condimentum sed vulputate a duis in senectus ullamcorper lacus cubilia consectetur odio proin sociosqu a parturient nam ac blandit praesent aptent. Eros dignissim mus mauris a natoque ad suspendisse nulla a urna in tincidunt tristique enim arcu litora scelerisque eros suspendisse.</p>
						</div>
						<footer>
							<button id="myBtn" onclick="myFunction2()">Pause</button>
						</footer>
					</article>
				</div>
				<a href="#two" class="more">Learn More</a>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper post bg-img" data-bg="5.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Heading 2</h2>
							<p>12.21.2016</p>
						</header>
					
						<div class="content">
							<p>Scelerisque enim mi curae erat ultricies lobortis donec velit in per cum consectetur purus a enim platea vestibulum lacinia et elit ante scelerisque vestibulum. At urna condimentum sed vulputate a duis in senectus ullamcorper lacus cubilia consectetur odio proin sociosqu a parturient nam ac blandit praesent aptent. Eros dignissim mus mauris a natoque ad suspendisse nulla a urna in tincidunt tristique enim arcu litora scelerisque eros suspendisse.</p>
						
						</div>
						<footer>
							<a href="content.php" class="button alt">Learn More</a>
						</footer>
					</article>
				</div>
				<a href="#three" class="more">Learn More</a>
			</section>

		<!-- Four -->
			<section id="four" class="wrapper post bg-img" data-bg="2.jpg">
				<div class="inner">
					<article class="box">
					
						<header>
							<h2>FREQUENTLY ASKED QUESTIONS</h2>
						</header>
						
						<button onclick="myFunction()">WHAT DO YOU KNOW ABOUT Pollution</button>

								<div id="q1">
								  This is my DIV element.
								</div>
						</br>
						<button onclick="myFunction1()">Click Me 2</button>

								<div id="q2">
								  This is my DIV element. 2
								</div>
								</br>
						<button onclick="myFunction9()">Click Me 3</button>

								<div id="q3">
								  This is my DIV element.3
								</div>		
						
						</div>
				</section>
					 
		<!-- Footer -->
			<footer id="footer">
						<div class="inner">
									<h2>Contact  Us</h2>
					<form action="#" method="post">

						<div class="field half first">
							<label for="name">Name</label>
							<input name="name" id="name" type="text" placeholder="Name">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Send Message" class="button alt" type="submit"></li>
						</ul>
					</form>

					<ul class="icons">
						<li><a href="#" class="icon round fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon round fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon round fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>

					<div class="copyright">
						&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
					</div>

				</div>
			</footer>

		

	</body>
</html>