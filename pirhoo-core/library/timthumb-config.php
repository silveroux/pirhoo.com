<?php

	require_once("./pirhoo/functions.php");

	define ('ALLOW_EXTERNAL', TRUE);
	define ('FILE_CACHE_ENABLED', TRUE);
	define ('FILE_CACHE_DIRECTORY', is_cctrl() ? $_SERVER["TMPDIR"] : "../cache/");

	$ALLOWED_SITES = array("branchetonsonotone.com", "oeildupirate.com", "pirhoo.dev", "127.0.0.1");

?>