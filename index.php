<?php


	// import common functions & the design list
	include($SERVER_ROOT . "includes/functions.php");


?><!DOCTYPE html >
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>css Zen Garden: The Beauty in CSS Design</title>

	<link rel="stylesheet" media="screen" href="<?= $currentDesign; ?>"></style>
	<link rel="alternate" type="application/rss+xml" title="RSS" href="http://www.csszengarden.com/zengarden.xml">

	<meta name="author" content="Dave Shea">
	<meta name="description" content="A demonstration of what can be accomplished visually through CSS-based design.">
	<meta name="robots" content="all">
</head>

<!-- 


	to do: a new comment for people viewing source

-->

<body id="css-zen-garden">
<div class="page-wrapper">

	<section class="intro" id="zen-intro">
		<header>
			<h1><span>css Zen Garden</span></h1>
			<h2><span>The Beauty of <abbr title="Cascading Style Sheets">CSS</abbr> Design</span></h2>
		</header>

		<div class="summary" id="zen-summary">
			<p class="p1"><span>A demonstration of what can be accomplished visually through <abbr title="Cascading Style Sheets">CSS</abbr>-based design. Select any style sheet from the list to load it into this page.</span></p>
			<p class="p2"><span>Download the sample <a href="/zengarden-sample.html" title="This page's source HTML code, not to be modified.">html file</a> and <a href="/zengarden-sample.css" title="This page's sample CSS, the file you may modify.">css file</a></span></p>
		</div>

		<div class="preamble" id="zen-preamble">
			<h3><span>The Road to Enlightenment</span></h3>
			<p class="p1"><span>Littering a dark and dreary road lay the past relics of browser-specific tags, incompatible <abbr title="Document Object Model">DOM</abbr>s, and broken <abbr title="Cascading Style Sheets">CSS</abbr> support.</span></p>
			<p class="p2"><span>Today, we must clear the mind of past practices. Web enlightenment has been achieved thanks to the tireless efforts of folk like the <abbr title="World Wide Web Consortium">W3C</abbr>, <abbr title="Web Standards Project">WaSP</abbr> and the major browser creators.</span></p>
			<p class="p3"><span>The css Zen Garden invites you to relax and meditate on the important lessons of the masters. Begin to see with clarity. Learn to use the (yet to be) time-honored techniques in new and invigorating fashion. Become one with the web.</span></p>
		</div>
	</section>

	<div class="supporting" id="zen-supporting">
		<div class="explanation" id="zen-explanation">
			<h3><span>So What is This About?</span></h3>
			<p class="p1"><span>There is clearly a need for <abbr title="Cascading Style Sheets">CSS</abbr> to be taken seriously by graphic artists. The Zen Garden aims to excite, inspire, and encourage participation. To begin, view some of the existing designs in the list. Clicking on any one will load the style sheet into this very page. The code remains the same, the only thing that has changed is the external .css file. Yes, really.</span></p>
			<p class="p2"><span><abbr title="Cascading Style Sheets">CSS</abbr> allows complete and total control over the style of a hypertext document. The only way this can be illustrated in a way that gets people excited is by demonstrating what it can truly be, once the reins are placed in the hands of those able to create beauty from structure. To date, most examples of neat tricks and hacks have been demonstrated by structurists and coders. Designers have yet to make their mark. This needs to change.</span></p>
		</div>

		<div class="participation" id="zen-participation">
			<h3><span>Participation</span></h3>
			<p class="p1"><span>Graphic artists only please. You are modifying this page, so strong <abbr title="Cascading Style Sheets">CSS</abbr> skills are necessary, but the example files are commented well enough that even <abbr title="Cascading Style Sheets">CSS</abbr> novices can use them as starting points. Please see the <a href="http://www.mezzoblue.com/zengarden/resources/" title="A listing of CSS-related resources"><abbr title="Cascading Style Sheets">CSS</abbr> Resource Guide</a> for advanced tutorials and tips on working with <abbr title="Cascading Style Sheets">CSS</abbr>.</span></p>
			<p class="p2"><span>You may modify the style sheet in any way you wish, but not the <abbr title="HyperText Markup Language">HTML</abbr>. This may seem daunting at first if you&#8217;ve never worked this way before, but follow the listed links to learn more, and use the sample files as a guide.</span></p>
			<p class="p3"><span>Download the sample <a href="/zengarden-sample.html" title="This page's source HTML code, not to be modified.">html file</a> and <a href="/zengarden-sample.css" title="This page's sample CSS, the file you may modify.">css file</a> to work on a copy locally. Once you have completed your masterpiece (and please, don&#8217;t submit half-finished work) upload your .css file to a web server under your control. <a href="http://www.mezzoblue.com/zengarden/submit/" title="Use the contact form to send us your CSS file">Send us a link</a> to the file and if we choose to use it, we will spider the associated images. Final submissions will be placed on our server.</span></p>
			<? /*<p class="p4"><span>update: I&#8217;m looking for translators. If you are fluent in English and another language, this is another way to get involved with the project. Please <a href="http://www.mezzoblue.com/contact/" title="Send me an e-mail mentioning which languages you are fluent in.">contact me</a> for details. Existing translations are <a href="http://www.mezzoblue.com/zengarden/translations/">available</a>.</span></p>*/ ?>
		</div>

		<div class="benefits" id="zen-benefits">
			<h3><span>Benefits</span></h3>
			<p class="p1"><span>Why participate? For recognition, inspiration, and a resource we can all refer to when making the case for <abbr title="Cascading Style Sheets">CSS</abbr>-based design. This is sorely needed, even today. More and more major sites are taking the leap, but not enough have. One day this gallery will be a historical curiosity; that day is not today.</span></p>
		</div>

		<div class="requirements" id="zen-requirements">
			<h3><span>Requirements</span></h3>
			<p class="p1"><span>We would like to see as much <abbr title="Cascading Style Sheets, levels 1 and 2">CSS 1 &amp; 2</abbr> as possible. <abbr title="Cascading Style Sheets, levels 3 and 4">CSS 3 &amp; 4</abbr> should be limited to widely-supported elements only. The CSS Zen Garden is about functional, practical <abbr title="Cascading Style Sheets">CSS</abbr> and not the latest bleeding-edge tricks viewable by 2% of the browsing public. The only real requirement we have is that your <abbr title="Cascading Style Sheets">CSS</abbr> validates.</span></p>
			<p class="p2"><span>Unfortunately, designing this way highlights the flaws in the various implementations of <abbr title="Cascading Style Sheets">CSS</abbr>. Different browsers display differently, even completely valid <abbr title="Cascading Style Sheets">CSS</abbr> at times, and this becomes maddening when a fix for one leads to breakage in another. View the <a href="http://www.mezzoblue.com/zengarden/resources/" title="A listing of CSS-related resources">Resources</a> page for information on some of the fixes available. Full browser compliance is still sometimes a pipe dream, and we do not expect you to come up with pixel-perfect code across every platform. But do test in as many as you can. If your design doesn&#8217;t work in at least IE9+, Chrome, Firefox, iOS and Android (run by over 90% of the population), chances are we won&#8217;t accept it.</span></p>
			<p class="p3"><span>We ask that you submit original artwork. Please respect copyright laws. Please keep objectionable material to a minimum; tasteful nudity is acceptable, outright pornography will be rejected.</span></p>
			<p class="p4"><span>This is a learning exercise as well as a demonstration. You retain full copyright on your graphics (with limited exceptions, see <a href="http://www.mezzoblue.com/zengarden/submit/guidelines/">submission guidelines</a>), but we ask you release your <abbr title="Cascading Style Sheets">CSS</abbr> under a Creative Commons license identical to the <a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="View the Zen Garden's license information.">one on this site</a> so that others may learn from your work.</span></p>
			<p class="p5"><span>Bandwidth graciously donated by <a href="http://www.mediatemple.net/">mediatemple</a>. Now available: <a href="http://www.amazon.com/exec/obidos/ASIN/0321303474/mezzoblue-20/">Zen Garden, the book</a>.</span></p>
		</div>

		<footer>
			<a href="http://validator.w3.org/check/referer" title="Check the validity of this site&#8217;s HTML" class="zen-validate-html">HTML</a> 
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="Check the validity of this site&#8217;s CSS" class="zen-validate-css">CSS</a>
			<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="View details of the license of this site, courtesy of Creative Commons." class="zen-license">CC</a>
			<a href="http://mezzoblue.com/zengarden/faq/#s508" title="Read about the accessibility of this site" class="zen-legacy-508">508</a>
			<a href="http://www.mezzoblue.com/zengarden/faq/#aaa" title="Read about the accessibility of this site" class="zen-legacy-aaa">AAA</a>
		</footer>

	</div>

	
	<aside class="sidebar">
		<div class="wrapper">

			<div class="design-selection" id="design-selection">
				<h3 class="select"><span>Select a Design:</span></h3>
				<ul>
<?php
		echo getDesignList($listStart, $numDesigns, $designList);
?>
				</ul>
			</div>

			<div class="design-archives" id="design-archives">
				<h3 class="archives"><span>Archives:</span></h3>
				<ul>
<?
	if ($listStart > $numDesigns) {
?>
					<li class="next">
						<a href="?cssfile=<?= $currentDesign ?>&amp;page=<?= $thisPage + 1 ?>">
							Next Designs <span class="indicator">&raquo;</span>
						</a>
					</li>
<?
	}

	if ($thisPage > 0) {
?>
					<li class="previous">
						<a href="?cssfile=<?= $currentDesign ?>&amp;page=<?= $thisPage - 1 ?>">
							<span class="indicator">&laquo;</span> Previous Designs
						</a>
					</li>
<?
	}
?>
					<li class="viewall">
						<a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="View every submission to the Zen Garden.">
							View All Designs
						</a>
					</li>
				</ul>
			</div>
			
			<div class="zen-resources" id="zen-resources">
				<h3 class="resources"><span>Resources:</span></h3>
				<ul>
					<li class="view-css">
						<a href="<?= $currentDesign ?>" title="View the source CSS file of the currently-viewed design.">
							View This Design&#8217;s <abbr title=\"Cascading Style Sheets\">CSS</abbr>
						</a>
					</li>
					<li class="css-resources">
						<a href="http://www.mezzoblue.com/zengarden/resources/" title="Links to great sites with information on using CSS.">
							<abbr title="Cascading Style Sheets">CSS</abbr> Resources
						</a>
					</li>
					<li class="zen-faq">
						<a href="http://www.mezzoblue.com/zengarden/faq/" title="A list of Frequently Asked Questions about the Zen Garden.">
							<abbr title="Frequently Asked Questions">FAQ</abbr>
						</a>
					</li>
					<li class="zen-submit">
						<a href="http://www.mezzoblue.com/zengarden/submit/" title="Send in your own CSS file.">
							Submit a Design
						</a>
					</li>
					<li class="zen-translations">
						<a href="http://www.mezzoblue.com/zengarden/translations/" title="View translated versions of this page.">
							Translations
						</a>
					</li>
				</ul>
			</div>
		</div>
	</aside>


</div>

<!-- These extra divs/spans may be used as catch-alls to add extra imagery. -->
<div id="extraDiv1"><span></span></div><div id="extraDiv2"><span></span></div><div id="extraDiv3"><span></span></div>
<div id="extraDiv4"><span></span></div><div id="extraDiv5"><span></span></div><div id="extraDiv6"><span></span></div>

</body>
</html>