<?php
	//For each entry in the navigation array make a button and bold it if we are on that page.
	//If 'SERVERS' is a button in the array then it will look for 'servers.php' in the includes.
	echo ('<div id="navigation">');
	foreach ($navigation as $page) {
            if ($currentPage == strtolower($page)) {
				echo ('<div class="button" id="activetab">');
				echo ('<a href="/index.php?page='.strtolower($page).'">'.$page.'</a>');
			} else {
				echo ('<div class="button">');
				echo ('<a href="/index.php?page='.strtolower($page).'">'.$page.'</a>');
			};	
		echo ('</div>');
	};
	echo ('</div>');
?>
