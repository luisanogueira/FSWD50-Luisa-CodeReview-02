<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>My second project</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<script src="script.js" type="text/javascript"></script>
</head>
<body>

	<div id="all">
		<div id="top"> <!-- The logo and banner are placed here-->
			<div >
				<img class="toplogo" src="img/logo.png" alt="Newspaper CF">
				<a target="_blank" href="https://www.codefactory.wien/en/welcome-to-codefactory/"><img class="topbanner" src="img/banner-1.png" alt="Full Stack Web Development course in Vienna"></a>
			</div>

		</div> <!-- The logo and banner are placed here-->

		<div id="topnav">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="#tech">Tech</a></li>
				<li><a href="#culture">Culture</a></li>
				<li><a href="index2.html">Video</a></li>
			</ul>
		</div>

		<div class="date">
			<p>Friday, 14.09.2018</p>
		</div>

		<div class="title">
			<h2>Top news</h2>
		</div> <!-- Top news title-->


		<div id="main"><!-- Figures with images and figcaptions displayed in 
		rows, title with popular class and side banner-->

			<div class="left"> <!--The images and figcaptions with title-->
				<div class="firstimages">
					<figure>
					<img  src="img/nasa.png" alt="Nasa Satellite">
					<figcaption>NASA is trying to squash conspiracy theories about the space station leak</figcaption>
					</figure>

					<figure>
						<img src="img/eu.png" alt="European Union">
						<figcaption>EU approves controversial Copyright Directive, including Internet "link tax"</figcaption>
					</figure>

					<figure>
						<img src="img/jeff.png" alt="Jeff Bezzos">
						<figcaption>Jeff Bezos is going to create schools where the 'child is the customer'</figcaption>
					</figure>

					<figure>
						<a target="_blank" href="https://www.codefactory.wien/en/welcome-to-codefactory/"><img class="smallbanner" src="img/banner-mobile.png" alt="Jeff Bezzos"></a>
					</figure>

				</div>


				<div class="popular">
					<h2>Popular</h2><!-- Title between top and popular news-->
				</div>
			
				<div class="secondimages">
					<figure>
						<img class="polar" src="img/polar.png" alt="watches">
						<figcaption>Polar's new fitness watch will measure the wattage of your exercise</figcaption>
						</figure>

					<figure>
						<img class="musk" src="img/musk.jpg" alt="Elon Musk">
						<figcaption>Elon Musk smokes marijuana live on web show</figcaption>
					</figure>

					<figure>
						<img src="img/snowden.jpg" alt="screen">
						<figcaption>Edward Snowden surveillance powers ruled unlawful</figcaption>
					</figure>
				</div>
			</div><!--The images and figcaptions with title-->

			<div><!--Right banner element in column-->
				<a target="_blank" href="https://www.codefactory.wien/en/welcome-to-codefactory/"><img class="right" src="img/banner-2.png" alt="FSWD"></a>
			</div>

		</div><!-- Figures with images and figcaptions displayed in 
		rows, title with popular class and side banner-->

		<div class="middlebanner"> <!-- Another banner-->
			<a target="_blank" href="https://www.codefactory.wien/en/welcome-to-codefactory/"><img src="img/banner-3.png" alt="How to become a developer?"></a>
		</div> <!-- Another banner-->


		<div id="maintwo"> <!-- More figures with images and figcaptions in row
		and another right banner element in column-->
			<div class="thirdimages">
				<figure>
					<img src="img/iphone.png" alt="Iphone">
					<figcaption>How to preorder the iPhone XS, XS Max, and XR</figcaption>
				</figure>

				<figure>
					<img src="img/smart.png" alt="Power strip">
					<figcaption>This smart power strip lets you individually control each outlet</figcaption>
				</figure>

				<figure>
					<img src="img/one.png" alt="Headphones">
					<figcaption>OnePlus announces super cheap USB-C earbuds</figcaption>
				</figure>

				<figure>
					<img class="phone" src="img/phone.png" alt="Phone">
					<figcaption>Spotfy raises limit for offline downloads to 10,000 songs per device</figcaption>
				</figure>

			</div>

			<div>
				<a target="_blank" href="https://www.codefactory.wien/en/welcome-to-codefactory/"><img class="righttwo" src="img/banner-4.png" alt="FSWD"></a>
			</div>

		</div> <!-- More figures with images and figcaptions in row
		and another right banner element in column-->

		<div id="footer">

			<img class="downlogo" src="img/logo.png" alt="Newspaper CF">

			<div id="downnav">
				<ul>
					<li><a href="#home">Home</a></li>
					<li><a href="#tech">Tech</a></li>
					<li><a href="#culture">Culture</a></li>
					<li><a href="#video">Video</a></li>
				</ul>
			</div>
			
			<div>
				<p id="name">Luisa Nogueira - Code Factory 2018</p>
			</div>
		</div>
	</div> <!-- Everything ends here -->

</body>
</html>