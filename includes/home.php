<!-- Stats for the main #TranceFurs channel -->
<div class="sidebar">
	<?php
		require_once('stats/botstats.global.template.html');
	?>
</div>

<!-- The about paragraph for TranceFurs.net -->
<div id="about">
	<h3>Welcome to TranceFurs</h3>
	<p>Welcome to TranceFurs. Just lay back and relax, you know why you're hear, slipping nice and deep now...</p>
</div>

<!--News Section-->
<?php
//Pull any webpage from the news folder and include each one in date order, newest first.
$newsarray = glob("news/*.html");
usort($newsarray, create_function('$a,$b', 'return filemtime($b) - filemtime($a);'));

foreach ($newsarray as $filename) {
	echo '<hr>';
	require_once($filename);
}
?>

