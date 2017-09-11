<!DOCTYPE html>
<html>
<head>
	<title>Juozas Rastenis</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.php">
	<link rel="stylesheet" href="css/popOut.php">
	<link rel="stylesheet" type="text/css" href="svg/svgstyle.php">
	
	
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="icon" type="image/png" href="pictures/logo.png"/>

	<!-- Plugins -->
	<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.14/p5.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.14/p5.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.14/addons/p5.dom.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.14/addons/p5.dom.js"></script>

	<!-- mobile devices -->
	<meta name="viewport" content="width=device-width" />
</head>
<body onload="setInterval(backgroundColorChange, 50000);">
<!-- class "column-photo" is for the columns that have 100% screen height PHOTO BACKGROUND 
			\___class "childElement-column-photo" is child from above comment

	 class "sub-section" is for the columns that have 50% screen height SOLID BACKGROUND
	 		\___class "childElement-sub-section" is child from above comment

	 classes "col span_1_of_2"
	 		 "section, group" is for columns that use CSS GRID LAYOUD -->
<header>
	<nav id="nav">
		<a id="introduction" href="#introSection">intro</a>
		<a id="technology" href="#technologySection">tech</a>
		<a id="socialmedia" href="#socialmediaSection">social</a>
		<a id="contact" href="#contactSection">network</a>
		<a id="myfont" href="#myfontSection">font</a>
		<a id="websites" href="#websitesSection">entity</a>
		<a onclick="backgroundColorChange();" href="#"><b style="color: aqua">c</b>olor<b style="color: orange">?</b>?</a>
	</nav>
</header>

<h1 class="title" style="text-align: center;">Juozas Rastenis Portfolio</h1>
<section id="introductionSection" class="column column1 group column-photo animated fadeIn">
	<span class="col span_1_of_2"><?php include 'svg/introduction.php'; ?>
		<div class="childElement-column-photo">
			<h2 class="title">bio</h2>
			<p>
			Second year "Multimedia Design and Communication" student from Aarhus, Denmark.<br>
			Mainly interested in frontend developement and subjects that relate and add up to it. 
			</p>
		</div>
		<div class="childElement-column-photo">
			<h2 class="title">ethos</h2>
			<ul>
				<li><p>- Although I fairly believe in importance of research, some intuition could always be a gateway.</p></li>
				<li><p>- Simplify the design but never too much.</p></li>
				<li><p>- Explore and inspect everything on the web.</p></li>
				<li><p>- Don't be afraid to try new.</li>
			</ul>
		</div>
		<div class="childElement-column-photo">
			<h3 class="title">what's this?</h3>
			<p>Slight digital visualization to describe my personal appearance and fashion towards multimedia, design and web</p>
		</div>
	</span>
	<span class="col span_1_of_2">
	<!-- <object data="Uzsipisimas.html" type="" id="animation"></object> -->
	<embed src="Uzsipisimass.html" id="animation">
	</span>

</section>


<figure id="technologySection" class="column column2 sub-section" style="overflow: hidden">
	<span class="title-center"><?php include 'svg/technologies.php';?></span>
		<div class="owl-carousel childElement-sub-section bgtext">
		  		<div class="owl-child"><img src="pictures/snap.svg"></div>
		  		<div class="owl-child"><img src="pictures/flicon.png"></div>
		  		<div class="owl-child"><img src="pictures/slackicon.png"></div>
		  		<div class="owl-child"><img src="pictures/github.png"></div>
		  		<div class="owl-child"><img src="pictures/psicon.png"></div>
		  		<div class="owl-child"><img src="pictures/jsicon.png"></div>
		  		<div class="owl-child"><img src="pictures/vue.png"></div>
		  		<div class="owl-child"><img src="pictures/aiicon.png"></div>
		  		<div class="owl-child"><img src="pictures/chromeicon.png"></div>
		  		<div class="owl-child"><img src="pictures/p5.png"></div>
		</div>
</figure>


<article id="socialmediaSection" class="column column3 column-photo">
	<span class="col span_1_of_2"><?php include 'svg/socialmedia.php'; ?>
		<div class="childElement-column-photo"><p>Social Media</p></div>
	</span>
	<span class="col span_1_of_2"></span>
</article>


