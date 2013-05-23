<?php

	$legacyMode = true;

	// import URLs
	include($SERVER_ROOT . "../includes/urls.php");

	// import language file
	include($SERVER_ROOT . "../lang/en-legacy.php");

	// import common functions & the design list
	include($SERVER_ROOT . '../includes/masterlist.php');
	include($SERVER_ROOT . "../includes/functions.php");

	// import the XHTML template
	include($SERVER_ROOT . "../includes/tmpl-legacy.php");


?>