TranceFurs
==========

Website for trancefurs.net

Change Log
==========
v0.2.0

-Removed duplicate include of config.php from the header.php after it's included on index.php

-Changed a lot of PHP includes to require_once because that's what the pro's do!
-Content box cosmetic changes. Darker background and defined edges of the content.

-Moved STATS to a footer link and added a RULES to the nav bar, made an icon

-Added 'breadcrumbs' style text to the site title for page headings

-Navigation is now an array in the config and builds the navigation bar as opposed to a huge manually written file

-Navigation tabs now showing graphically



v0.2.1

-Added a bit of safety in a debug that checks current page in index.php (Cheers Kreegen, I'm sure I'd have got there xD)

-Added a strip_tags to the $currentPage variable which makes it safe to print on pages. Code can't be slipped.

-Set the fonts to just Sans-Serif because it looks better (Arial probably)

-Lowered the glow effect on hyperlinks

-Tabs on the nav bar now work



v0.3.0

-Added the 'content' system to allow all pages to be edited without pages of writing. Simulating a database using variables...

-Changed loads of grahics and styling again. I'm not listing all of it because I was tinkering for hours and can't remember what I did

v0.4.0

-Updated the structure substantially to make it smoother, ackowledging it doesn't need to be as expandible as the initial set of variables allowed for.

-Updated a lot of the code to make plain text pages simpler and to make news and profile features more advanced, levelling out the spectrum across the site

v0.4.1

-Corrected a commit error sending the old index in place of the one with the updated structure

v0.4.2

-Corrected a heap more errors and things where the old unused variables hadn't been removed from the header and navigation pages

