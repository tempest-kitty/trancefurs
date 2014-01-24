<?php
//Require anything we need
	require_once('config.php');
	
//Establish where we are
	if( !isset($_GET["page"]) || ($_GET["page"] == '') ) {
		$location = 'home';
	} else {
		$currentPage = strip_tags($_GET["page"]);
	};

//Attach the Header
	require_once($includes.'header.php');
		
//Content Section --START--
	echo '<div id="content">';
		if($currentPage == 'home') {
			require_once($includes.'home.php');
		} else {
			if( (!file_exists($includes.$currentPage.'.php')) && (!file_exists($includes.$currentPage.'.html')) ) {
				echo('Whoops! Something went wrong while I was making the page... Uh, help?');
			} else {
				if(file_exists($includes.$currentPage.'.php')) require_once $includes.$currentPage.'.php';
				if(file_exists($includes.$currentPage.'.html')) require_once $includes.$currentPage.'.html';
			};
		};
	echo '</div>';
//Content Section --END--

//Attach the Footer
	require_once($includes.'footer.php');
?>
