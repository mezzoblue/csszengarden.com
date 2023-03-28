<?php

	// local page variables
	global $pg, $bottomNav;
	$bottomNav = true;

	// import URLs
	include($_SERVER['DOCUMENT_ROOT'] . "/includes/urls.php");

	// auxilliary page content
	// (English for now, set up for localization just in case)
	include($_SERVER['DOCUMENT_ROOT'] . "/lang/en/alldesigns.php");

	// import common functions & the design list
	include($_SERVER['DOCUMENT_ROOT'] . '/includes/masterlist.php');
	include($_SERVER['DOCUMENT_ROOT'] . "/includes/functions.php");

	// render partials & page content
	include($_SERVER['DOCUMENT_ROOT'] . "/includes/partials/_doc-header.php");
	include($_SERVER['DOCUMENT_ROOT'] . "/includes/partials/_page-header.php");
	include($_SERVER['DOCUMENT_ROOT'] . "/includes/partials/_page-design-list.php");
	include($_SERVER['DOCUMENT_ROOT'] . "/includes/partials/_page-sidebar.php");
	include($_SERVER['DOCUMENT_ROOT'] . "/includes/partials/_doc-footer.php");

?>