<section id="contactSection" class="column column4 sub-section">
	<span class="title-center"><?php include 'svg/contactme.php'; ?></span>
		<form id="my_form" onsubmit="submitForm(); return false;" class="childElement-sub-section">
			<div class="col span_1_of_2">
			    <label for="fname"><p>Your Name</p></label>
			    <input id="n" type="text" id="fname" name="firstname" placeholder="Your name..">
			    <label for="email"><p>Your Email Adress</p></label>
			    <input id="e" placeholder="Email Address.." type="email" required>
		    </div>
			<div class="col span_1_of_2">
			    <label for="country"><p>Message</p></label>
			    <textarea id="m" class="input" id="subject" name="subject" rows="6" placeholder="Text field.."></textarea>
			</div>
    		<input id="mybtn" class="buttonsmall" type="submit" value="Submit Form"><span id="status"></span>
    		<p>Otherwise +45 28 70 79 67 &nbsp||&nbsp juozas.rastenis@gmail.com</p>
  		</form>
</section>


<article id="myfontSection" class="column column5 column-photo">
	<span class="col span_1_of_2"><?php include 'svg/font.php'; ?>
		<div class="childElement-column-photo">
		<summary><h2 class="title">&copy Consolidation For Titles</h2></summary>
		<p>I am not a typographer and not even close but I always thought it would be interesting to develop a typeface. While building this website I put the finishing touches to this font and launched it. If You noticed the weird big titles in this website it means You've now seen my font by now.<br>This specific font is created <b>only for titles</b>, it is not a good typeface for reading.<br>Contains only capital letters. No numbers or symbols.</div>
	</span>
	<span class="col span_1_of_2 childElement-column-photo fullHeight">
		<h3 class="title" >Feel free to type your name!</h3>
		<input id="textInput" type="text" name="" maxlength="80" placeholder="name, text, etc.." style="margin: 2%; width: 90%;">
		<p id="textDisplay"></p>
	</span>
</article>
<!-- no content yet -->
<section id="websitesSection" class="column column6 sub-section">
	<div class="title-center">Front end journey</div>
		<div class="childElement-sub-section">
			<div>
				<a href="https://github.com/ankeris" class="col span_1_of_2 button" target="_blank">
				<p>GitHub profile</p>
				</a>

				<a href="https://docs.google.com/document/d/1wkh24n5Mt5NeA5XDTk_lRFAYddV2rHfPzlzH26JVL_A/edit?usp=sharing" class="col span_1_of_2 button" target="_blank">
				<p>personal learning diary</p>
				</a>
			</div>
			<div>
				<a id="myBtn" class="col span_1_of_2 button"><p>studies module</p></a>
				<a id="myBtntwo" class="col span_1_of_2 button"><p>personal goals</p></a>
			</div>
		</div>
</section>

<section id="lastSection" class="column column7 column-photo">
	<div class="col span_1_of_2">
			<div class="childElement-column-photo">
				<h5 class="title">p5.js</h5>
				<p>sketches I practise to draw and animate with javascript library named p5.js. In examples below I started with very basic interaction and ending with more complex functions</p>
			</div>
			<div class="childElement-column-photo">
					<p>1. Bouncing Ball</p>
						<figure id="bouncingball" class="p5jsExample"></figure>
			</div>
			<div class="childElement-column-photo">
					<p>2. One click = one bubble! Wont let more than 50, since I don't want browser to freeze</p>
					<figure id="bubbleAppearsWhenClicked" class="p5jsExample"></figure>
			</div>
			<div class="childElement-column-photo">
					<p>3. Balls will freeze if you click on them!</p>
				<figure id="ballsFreezeOnClick" class="p5jsExample"></figure>
			</div>
	</div>

	<div class="col span_1_of_2">
			<div class="childElement-column-photo">
					<p>4. more bouncing figures, insert the number for balls</p>
				<figure id="moreBouncingFigures" class="p5jsExample"></figure>
			</div>

			<div class="childElement-column-photo">
					<p>5. Circles go MAD only when they are touching each other.</p>
				<figure id="ForInsideFor" class="p5jsExample"></figure>
			</div>
	</div>

</section>

<?php include 'php/popoutstudiesmodule.php'; ?>

<footer id="footer" class="column column8">&copy 2 0 1 7 Rastenis</footer>
<script src="js/background.js"></script>
<script src="js/email.js"></script>
<script src="js/font.js"></script>
<script src="js/popOut.js"></script>
<script src="p5js/BouncingBall/sketchOne.js"></script>
<script src="p5js/bubbleAppearsWhenClicked/sketchTwo.js"></script>
<script src="p5js/ballsFreezeOnClick/sketchThree.js"></script>
<script src="p5js/moreBouncingFigures/sketchFour.js"></script>
<script src="p5js/ForInsideFor/sketchFive.js"></script>
<script src="owlcarousel/jquery.min.js"></script> <!-- jQuery BELOW mandatory-->
<script src="js/flow.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script src="js/carouselSettings"></script>
<script type="text/javascript">
	$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});
</script>
</body>

</html>