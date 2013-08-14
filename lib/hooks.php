<?php

function tinymce_extended_htmlawed_config($hook_name, $entity_type, $return_value, $params){
	
	if(is_array($return_value)){
		// Extend valid input elements
		
		$ext_tags = elgg_get_plugin_setting("valid_elements", "tinymce_extended");
		
		if(empty($ext_tags)){
			$ext_tags = elgg_echo("tinymce_extended:defaults:valid_elements");
		}
		
		if(!empty($ext_tags)){
			$ext_tags_array = explode(",", $ext_tags);
			
			$elements = "*";
			
			foreach($ext_tags_array as $fulltag){
				$fulltag = trim(str_replace(array("[", "]"), " ", $fulltag));
				$fulltag = explode(" ", $fulltag);
				
				$tag = $fulltag[0];
				$opts = explode("|", $fulltag[1]);
				
				$elements .= "+" . $tag;
			}
			
			$return_value["elements"] = $elements;
		}
		
		$htmlawed_schemes = elgg_get_plugin_setting("htmlawed_schemes", "tinymce_extended");
		if(!empty($htmlawed_schemes)){
			
			$current_schemes = elgg_extract("schemes", $return_value, "*:http");
			
			$htmlawed_schemes = $current_schemes . "," . ltrim($htmlawed_schemes, ",");
			$return_value["schemes"] = $htmlawed_schemes;
		}
	}
	
	return $return_value;
}

function tinymce_extended_plugin_setting($hook_name, $entity_type, $return_value, $params) {
	static $shutdown_registered;
	
	if (!isset($shutdown_registered)) {
		if (!empty($params)  && is_array($params)) {
			if (($plugin = elgg_extract("plugin", $params)) && ($plugin->getID() == "tinymce_extended")) {
				
				register_shutdown_function("elgg_invalidate_simplecache");
				$shutdown_registered = true;
			}
		}
	}
}