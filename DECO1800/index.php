<?php

// Use the global $_SERVER variable to dynamically get the current page's file path. basename() gets the filename from a path.
$activePage = basename($_SERVER['SCRIPT_FILENAME'], '.php');

// In the nav element below, there are inline conditional statements that check if $activePage is the same as the current menu item. If it is, add the class attribute with a value of active to add visible context to the menu.

// Also, $activePage has been added to the body element as a class. You can use this in your CSS to add different styles per page without additional code. See example in CSS below.

?>
<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>The Lecture Homepage</title>
		<link rel="stylesheet" href="css/index.css">
		<meta name="author" content="Team B - NWD">
		<meta name="description" content="This page is about...">
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/jquery.lettering-0.6.1.min.js"></script>
		<script src="js/js.js"></script>
		
	</head>
	<style>
		.btn_div{
			width: 12%;
			height: 100px;
			right: 8%;
			top: 256px;
			position: absolute;
			animation: bounceIn 1.5s;
		}
	</style>
	<body>
	<div id="header">
		<table>
		<tr>
		<td></td>
		<td><h1>Lecture Room</h1></td>
		</tr>
		</table>
	</div>
		 
	
		<div id="container">
			<a title="take me away">
				<div class="absolute btn_div" id="shell" title="take me away"></div>
			</a>
			<div id="boardImg">
				<a id="startBtn" onclick="plusSlides(1)">Start</a>	
				
				<div id="arrow">
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>
				</div>
			</div>
			
			<div id="details">
				<button id="showmore">Show Details</button>
			</div>
			<div id="video-board">
			<a id="bt1">Video Board</a>
			</div>
			
			<div id="storyBoard">
			<a id="storyBoard-bt">Story board</a>
			</div> 
			
			
		</div>
		<div id="imgPopup">
			<section class="popboard">

				<nav class="close-button">
					<a href="index.html">Close</a>
				</nav>		

			</section>
		</div>
		
		<div id="video-board-popup">
			<section class="popvideoboard">
				<nav class="close-button">
					<a href="index.html">Close</a>
				</nav>
				<div id="video">
					<iframe id="vdo" width="620" height="515"
					src="https://www.youtube.com/embed/dHSQAEam2yc" frameborder="0" allowfullscreen>
					</iframe>	
				</div>
			</section>
		</div>		
		<div id="story-board-popup">
			<section class="storyboard">
				<nav class="close-button">
					<a href="index.html">Close</a>
				</nav>
			</section>
		</div>		
		
	</body>

</html>