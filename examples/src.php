<?php


    // import URLs
    include($SERVER_ROOT . "../includes/urls.php");

	// import language file
	include($SERVER_ROOT . "../lang/en.php");

	// import common functions & the design list
	include($SERVER_ROOT . '../includes/masterlist.php');
	include($SERVER_ROOT . "../includes/functions.php");

	// reset current stylesheet to the example provided
	$currentStyleSheet = "style.css";

    // import the HTML template
	include($SERVER_ROOT . "../includes/tmpl.php");

?>
