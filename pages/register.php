<!doctype html>
<html>
	<head>
		<title>Kentéken | news</title>		
		<Meta charset=utf-8>
		<meta name=description content="">
		<link rel=stylesheet href="../css/index.css">
		<link rel="icon" href="../media/favicon.ico" type="image/x-icon" />
		<style>
		.reg {
		background-color:#FF0;
		border-radius:13px;
		border-bottom-style:solid;
		margin:30px;
		padding:50px;
		background-color:#2096E1;
		}
		</style>
		</head>
	<body> 
		<?php
			if(isset($_POST['inloggen']))
				{
					Include("login.php");
				}
			Include("../pages/header.php");
		?>
		<div style="padding:0% 0% 30% 0">
			<div class="reg" style="width: 25%; margin-left: auto; margin-right: auto ;">
				<form method="post" action="index.php">
					<table>
						<tr>
							<td><label for="username">Username </label></td>
							<td><input class="box" type="text" id="username" name="username" placeholder="Username" required/></td>
							<td></td>				
						</tr>
						<tr>
							<td><label for="password">Password </label></td>
							<td><input class="box" type="password" id="password" name="password" placeholder="Password" required/></td>
						</tr>
						<tr style="text-align: right;">
						<td></td>
							<td><input class=inloggen type="submit" name="inloggen" value="register"/></td>			
						</tr>
					</table>
				</form>
			</div>
		</div>
		<?php
			Include("../pages/footer.php");
		?>
	</body>
</html>
 
