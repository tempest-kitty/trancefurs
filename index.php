<?php
require_once('config.php');	//Load config variables

if( !isset($_GET["page"]) || ($_GET["page"] == '') ) {	//Establish where we are and if this is a valid location
	$currentPage = 'home';
} else {
	$currentPage = strip_tags($_GET["page"]);
};

require_once('content.php');
?>
