<?php

	echo '<h1>Profiles</h1>';
	echo "These profiles are listed alphabetically and are subitted by our members who contribute to TranceFurs and get up to things you might like to hear about";
	foreach (glob("members/*.html") as $filename) {
		echo ('<div class="profiles">');
		echo ('<div class="notebox" style="width:90%;">');
		include($filename);
		echo ('</div>');
		echo ('</div>');
	}
?>
