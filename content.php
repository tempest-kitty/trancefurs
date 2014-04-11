<!DOCTYPE HTML>
<html>
<head>
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
				<a href="http://kanthorne.net" title="Website produced by Kanibal Thorne" target="_blank"><img src="images/mcor4472_32.png"/> Website by Kanibal Thorne</a> 
			</div>
			<div style="float:right;">
				<?php
				echo 'Copyright &copy; 2013 - '.date("Y").' TranceFurs';
				echo '<br />';
				echo 'v0.4.2';
				?>
			</div>
		</div>	<!-- ./footer -->
	</div>	<!-- ./page -->
</body>
</html>
