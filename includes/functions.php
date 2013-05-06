<?php


	include($SERVER_ROOT . "includes/masterlist.php");



	// generate the list of designs in the site navigation
	function getDesignList($start, $count, $list) {
	
		// flush return value
		$return = "";

		// begin at the already-established start of the list and loop down
		for ($i = $start - 1; $i >= ($start - $count); $i--) {
	
			$id = $list[$i][0];
			$designURL = "?cssfile=/$id/$id.css";
			$designName = $list[$i][1];
			$designerName = $list[$i][2];
			$designerURL = $list[$i][3];
			
			// kick in output buffering
			ob_start();
?>
					<li>
						<a href="<?= $designURL ?>" class="design-name"><?= $designName ?></a> by
						<a href="<?= $designerURL ?>" class="designer-name"><?= $designerName ?></a>
					</li>
<?	
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
	
	
	// check the query string to see if:
	//	 - a specific design has been requested with cssfile
	//	 - a specific page value been assigned for the navigation
	$loadCSS = $_GET["cssfile"];
	$thisPage = intval($_GET["page"]);
	
	
	// if cssfile is not empty, assign it as the design to load
	// if it is, assign 001
	if ($loadCSS) {
		$currentDesign = $loadCSS;
	} else {
		$currentDesign = "001/001.css";
	}
	

		
	
	
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