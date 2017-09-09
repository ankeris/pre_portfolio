<?php header("Content-type: text/css");?>
/*******************************************************************/
/* 					       G  L  O  B  A  L 						/
/*******************************************************************/
*{
	margin:0;
	padding:0;
	/* this below makes all the borders go inside elements */
	box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
}
a {
	color: rgba(255,255,255,0.8);
	text-decoration: none;
	cursor:pointer;
}
body{
	-webkit-transition: 4s;
	background-color: #246175;
}
.childElement-column-photo, .childElement-sub-section {
	-webkit-transition: 4s;
}
html, body {
	height: 100%;
	-webkit-transition: 4s;
}
/* p{font-family: "Dosis"; font-size: 14pt;} */
p {
	font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
	}
@font-face {
font-family: "ConsolidationForTitles";
src: 
url("../fonts/ConsolidationForTitles-Regular.ttf") format("truetype"),
url("../fonts/ConsolidationForTitles-Regular.otf") format("opentype"),
url("../fonts/ConsolidationForTitles-Regular.svg") format("svg");
}

h1, h2, h3, h4, h5, h6 {
	margin: 0;
	text-align: left;
	color: rgba(255,255,255,0.7);
	font-size: 17pt;
	margin-top: 0;
    margin-bottom: 0;
    margin-left: 0;
    margin-right: 0;
    text-decoration: underline;
}
input, .input{
	width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid rgba(0,0,0,0.3);
    background-color: rgba(0,0,0,0.1);
    color: white;
    outline: none;
    -webkit-transition: 1s;
}
.input:focus, input:focus {
	background: rgba(255,255,255,0.1);
	transition-duration: 1s;
}
::-webkit-input-placeholder { /* Chrome */
  color: rgba(255,255,255,0.3);
}
:-ms-input-placeholder { /* IE 10+ */
  color: rgba(255,255,255,0.3);
}
::-moz-placeholder { /* Firefox 19+ */
  color: rgba(255,255,255,0.3);
}
:-moz-placeholder { /* Firefox 4 - 18 */
  color: rgba(255,255,255,0.3);;
}
.buttonsmall {
	margin: 3px;
	background: rgba(255,255,255,0.1);
	border: 2px solid rgba(0,0,0,0.3);
	font-size: 15pt;
	font-weight: bold;
	width: 200px;
}
.button {
	background: rgba(255,255,255,0.1);
	border: 2px solid rgba(0,0,0,0.3);
	font-size: 15pt;
	font-weight: bold;
	padding: 10px;
}
.buttonsmall:hover , .button:hover{
	background: rgba(0,0,0,0.1);
	transition-duration: 90ms;
}
.consolidationForTitles{
	font-family: 'ConsolidationForTitles';
	font-size: 50pt;

}
/*******************************************************************/ 
/* 					       Menu Navigation 							/
/*******************************************************************/

nav {
	text-align: center;
	width: 100%;
	background-color: rgba(0,0,0,.4);
	padding-top: 1em;
	padding-bottom: 1em;
	position: fixed;
	bottom: 0;
	z-index: 99;
	border-top: 2px solid rgba(255,255,255,0.4);
}

nav a {
	color: white;
	text-decoration: none;
	margin-left: 2%;
	margin-right: 2%;
	font-size: 13pt;
	font-family: 'Raleway', sans-serif;
}
nav a:hover {
	color: white;
	opacity: 0.5;
}

/*******************************************************************/
/* 					       L a Y O u T  							/
/*******************************************************************/
.column { 
margin: 0 auto;
padding: 10px;
position: relative;
box-shadow: 5px 5px 5px 2px black;
}
.column2, .column4, .column6{
	text-align: center;
}
.column1{
    background-image: url("../pictures/img1opacity30.png"); 
}
.column3{
	background-image: url("../pictures/img2opacity30.png"); 
}
.column5{
	background-image: url("../pictures/img3opacity30.png"); 
}
.column7{
	background-image: url("../pictures/img4opacity30.png"); 
}
.column-photo {
	/* width: 100%; not needed because it's 100% stock*/
	height: 100%;
	background-size: cover;
	background-repeat: no-repeat;
	background-attachment: fixed;
	margin-bottom: -12px;
	color: rgba(255,255,255,0.8);
}

.sub-section {
background-color: #476b6b;
color: rgba(255,255,255,0.8);
border-top: 12px solid #add8e6;
border-right: 1px solid #add8e6;
border-left: 1px solid #add8e6;
border-radius: 28px;
-webkit-transition: 4s;
}

.columnList ul{
	list-style: none;
}

