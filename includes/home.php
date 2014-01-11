<!-- Stats for the main #TranceFurs channel -->
<div class="sidebar">
	<?php
		require_once('stats/botstats.global.template.html');
	?>
</div>

<!-- The about paragraph for TranceFurs.net -->
<div id="about">
	<h3>Welcome to TranceFurs</h3>
	<p><?php echo $about;?></p>
</div>

<h1>News</h1>
<?php
//Pull any webpage from the news folder and include each one in date order, newest first.
$newsarray = glob("news/*.hmtl");
usort($newsarray, create_function('$a,$b', 'return filemtime($b) - filemtime($a);'));

foreach ($newsarray as $filename) {
	echo '<hr>';
	require_once($filename);
}
?>

