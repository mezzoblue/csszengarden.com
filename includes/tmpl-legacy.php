<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>
	<meta charset="utf-8">
	<meta name="author" content="Dave Shea" />
	<meta name="keywords" content="design, css, cascading, style, sheets, xhtml, graphic design, w3c, web standards, visual, display" />
	<meta name="description" content="<?php echo $head["description"]; ?>" />
	<meta name="robots" content="all" />

	<title><?php echo $head["title"]; ?></title>

	<!-- to correct the unsightly Flash of Unstyled Content. http://www.bluerobot.com/web/css/fouc.asp -->
	<script type="text/javascript"></script>
	
	<style type="text/css" media="all">
		@import "<?php echo $currentStyleSheet; ?>";
	</style>
	
</head>

<!--

<?php echo $head["comment"]; ?>

-->

<body id="css-zen-garden">

<div id="container">
	<div id="intro">
		<div id="pageHeader">
			<h1><span><?php echo $intro["h1"]; ?></span></h1>
			<h2><span><?php echo $intro["h2"]; ?></span></h2>
		</div>

		<div id="quickSummary">
			<p class="p1"><span><?php echo $intro["summary-p1"]; ?></span></p>
			<p class="p2"><span><?php echo $intro["summary-p2"]; ?></span></p>
		</div>

		<div id="preamble">
			<h3><span><?php echo $intro["preamble-h3"]; ?></span></h3>
			<p class="p1"><span><?php echo $intro["preamble-p1"]; ?></span></p>
			<p class="p2"><span><?php echo $intro["preamble-p2"]; ?></span></p>
			<p class="p3"><span><?php echo $intro["preamble-p3"]; ?></span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="explanation">
			<h3><span><?php echo $main["explanation-h3"]; ?></span></h3>
			<p class="p1"><span><?php echo $main["explanation-p1"]; ?></span></p>
			<p class="p2"><span><?php echo $main["explanation-p2"]; ?></span></p>
		</div>

		<div id="participation">
			<h3><span><?php echo $main["participation-h3"]; ?></span></h3>
			<p class="p1"><span><?php echo $main["participation-p1"]; ?></span></p>
			<p class="p2"><span><?php echo $main["participation-p2"]; ?></span></p>
			<p class="p3"><span><?php echo $main["participation-p3"]; ?></span></p>
		</div>

		<div id="benefits">
			<h3><span><?php echo $main["benefits-h3"]; ?></span></h3>
			<p class="p1"><span><?php echo $main["benefits-p1"]; ?></span></p>
		</div>

		<div id="requirements">
			<h3><span><?php echo $main["requirements-h3"]; ?></span></h3>
			<p class="p1"><span><?php echo $main["requirements-p1"]; ?></span></p>
			<p class="p2"><span><?php echo $main["requirements-p2"]; ?></span></p>
			<p class="p3"><span><?php echo $main["requirements-p3"]; ?></span></p>
			<p class="p4"><span><?php echo $main["requirements-p4"]; ?></span></p>
			<p class="p5"><span><?php echo $main["requirements-p5"]; ?></span></p>
		</div>

		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="Check the validity of this site&#8217;s XHTML">xhtml</a> &nbsp; 
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="Check the validity of this site&#8217;s CSS">css</a> &nbsp; 
			<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="View details of the license of this site, courtesy of Creative Commons.">cc</a> &nbsp;
			<a href="http://mezzoblue.com/zengarden/faq/#s508" title="Read about the accessibility of this site">508</a> &nbsp;
			<a href="http://www.mezzoblue.com/zengarden/faq/#aaa" title="Read about the accessibility of this site">aaa</a>
		</div>

	</div>


	<div id="linkList">
		<!--extra div for flexibility - this list will probably be the trickiest spot you'll deal with -->
		<div id="linkList2">

		<!-- If you're wondering about the extra &nbsp; at the end of the link, it's a hack to meet WCAG 1 Accessibility. -->
		<!-- I don't like having to do it, but this is a visual exercise. It's a compromise. -->
			<div id="lselect">
				<h3 class="select"><span><?php echo $sidebar["design-selection-h3"]; ?></span></h3>
				<!-- list of links begins here. There will be no more than 8 links per page -->
				<ul>
<?php
echo getDesignList($listStart, $numDesigns, $designList, $sidebar["design-selection-by"]);
?>
				</ul>
			</div>

			<div id="larchives">
				<h3 class="archives"><span><?php echo $sidebar["design-archives-h3"]; ?></span></h3>
				<ul>
<?php
	if ($listStart > $numDesigns) {
?>
					<li><a href="?cssfile=<?php echo $currentDesign ?>&amp;page=<?php echo $thisPage + 1 ?>" title="View next set of designs. AccessKey: n" accesskey="n"><span class="accesskey">n</span>ext designs &raquo;</a></li>
<?php
	}

	if ($thisPage > 0) {
?>

					<li><a href="?cssfile=<?php echo $currentDesign ?>&amp;page=<?php echo $thisPage - 1 ?>" title="View previous set of designs. AccessKey: p" accesskey="p">&laquo; <span class="accesskey">p</span>revious designs</a></li>

<?php
	}
?>
					<li><a href="<?php echo $zenUrls["zen-view-all"]; ?>" title="<?php echo $sidebar["design-archives-viewall-title"]; ?>" accesskey="w"><?php echo $sidebar["design-archives-viewall-text"]; ?></a></li>
				</ul>
			</div>

			<div id="lresources">
				<h3 class="resources"><span><?php echo $sidebar["design-resources-h3"]; ?>:</span></h3>
				<ul>
					<li><a href="<?php echo $currentStyleSheet ?>" title="<?php echo $sidebar["view-css-title"]; ?>" accesskey="v"><?php echo $sidebar["view-css-text"]; ?></a></li>
					<li><a href="<?php echo $zenUrls["zen-resources"]; ?>" title="<?php echo $sidebar["css-resources-title"]; ?>" accesskey="r"><?php echo $sidebar["css-resources-text"]; ?></a></li>
					<li><a href="<?php echo $zenUrls["zen-faq"]; ?>" title="<?php echo $sidebar["zen-faq-title"]; ?>" accesskey="q"><?php echo $sidebar["zen-faq-text"]; ?></a></li>
					<li><a href="<?php echo $zenUrls["zen-submit"]; ?>" title="<?php echo $sidebar["zen-submit-title"]; ?>" accesskey="s"><?php echo $sidebar["zen-submit-text"]; ?></a></li>
					<li><a href="<?php echo $zenUrls["zen-translations"]; ?>" title="<?php echo $sidebar["zen-translations-title"]; ?>" accesskey="t"><?php echo $sidebar["zen-translations-text"]; ?></a></li>
				</ul>
			</div>
		</div>
	</div>


</div>

<?php echo $foot["comment"]; ?>
<div id="extraDiv1"><span></span></div><div id="extraDiv2"><span></span></div><div id="extraDiv3"><span></span></div>
<div id="extraDiv4"><span></span></div><div id="extraDiv5"><span></span></div><div id="extraDiv6"><span></span></div>

</body>
</html>
