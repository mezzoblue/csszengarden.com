<?php

	// loop through content lists if they exist
	if(isset($pageContentList)) {

		foreach($pageContentList as $content) {

			// deal with nested array content
			if (is_array($content)) {
				foreach ($content as $key=>$value) {

					// choose the right markup depending on key
					if ($key === "h3") { ?>
	<h3><?php echo $value; ?></h3>
<?php } elseif ($key === "h4") { ?>
	<h4><?php echo $value; ?></h4>
<?php } elseif ($key === "h5") { ?>
	<h5><?php echo $value; ?></h5>
<?php } elseif ($key === "code") { ?>
	<code><?php echo $value; ?></code>
<?php } else { ?>
	<p><?php echo $value; ?></p>
<?php }

					$key = null;
				}

			// just pass through if not an array
			} else {
				echo $content;
			}
		}
	}


?>


	<article role="main">

	</article>