.childElement-column-photo{
	width: 100%;
	background-color: rgba(102, 153, 153, 0.8);
	margin-top: 5%;
	border-radius: 5px;
	color: rgba(255,255,255,0.8);
	-webkit-box-shadow: 9px 13px 58px -3px rgba(0,0,0,0.42);
-moz-box-shadow: 9px 13px 58px -3px rgba(0,0,0,0.42);
box-shadow: 9px 13px 58px -3px rgba(0,0,0,0.42);
}
.childElement-column-photo > p {
	margin: 7px;
}
.childElement-sub-section{
	width: 100%;
	color: rgba(255,255,255,0.8);
	margin-top: 50px;
	overflow:hidden;}
	/* border-radius: 12px;
	border: 5px solid rgba(0,0,0,0.1); */
#textDisplay {
font-family: 'ConsolidationForTitles';
font-size: 90pt;
transition-duration: 1s;
word-spacing: 20px;
font-weight: bold;
margin: 2px;
border: 1px solid rgba(255,255,255,0.42);
color: rgba(255,255,255,0.8);
word-wrap: break-word;
}

/*******************************************************************/
/* 					       G r i d F l e x  						/
/*******************************************************************/
/*  SECTIONS  */


/*  COLUMN SETUP  */
.col {
	display: block;
	float:left;
	margin: 1% 0 1% 1%;
}
.col:first-child { margin-left: 0; }

/*  GROUPING  */
.group:before,
.group:after { content:""; display:table; }
.group:after { clear:both;}
.group { zoom:1; /* For IE 6/7 */ }
/*  GRID OF TWO  */
.span_2_of_2 {
	width: 100%;
}
.span_1_of_2 {
	width: 49.2%;
}
/*******************************************************************/
/* 					       Ja v a sc r i pt  						/
/*******************************************************************/
.hidden {
	display: none;
	opacity: 0.1ms;
}
.unhidden {
 display: inline;
 opacity: 0.2;
}

#checklist2 li input {
display: none;
}

#checklist2 li.edit span {
	display: none;
}

#checklist2 li.edit input {
	display: initial;
}
/*******************************************************************/
/* 					       		titles 		  						/
/*******************************************************************/
.title {
	font-family: 'Ubuntu';
	letter-spacing: 3px;
	color: white;
	opacity: 0.9; margin: 3px;}

.title-center svg{
	max-width: 60%;
}
.title-center {
	width: 100%;
	margin: 0 auto; font-family: 'consolidationForTitles'; font-size: 50pt;}

/*******************************************************************/
/* 					    P l u g i n s	 		  					/
/*******************************************************************/
.owl-child {
	width: 100px;
	height: 100px;
	opacity: 0.7;
}
.owl-carousel { border-right: 6px solid rgba(255,255,255,0.1); border-left: 6px solid rgba(255,255,255,0.1);
	background-color: rgba(0,0,0,0.1); margin-bottom: 20px;
}
#animation {
	border: none;
	width: 100%;
	height: 330px;
}
.p5jsExample {
	text-align: center;
	padding: 10px;
}
.p5jsExample > canvas {
	border-radius: 5px;
}
/*******************************************************************/
/* 					    F o o T e r		 		  					/
/*******************************************************************/
footer {
	text-align: center;
}
/*******************************************************************/
/* 					   		 E x t r a 	 		  					/
/*******************************************************************/
.bgtext { position: relative;}.bgtext:after {content: "Drag me";font-family: 'consolidationForTitles'; font-size: 20pt;color: rgba(255,255,255,0.3);position: absolute;top: 40%;left: 47%; z-index: -1;}
/*******************************************************************/
/* 					    M e d i a QUERYZ 		  					/
/*******************************************************************/

@media only screen and (max-width: 720px) {
.column-photo {
		background-position: 50% ;}
.column1{
    background-image: url("pictures/img1opacity30small.png"); 
}
.column3{
	background-image: url("pictures/img2opacity30small.png"); 
}
.column5{
	background-image: url("pictures/img3opacity30small.png"); 
}
.column7{
	background-image: url("pictures/img4opacity30small.png"); 
}
.span_2_of_2, .span_1_of_2 { width: 100%; margin-left: 0; margin-right: 0; }
nav a {
	font-size: 14pt;
	}
.title-center svg{
	max-width: 90%;
}
.title-center {
	max-width: 90%;
	font-size: 25pt;
}
#textDisplay {
font-family: 'ConsolidationForTitles';
font-size: 40pt;
word-spacing: 20px;
font-weight: bold;
margin: 2px;
border: 1px solid rgba(255,255,255,0.2);
}
}
@media only screen and (max-height: 720px) {
	html, body {
	height: 115%;
	-webkit-transition: 4s;
}
}


