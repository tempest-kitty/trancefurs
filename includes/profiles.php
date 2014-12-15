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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46286721-1', 'auto');
  ga('send', 'pageview');

</script>
