<?php

require __DIR__."/ru_main.php";

foreach(array('blog','blog_copy','bookmarks','bottom_bar','categories',
	'chili','custom_index','dashboard','developers','diagnostics','dokuwiki',
	'embed','etherpad','event_calendar','event_manager','extended_tinymce',
	'externalpages','file','garbagecollector','group_tools','groups','hypeForum',
	'hypeFramework','hypeGallery','hypeInbox','hypeStyler','invitefriends',
	'likes','logbrowser','logrotate','members','messageboard','messages',
	'mobilize','notifications','nubesoplayer','pages','polls','profile',
	'reportedcontent','search','tabbed_profile','tagcloud','thewire','tidypics',
	'tidypicsExt','tinymce','twitter','twitter_api','uservalidationbyemail',
	'webinar','widget_manager') as $module)
{
	require __DIR__."/modules/{$module}.php";
}