<!doctype html>
<html>
	<head>
		<title>Kentéken | home</title>		
		<Meta charset=utf-8>
		<meta name=description content="">
		<link rel=stylesheet href="../css/index.css">
		<link rel="icon" href="../media/favicon.ico" type="image/x-icon" />
		<style>
			.menuitem3			{
				background-color:rgba(125,200,200,1);
				border:solid;
				border-width:.1em;
				border-radius:13px 13px 0 0;
				margin-bottom: -1px;
				border-bottom: 1px solid rgba(125,200,200,1);
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
			Include("../pages/construction.php");
		?>
		<div style="padding:0% 0% 30% 2.5%">
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
		<?php
			Include("../pages/footer.php");
		?>
	</body>
</html>
 
