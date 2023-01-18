<?php

	global $lang, $head, $intro, $main, $footer, $sidebar, $foot;

	// import URLs
	include($_SERVER['DOCUMENT_ROOT'] . "/includes/urls.php");

	// import language file
	include($_SERVER['DOCUMENT_ROOT'] . "/includes/lang.php");

	// import common functions & the design list
	include($_SERVER['DOCUMENT_ROOT'] . '/includes/masterlist.php');
	include($_SERVER['DOCUMENT_ROOT'] . "/includes/functions.php");

	// import the HTML template
	include($_SERVER['DOCUMENT_ROOT'] . "/includes/tmpl.php");

?>
