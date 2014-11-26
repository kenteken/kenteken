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
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-57154028-1', 'auto');
		ga('send', 'pageview');
	</script>
</header>
<div class="back">