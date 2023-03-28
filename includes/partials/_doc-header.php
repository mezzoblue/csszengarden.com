<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
	<meta charset="utf-8">
	<title><?php echo $pageHead["title"]; ?></title>

	<link rel="stylesheet" media="screen" href="/content/content.css?v=27mar2023">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo $zenUrls["zen-rss"]; ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Dave Shea">
	<meta name="description" content="<?php echo $pageHead["description"]; ?>">
	<meta name="robots" content="all">

<?php if (isset($typekitId)) { ?>
	<script src="http://use.typekit.net/<?php echo $typekitId; ?>.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
<?php } ?>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Nunito+Sans:wght@200;400;700;900&family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">

</head>

<body id="css-zen-garden" <?php

	if (isset($pageHead["class"])) {
		echo " class=\"page-" . $pageHead["class"] . "\"";
	}

?>>
<div class="page-wrapper">
