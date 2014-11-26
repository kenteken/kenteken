<header>
	<div class=header>
		<div class=head1>
			<div>
				<img
				class="logo"
				src="../media/kenteken.png" 
				alt="Foto van het Kenteken" 
				title="Je moeder"
				>
			</div>
			<div class=login>
				<form method="post" action="index.php">
					<label for="username">Username </label><input class="box" type="text" id="username" name="username" placeholder="Username" required/>
					<label for="password">Password </label><input class="box" type="password" id="password" name="password" placeholder="Password" required/>
					<!--<input class=inloggen type="submit" name="inloggen" value="inloggen"/>-->
					<a class=inloggen href="../pages/lol.html">Login</a>
				</form>
			</div>
		</div>
		<div class=head2>
				<ul class=menu>
				<?php
				Include("../pages/menu.php");
				?>
				</ul>
		</div>
	</div>
		<?php include_once("../pages/analyticstracking.php") ?>
</header>
<div class="back">