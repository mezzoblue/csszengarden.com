<?php


	/* set up content header, if one exists */
	if(isset($pageIntro)) {
?>
	<header class="page-banner">
		<h1><?php echo $pageIntro["h1"]; ?></h1>
		<h2><?php echo $pageIntro["h2"]; ?></h2>
		<a href="/" class="return"><span><?php echo $pageIntro["return"]; ?></span></a>
	</header>
<?php
	}
?>

<div class="page-body">
	<div class="page-main" role="main">
