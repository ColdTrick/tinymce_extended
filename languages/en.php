<?php

$english = array(
	
	// Settings
	'tinymce_extended:settings' => "Configure TinyMCE settings",
	'tinymce_extended:settings:plugins' => "comma separated list of extra plugins that need to be loaded",
	'tinymce_extended:settings:menu1' => "First menu buttons",
	'tinymce_extended:settings:menu2' => "Second menu buttons",
	'tinymce_extended:settings:menu3' => "Third menu buttons",
	'tinymce_extended:settings:valid_elements' => "Configure valid elements",
	'tinymce_extended:settings:more_info' => "More info about default configurable buttons and plugins can be found here <a href='http://www.tinymce.com/wiki.php/Configuration' target='_blank'>http://www.tinymce.com/wiki.php/Configuration</a>",

	'tinymce_extended:settings:htmlawed:schemes' => "Extend the htmlawed schemes with the following",
	
	// Defaults (no need to change when making new language file)
	'tinymce_extended:defaults:plugins' => "lists,spellchecker,autosave,fullscreen,paste",
	'tinymce_extended:defaults:menu1' => "bold,italic,underline,separator,strikethrough,bullist,numlist,undo,redo,link,unlink,image,blockquote,code,pastetext,pasteword,more,fullscreen",
	'tinymce_extended:defaults:valid_elements' => "a[name|href|target|title|onclick],img[class|src|border=0|alt|title|hspace|vspace|width|height|align|onmouseover|onmouseout|name|style],hr[class|width|size|noshade],font[face|size|color|style],span[class|align|style]",
	
);
				
add_translation("en",$english);
