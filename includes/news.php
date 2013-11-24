<h1>News</h1>
<?php
//Pull any text file from the news folder and include each one in date order, newest first.
$newsarray = glob("news/*.txt");
usort($newsarray, create_function('$a,$b', 'return filemtime($b) - filemtime($a);'));

foreach ($newsarray as $filename) {
	echo '<hr>';
	require_once($filename);
}
?>
