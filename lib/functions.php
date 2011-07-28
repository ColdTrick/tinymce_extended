<?php 

	function tinymce_extended_extend_allowed_tags(){
		global $CONFIG;
		
		// Extend valid input elements
		if(isset($CONFIG->allowedtags) && is_array($CONFIG->allowedtags)){
			$allowedTags = $CONFIG->allowedtags;
			
			$ext_tags = get_plugin_setting("valid_elements", "tinymce_extended");
			
			if(empty($ext_tags)){
				$ext_tags = elgg_echo("tinymce_extended:valid_elements");
			}
			
			if(!empty($ext_tags)){
				$ext_tags_array = split(",", $ext_tags);
				
				$extraTags = array();
				
				foreach($ext_tags_array as $fulltag){
					$fulltag = trim(str_replace(array("[", "]"), " ", $fulltag));
					$fulltag = explode(" ", $fulltag);
					
					$tag = $fulltag[0];
					$opts = explode("|", $fulltag[1]);
					
					if(!array_key_exists($tag, $allowedTags)){
						$extraTags[$tag] = array();
						
						foreach($opts as $opt){
							$extraTags[$tag][$opt] = array();
						}
					} else {
						foreach($opts as $opt){
							if(!array_key_exists($opt, $allowedTags[$tag])){
								$allowedTags[$tag][$opt] = array();
							}
						}
					}
				}
			}
			
			$CONFIG->allowedtags = array_merge($allowedTags, $extraTags);
		}
	}

	function tinymce_extended_extend_htmlawed_config(){
		global $CONFIG;
		
		// Extend valid input elements
		if(isset($CONFIG->htmlawed_config) && is_array($CONFIG->htmlawed_config)){
			$ext_tags = get_plugin_setting("valid_elements", "tinymce_extended");
			
			if(empty($ext_tags)){
				$ext_tags = elgg_echo("tinymce_extended:valid_elements");
			}
			
			if(!empty($ext_tags)){
				$ext_tags_array = split(",", $ext_tags);
				
				$elements = "*";
				
				foreach($ext_tags_array as $fulltag){
					$fulltag = trim(str_replace(array("[", "]"), " ", $fulltag));
					$fulltag = explode(" ", $fulltag);
					
					$tag = $fulltag[0];
					$opts = explode("|", $fulltag[1]);
					
					$elements .= "+" . $tag;
				}
				
				$CONFIG->htmlawed_config["elements"] = $elements;
			}
		}
	}


?>