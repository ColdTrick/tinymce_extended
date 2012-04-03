<?php 

$plugin = $vars["entity"];

if(empty($plugin->plugins)){
	$plugin->plugins = elgg_echo("tinymce_extended:defaults:plugins");
}

if(empty($plugin->menu1)){
	$plugin->menu1 = elgg_echo("tinymce_extended:defaults:menu1");
}
if(empty($plugin->valid_elements)){
	$plugin->valid_elements = elgg_echo("tinymce_extended:defaults:valid_elements");
}

echo elgg_view_module("info", "", elgg_echo("tinymce_extended:settings"));

echo elgg_view_module("info", elgg_echo("tinymce_extended:settings:plugins"),elgg_view("input/text", array("name" => "params[plugins]", "value" => $plugin->plugins)));

echo elgg_view_module("info", elgg_echo("tinymce_extended:settings:menu1"),elgg_view("input/text", array("name" => "params[menu1]", "value" => $plugin->menu1)));

echo elgg_view_module("info", elgg_echo("tinymce_extended:settings:menu2"),elgg_view("input/text", array("name" => "params[menu2]", "value" => $plugin->menu2)));

echo elgg_view_module("info", elgg_echo("tinymce_extended:settings:menu3"),elgg_view("input/text", array("name" => "params[menu3]", "value" => $plugin->menu3)));

echo elgg_view_module("info", elgg_echo("tinymce_extended:settings:valid_elements"),elgg_view("input/text", array("name" => "params[valid_elements]", "value" => $plugin->valid_elements)));

echo elgg_view_module("info", "", elgg_echo("tinymce_extended:settings:more_info"));
