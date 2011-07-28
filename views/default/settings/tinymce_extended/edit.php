<?php 
	if(empty($vars["entity"]->menu1)) $vars["entity"]->menu1 = elgg_echo("tinymce_extended:defaults:menu1");
	if(empty($vars["entity"]->valid_elements)) $vars["entity"]->valid_elements = elgg_echo("tinymce_extended:defaults:valid_elements");
?>
<p>

	<?php echo elgg_echo("tinymce_extended:settings");?>
	<br />
	<?php echo elgg_echo("tinymce_extended:settings:plugins");?>
	<?php echo elgg_view("input/text", array("internalname" => "params[plugins]", "value" => $vars["entity"]->plugins));?>
	
	<?php echo elgg_echo("tinymce_extended:settings:menu1");?>
	<?php echo elgg_view("input/text", array("internalname" => "params[menu1]", "value" => $vars["entity"]->menu1));?>
	
	<?php echo elgg_echo("tinymce_extended:settings:menu2");?>
	<?php echo elgg_view("input/text", array("internalname" => "params[menu2]", "value" => $vars["entity"]->menu2));?>
	
	<?php echo elgg_echo("tinymce_extended:settings:menu3");?>
	<?php echo elgg_view("input/text", array("internalname" => "params[menu3]", "value" => $vars["entity"]->menu3));?>
	
	<?php echo elgg_echo("tinymce_extended:settings:valid_elements");?>
	<?php echo elgg_view("input/text", array("internalname" => "params[valid_elements]", "value" => $vars["entity"]->valid_elements));?>
	<br />
	<br />
	<?php echo elgg_echo("tinymce_extended:settings:more_info");?>
</p>