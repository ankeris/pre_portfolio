<!DOCTYPE html>
<html>
<head>
	<title>ANK</title>

	<link rel="stylesheet" type="text/css" href="style.php">
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
</head>
<body>
<header>
	<div class="pure-menu pure-menu-horizontal">
    <ul class="pure-menu-list indigo">
        <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Selected</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Normal</a></li>
        <li class="pure-menu-item pure-menu-disabled">Disabled</li>
    </ul>
</div>
</header>


<h2 class="title" style="text-align: center;">ANK website</h2>

<div class="column column1"><p>Intro, video</p></div>
<div class="column column2"><p id="drive">second field</p></div>



<div class="column column4">
	<h3 class="title">Adding numbers</h3>
	<input type="text" id="num-one"> * (times) <input type="text" id="num-two">
	<p id="add-sum" style="color: blue; font-size: 20pt;"></p>
</div>

<div class="column column5">
<h3 class="title">My Font</h3>
	<ul>
		<li><a data-img="minedas-pic" href="#" id="minedas">Minedas</a></li>
		<li><a data-img="maksas-pic" href="#" id="maksas">Maksas</a></li>
		<li><a data-img="minde-pic" href="#" id="minde">Minde</a></li>
	</ul>
	<img src="pictures/minde.jpg" alt="" id="minde-pic" class="hidden" >
	<img src="pictures/maksas.jpg" alt="" class="hidden" id="maksas-pic">
	<img src="pictures/minedas.jpg" alt="" class="hidden" id="minedas-pic">
</div>

<div class="column column6">
<h3 class="title">Text Insert Instead</h3>
	<ul id="checklist2">
		<li><span>Jovaisa</span><input type="text" value="Jovaisa"></li>
		<li><span>Kerbedis</span><input type="text" value="Kerbedis"></li>
		<li><span>Lukauskis</span><input type="text" value="Lukauskis"></li>
	</ul>
</div>
</div>

<footer class="column column7"></footer>
<script src="js/friends.js"></script>
<script src="js/calculator.js"></script>
<script src="js/input.js"></script>

</body>


</html>