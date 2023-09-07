<?php


    // import URLs
    include($_SERVER['DOCUMENT_ROOT'] . "/includes/urls.php");

	// import language file
	include($_SERVER['DOCUMENT_ROOT'] . "/lang/en.php");

	// import common functions & the design list
	include($_SERVER['DOCUMENT_ROOT'] . '/includes/masterlist.php');
	include($_SERVER['DOCUMENT_ROOT'] . "/includes/functions.php");

	// reset current stylesheet to the example provided
	$currentStyleSheet = "style.css";

    // import the HTML template
	include($_SERVER['DOCUMENT_ROOT'] . "/includes/tmpl.php");

?>
