<?php


require_once(dirname(dirname(dirname(dirname(dirname(dirname(dirname(dirname(dirname(dirname(dirname(__FILE__))))))))))) . "/engine/start.php");
gatekeeper();

global $CONFIG;

//Site root dir
define('DIR_ROOT',		$CONFIG->dataroot . "tinymce_storage/" . $CONFIG->site_guid ."");

define('USER_DIR_PART',		"/user/" . get_loggedin_userid());
define('USER_DIR_ROOT',		$CONFIG->dataroot . "tinymce_storage". USER_DIR_PART);

// check if storage folder exists
if(!is_dir($CONFIG->dataroot . "tinymce_storage")){
	mkdir($CONFIG->dataroot . "tinymce_storage");
}

if(!is_dir($CONFIG->dataroot . "tinymce_storage/user")){
	mkdir($CONFIG->dataroot . "tinymce_storage/user");
}

if(!is_dir(DIR_ROOT)){
	mkdir(DIR_ROOT);
}

if(!is_dir(USER_DIR_ROOT)){
	mkdir(USER_DIR_ROOT);
}

//Images dir (root relative)
define('DIR_IMAGES',	'/images');
//Files dir (root relative)
define('DIR_FILES',		'/files');

// create default dirs
if(!is_dir(DIR_ROOT . DIR_IMAGES)){
	mkdir(DIR_ROOT.DIR_IMAGES);
}
if(!is_dir(DIR_ROOT . DIR_FILES)){
	mkdir(DIR_ROOT.DIR_FILES);
}

// create default user dirs
if(!is_dir(USER_DIR_ROOT . DIR_IMAGES)){
	mkdir(USER_DIR_ROOT.DIR_IMAGES);
}
if(!is_dir(USER_DIR_ROOT . DIR_FILES)){
	mkdir(USER_DIR_ROOT.DIR_FILES);
}

//Width and height of resized image
define('WIDTH_TO_LINK', 500);
define('HEIGHT_TO_LINK', 500);

//Additional attributes class and rel
define('CLASS_LINK', 'lightview');
define('REL_LINK', 'lightbox');