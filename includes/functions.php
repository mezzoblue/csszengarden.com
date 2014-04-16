<?php

	// shorthand alias for `htmlspecialchars` with the needed settings
	function hsc($string) {
		// avoid using `ENT_HTML5` for PHP 5.3 support
		return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
	}

	// return the Typekit kit identifier or NULL when not found in the CSS
	function getTypekitId($cssUrl) {
		$css = false;

		if (preg_match("/^http/", $cssUrl)) {
			$css = @file_get_contents($cssUrl);
		} else if (preg_match("/\d+\/\d+.css$/", $cssUrl)) {
			$path = realpath(__DIR__ . "/../" . $cssUrl);

			if (file_exists($path)) {
				$css = file_get_contents($path);
			}
		}

		if ($css !== false && preg_match("/\/\*\s*TYPEKIT_KIT_ID:\s*([0-9a-z]+)\s*\*\//i", $css, $matches)) {
			return $matches[1];
		} else {
			return null;
		}
	}

	// generate the list of designs in the site navigation
	function getDesignList($start, $count, $list, $i18nBy) {

		global $legacyMode;

		// flush return value
		$return = "";

		// check for language URL
		global $langURL;

		// begin at the already-established start of the list and loop down
		for ($i = $start - 1; $i >= ($start - $count); $i--) {

			$id = $list[$i][0];
			$designURL = $langURL . "/$id/"; // prepend for translation pages
			$designName = hsc($list[$i][1]);
			$designerName = hsc($list[$i][2]);
			$designerURL = hsc($list[$i][3]);

			// kick in output buffering
			ob_start();

			// pull in the correct partial template for design listings
			if (isset($legacyMode)) {
				include($SERVER_ROOT . "tmpl-design-link-legacy.php");
			} else {
				include($SERVER_ROOT . "tmpl-design-link.php");
			}

			// dump and close buffering
			$buffer = ob_get_contents();
			ob_end_clean();

			// add the buffer to return string if we're still within range
			if ($i >= 0) {
				$return .= $buffer;
			}

		}

		// send back the generated design list
		return($return);
	}






	// set defaults
	$numDesigns = 8; // number of designs to show in the nav
    $currentDesign = '214'; // What is the current main design?


	// check the query string to see if:
	//	 - a specific design has been requested with cssfile
	//	 - a specific page value been assigned for the navigation
	if ( isset($_GET["css"]) && !empty($_GET["css"]) ) {
		$currentDesign = $_GET["css"];
	}
	$thisPage = (intval($_GET["pg"]) > 0) ? intval($_GET["pg"]) : false;


	// if $_GET['css'] is not empty, assign it as the design to load
	// If numeric, prepare CSS url
	$currentStyleSheet = ( is_numeric($currentDesign) ) ? "/$currentDesign/$currentDesign.css" : $currentDesign;

	$typekitId = getTypekitId($currentStyleSheet);

	// determine where in the paging we should be
	if ($thisPage) {

		// if an explicit page is set, offset the design list starting point accordingly
		$listStart = (count($designList) - ($thisPage * $numDesigns));

		// set our lower bounds
		if ($listStart < 0) $listStart = 0;

	} else {

		// if no page is specified, set a default start point for the design list
		$listStart = count($designList);

	}

?>
