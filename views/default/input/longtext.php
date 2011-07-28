<?php

	/**
	 * 
	 * @uses $vars['value'] The current value, if any
	 * @uses $vars['js'] Any Javascript to enter into the input tag
	 * @uses $vars['internalname'] The name of the input field
	 * 
	 */

	global $tinymce_js_loaded;
	
	//$input = rand(0,9999);
	
	if (!isset($tinymce_js_loaded)) $tinymce_js_loaded = false;

	if (!$tinymce_js_loaded) {
		
		$plugins = get_plugin_setting("plugins", "tinymce_extended");
		
		$menu1 = get_plugin_setting("menu1", "tinymce_extended");
		
		if(empty($menu1)) $menu1 = elgg_echo("tinymce_extended:defaults:menu1");
		$menu2 = get_plugin_setting("menu2", "tinymce_extended");
		$menu3 = get_plugin_setting("menu3", "tinymce_extended");
		
		$valid_elements = get_plugin_setting("valid_elements", "tinymce_extended");
		if(empty($valid_elements)) $valid_elements = elgg_echo("tinymce_extended:defaults:valid_elements");
?>
<!-- include tinymce -->

<script language="javascript" type="text/javascript" src="<?php echo $vars['url']; ?>mod/tinymce_extended/vendors/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<!-- intialise tinymce, you can find other configurations here http://wiki.moxiecode.com/examples/tinymce/installation_example_01.php -->
<script language="javascript" type="text/javascript">
   tinyMCE.init({
    mode : "specific_textareas",
	editor_selector : "mceEditor",
	theme : "advanced",
	relative_urls : false,
	remove_script_host : false,
	plugins: "<?php echo $plugins;?>",
	<?php if(!empty($valid_elements)) echo "media_strict : false,"; ?>
	theme_advanced_buttons1 : "<?php echo $menu1;?>",
	theme_advanced_buttons2 : "<?php echo $menu2;?>",
	theme_advanced_buttons3 : "<?php echo $menu3;?>",
	theme_advanced_toolbar_location : "top",
	theme_advanced_toolbar_align : "left",
	theme_advanced_statusbar_location : "bottom",
	theme_advanced_resizing : true,
	extended_valid_elements : "<?php echo $valid_elements;?>"
});
function toggleEditor(id) {
if (!tinyMCE.get(id))
	tinyMCE.execCommand('mceAddControl', false, id);
else
	tinyMCE.execCommand('mceRemoveControl', false, id);
}
</script>
<?php

		$tinymce_js_loaded = true;
	}

?>

<textarea class="input-textarea mceEditor" name="<?php echo $vars['internalname']; ?>" <?php echo $vars['js']; ?>><?php echo htmlentities($vars['value'], null, 'UTF-8'); ?></textarea> 
<div class="toggle_editor_container"><a class="toggle_editor" href="javascript:toggleEditor('<?php echo $vars['internalname']; ?>');"><?php echo elgg_echo('tinymce_extended:remove'); ?></a></div>

<script type="text/javascript">
	$(document).ready(function() {
		$('textarea').parents('form').submit(function() {
			tinyMCE.triggerSave();
		});
	});
</script>