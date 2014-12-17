<!doctype html>
<html>
	<head>
		<title>Kentéken | home</title>		
		<Meta charset=utf-8>
		<meta name=description content="">
		<link rel=stylesheet href="../css/index.css">
		<link rel="icon" href="../media/favicon.ico" type="image/x-icon" />
		<style>
			.box1 {
				background-color:#009ACE;
				float:left;
				overflow:auto;
				margin:3px;
				padding:3px;
				}
		</style>
	</head>
	<body id="tab3"> 
		<?php
			if(isset($_POST['inloggen']))
				{
					Include("login.php");
				}
			Include("../pages/header.php");
		?>
		<div style="padding:0% 0% 30% 2.5%">
			<div class="box1">
				<img id="myImage" onclick="changeImage()" src="../media/pic_bulboff.gif" width="100" height="180">

				<p>Klik op de lamp om hem aan en uit te zetten</p>

				<script>
					function changeImage() {
						var image = document.getElementById('myImage');
						if (image.src.match("bulbon")) {
							image.src = "../media/pic_bulboff.gif";
						} else {
							image.src = "../media/pic_bulbon.gif";
						}
					}
				</script>
			</div>
			<div class="box1">
				<h1>My First JavaScript</h1>

				<button type="button"
				onclick="document.getElementById('date').innerHTML = Date()">
				Click me to display Date and Time.</button>

				<p id="date"></p>
			</div>
			<div class="box1">				
				<button type="button" onclick="myFunction()">Click Me!</button>

				<p id="hallo" style="font-family: Courier">Hello JavaScript!</p>

				<script>
					function myFunction() { 
						document.getElementById("hallo").innerHTML = "Daaag JavaScript!";
					}
				</script>
			</div>
		</div>
		<?php
			Include("../pages/footer.php");
		?>
	</body>
</html>