<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
	<title>TranceFurs IRC - Just relax...</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="page">
		<div id="header">
			<div id="title">
				<h1><a href="/index.php?page=home">TranceFurs</a></h1>
			</div>
		</div>
		<?php
		require_once('navigation.php');		
		echo '<div id="content">';
			if($currentPage == 'home') {
				require_once($includes.'home.php');
			} else {
				if( (!file_exists($includes.$currentPage.'.php')) ) {
					echo('Whoops! Something went wrong while I was making the page... Uh, help?');
				} else {
					if(file_exists($includes.$currentPage.'.php')) require_once $includes.$currentPage.'.php';
				};
			};
		echo '</div>';
		?>
		<div id="footer">
			<div style="float:left;">
				<a href="https://plus.google.com/communities/110867674115296785430" title="Join us on g+" target="_blank"><img src="images/google_plus_32.png" alt="Joins us on g+"/></a> 
				<a href="http://kanthorne.net" title="Website by kanthorne.net" target="_blank"><img src="images/kanthorne_32.png" alt="Website by kanthorne.net"/></a> 
			</div>
			<div style="float:right;">
				<?php
				echo 'Copyright &copy; 2013 - '.date("Y").' TranceFurs';
				echo '<br />';
				echo 'v1.0.1';
				?>
			</div>
		</div>	<!-- ./footer -->
	</div>	<!-- ./page -->
</body>
</html>
