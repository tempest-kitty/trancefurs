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
	<p>Come and join us on the IRC <a href="index.php?page=servers"><b>SERVERS</b></a> or find us on g+ <a href="https://plus.google.com/u/0/communities/110867674115296785430" target="_blank" title="Private Group, but do ask about us!"><img src="/images/google_plus_32.png" /></a></p>
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

