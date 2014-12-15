<!-- The about paragraph for TranceFurs.net -->
<div id="about">
	<h3>Welcome to TranceFurs</h3>
	<p>Just lay back and relax, you know why you're hear, slipping nice and deep now...</p>
	<p>The TranceFurs network is dedicated to providing a safe hangout place for those in the furry community who have an interest in Hypnosis. From just relaxation, to the more kinky side, come and stop past for a chat.</p>
	<p>TranceFurs Network provides IRC servers, internet radio station, and even game servers for its members to use. We hope you enjoy your stay, (what you may remember of it) and hope you enjoy our services!.</p>
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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46286721-1', 'auto');
  ga('send', 'pageview');

</script>
