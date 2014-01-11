<?php
//Variables and global includes first
	$error='Whoops! Something went wrong while I was making the page... Uh, help?';
	require_once('config.php');

//Establish which page we are on and if none then we are home
	if( !isset($_GET["page"]) || ($_GET["page"] == '') )
	{
		$location=$home;
	}
	else
		$location=$_GET["page"];
		
	$currentPage = strip_tags($location);
	
//Now lets buid it! Header first with the Navigation Bar inside.
	require_once($includes.'header.php');
		
//Content Section --START--
	echo '<div id="content">';
		if($currentPage===$home)
		{
			require_once($includes.'home.php');
		}
		else
			if( (!file_exists($includes.$currentPage.'.php')) && (!file_exists($includes.$currentPage.'.html')) )
			{
				echo($error);
			} else {
				if(file_exists($includes.$currentPage.'.php')) require_once $includes.$currentPage.'.php';
				if(file_exists($includes.$currentPage.'.html')) require_once $includes.$currentPage.'.html';
			}			
	echo '</div>';
//Content Section --END--

//And finally lets tack the footer on to the bottom
	require_once($includes.'footer.php');
?>
