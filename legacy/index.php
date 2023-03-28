<?php

	$legacyMode = true;

	// import URLs
	include($_SERVER['DOCUMENT_ROOT'] . "/includes/urls.php");

	// import language file
	include($_SERVER['DOCUMENT_ROOT'] . "/lang/en-legacy.php");

	// import common functions & the design list
	include($_SERVER['DOCUMENT_ROOT'] . '/includes/masterlist.php');
	include($_SERVER['DOCUMENT_ROOT'] . "/includes/functions.php");

	// import the XHTML template
	include($_SERVER['DOCUMENT_ROOT'] . "/includes/tmpl-legacy.php");


?>
