<?php

	$lang = "en";

	$head = array(
		"title" => "CSS Zen Garden: The Beauty of CSS Design",
		"description" => "A demonstration of what can be accomplished visually through CSS-based design.",

		// if you'd like translation credit, place it somewhere in this comment
		"comment" => "

	View source is a feature, not a bug. Thanks for your curiosity and
	interest in participating!

	Here are the submission guidelines for the new and improved csszengarden.com:

	- CSS3? Of course! Prefix for ALL browsers where necessary.
	- go responsive; test your layout at multiple screen sizes.
	- your browser testing baseline: IE9+, recent Chrome/Firefox/Safari, and iOS/Android
	- Graceful degradation is acceptable, and in fact highly encouraged.
	- use classes for styling. Don't use ids.
	- web fonts are cool, just make sure you have a license to share the files. Hosted 
	  services that are applied via the CSS file (ie. Google Fonts) will work fine, but
	  most that require custom HTML won't. TypeKit is supported, see the readme on this
	  page for usage instructions: https://github.com/mezzoblue/csszengarden.com/

	And a few tips on building your CSS file:

	- use :first-child, :last-child and :nth-child to get at non-classed elements
	- use ::before and ::after to create pseudo-elements for extra styling
	- use multiple background images to apply as many as you need to any element
	- use the Kellum Method for image replacement, if still needed. http://goo.gl/GXxdI
	- don't rely on the extra divs at the bottom. Use ::before and ::after instead.

		",
	);


	$intro = array(
		"h1" => "CSS Zen Garden",
		"h2" => 'The Beauty of <abbr title="Cascading Style Sheets">CSS</abbr> Design',

		"summary-p1" => 'A demonstration of what can be accomplished through <abbr title="Cascading Style Sheets">CSS</abbr>-based design. Select any style sheet from the list to load it into this page.',
		"summary-p2" => 'Download the example <a href="' . $zenUrls["example-html"] . '" title="This page\'s source HTML code, not to be modified.">html file</a> and <a href="' . $zenUrls["example-css"] . '" title="This page\'s sample CSS, the file you may modify.">css file</a>',

		"preamble-h3" => 'The Road to Enlightenment',
		"preamble-p1" => 'Littering a dark and dreary road lay the past relics of browser-specific tags, incompatible <abbr title="Document Object Model">DOM</abbr>s, broken <abbr title="Cascading Style Sheets">CSS</abbr> support, and abandoned browsers.',
		"preamble-p2" => 'We must clear the mind of the past. Web enlightenment has been achieved thanks to the tireless efforts of folk like the <abbr title="World Wide Web Consortium">W3C</abbr>, <abbr title="Web Standards Project">WaSP</abbr>, and the major browser creators.',
		"preamble-p3" => 'The CSS Zen Garden invites you to relax and meditate on the important lessons of the masters. Begin to see with clarity. Learn to use the time-honored techniques in new and invigorating fashion. Become one with the web.',
	);


	$main = array(
		"explanation-h3" => "So What is This About?",
		"explanation-p1" => 'There is a continuing need to show the power of <abbr title="Cascading Style Sheets">CSS</abbr>. The Zen Garden aims to excite, inspire, and encourage participation. To begin, view some of the existing designs in the list. Clicking on any one will load the style sheet into this very page. The <abbr title="HyperText Markup Language">HTML</abbr> remains the same, the only thing that has changed is the external <abbr title="Cascading Style Sheets">CSS</abbr> file. Yes, really.',
		"explanation-p2" => '<abbr title="Cascading Style Sheets">CSS</abbr> allows complete and total control over the style of a hypertext document. The only way this can be illustrated in a way that gets people excited is by demonstrating what it can truly be, once the reins are placed in the hands of those able to create beauty from structure. Designers and coders alike have contributed to the beauty of the web; we can always push it further.',

		"participation-h3" => "Participation",
		"participation-p1" => 'Strong visual design has always been our focus. You are modifying this page, so strong <abbr title="Cascading Style Sheets">CSS</abbr> skills are necessary too, but the example files are commented well enough that even <abbr title="Cascading Style Sheets">CSS</abbr> novices can use them as starting points. Please see the <a href="' . $zenUrls["zen-resources"] . '" title="A listing of CSS-related resources"><abbr title="Cascading Style Sheets">CSS</abbr> Resource Guide</a> for advanced tutorials and tips on working with <abbr title="Cascading Style Sheets">CSS</abbr>.',
		"participation-p2" => 'You may modify the style sheet in any way you wish, but not the <abbr title="HyperText Markup Language">HTML</abbr>. This may seem daunting at first if you&#8217;ve never worked this way before, but follow the listed links to learn more, and use the sample files as a guide.',
		"participation-p3" => 'Download the sample <a href="' . $zenUrls["example-html"] . '" title="This page\'s source HTML code, not to be modified.">HTML</a> and <a href="' . $zenUrls["example-css"] . '" title="This page\'s sample CSS, the file you may modify.">CSS</a> to work on a copy locally. Once you have completed your masterpiece (and please, don&#8217;t submit half-finished work) upload your <abbr title="Cascading Style Sheets">CSS</abbr> file to a web server under your control. <a href="' . $zenUrls["zen-submit"] . '" title="Use the contact form to send us your CSS file">Send us a link</a> to an archive of that file and all associated assets, and if we choose to use it we will download it and place it on our server.',

		"benefits-h3" => "Benefits",
		"benefits-p1" => 'Why participate? For recognition, inspiration, and a resource we can all refer to showing people how amazing <abbr title="Cascading Style Sheets">CSS</abbr> really can be. This site serves as equal parts inspiration for those working on the web today, learning tool for those who will be tomorrow, and gallery of future techniques we can all look forward to.',

		"requirements-h3" => "Requirements",
		"requirements-p1" => 'Where possible, we would like to see mostly <abbr title="Cascading Style Sheets, levels 1 and 2">CSS 1 &amp; 2</abbr> usage. <abbr title="Cascading Style Sheets, levels 3 and 4">CSS 3 &amp; 4</abbr> should be limited to widely-supported elements only, or strong fallbacks should be provided. The CSS Zen Garden is about functional, practical <abbr title="Cascading Style Sheets">CSS</abbr> and not the latest bleeding-edge tricks viewable by 2% of the browsing public. The only real requirement we have is that your <abbr title="Cascading Style Sheets">CSS</abbr> validates.',
		"requirements-p2" => 'Luckily, designing this way shows how well various browsers have implemented <abbr title="Cascading Style Sheets">CSS</abbr> by now. When sticking to the guidelines you should see fairly consistent results across most modern browsers. Due to the sheer number of user agents on the web these days &#8212; especially when you factor in mobile &#8212; pixel-perfect layouts may not be possible across every platform. That&#8217;s okay, but do test in as many as you can. Your design should work in at least IE9+ and the latest Chrome, Firefox, iOS and Android browsers (run by over 90% of the population).',
		"requirements-p3" => 'We ask that you submit original artwork. Please respect copyright laws. Please keep objectionable material to a minimum, and try to incorporate unique and interesting visual themes to your work. We&#8217;re well past the point of needing another garden-related design.',
		"requirements-p4" => 'This is a learning exercise as well as a demonstration. You retain full copyright on your graphics (with limited exceptions, see <a href="' . $zenUrls["zen-guidelines"] . '">submission guidelines</a>), but we ask you release your <abbr title="Cascading Style Sheets">CSS</abbr> under a Creative Commons license identical to the <a href="' . $zenUrls["zen-license"] . '" title="View the Zen Garden\'s license information.">one on this site</a> so that others may learn from your work.',
		"requirements-p5" => 'By <a href="' . $zenUrls["zen-credits-creator"] . '">Dave Shea</a>. Bandwidth graciously donated by <a href="' . $zenUrls["zen-credits-hosting"] . '">mediatemple</a>. Now available: <a href="' . $zenUrls["zen-credits-book"] . '">Zen Garden, the book</a>.',
	);

	// if you decide to localize any of these, keep the link text <4 characters if possible
	// some older designs assume the longest one in the group was 'XHTML'
	$footer = array(
		"zen-validate-html-title" => "Check the validity of this site&#8217;s HTML",
		"zen-validate-html-text" => "HTML",
		"zen-validate-css-title" => "Check the validity of this site&#8217;s CSS",
		"zen-validate-css-text" => "CSS",
		"zen-license-title" => "View the Creative Commons license of this site: Attribution-NonCommercial-ShareAlike.",
		"zen-license-text" => "CC",
		"zen-accessibility-title" => "Read about the accessibility of this site",
		"zen-accessibility-text" => "A11y", // a-ccessibilit-y, the middle part is 11 characters. get it?
		"zen-github-title" => "Fork this site on Github",
		"zen-github-text" => "GH",
	);

	$sidebar = array(
		"design-selection-h3" => "Select a Design:",
		"design-selection-by" => "by",

		"design-archives-h3" => "Archives:",
		"design-archives-next" => "Next Designs",
		"design-archives-previous" => "Previous Designs",
		"design-archives-viewall-title" => "View every submission to the Zen Garden.",
		"design-archives-viewall-text" => "View All Designs",

		"design-resources-h3" => "Resources:",
		"view-css-title" => 'View the source CSS file of the currently-viewed design.',
		"view-css-text" => 'View This Design&#8217;s <abbr title="Cascading Style Sheets">CSS</abbr>',
		"css-resources-title" => 'Links to great sites with information on using CSS.',
		"css-resources-text" => '<abbr title="Cascading Style Sheets">CSS</abbr> Resources',
		"zen-faq-title" => 'A list of Frequently Asked Questions about the Zen Garden.',
		"zen-faq-text" => '<abbr title="Frequently Asked Questions">FAQ</abbr>',
		"zen-submit-title" => 'Send in your own CSS file.',
		"zen-submit-text" => 'Submit a Design',
		"zen-translations-title" => 'View translated versions of this page.',
		"zen-translations-text" => 'Translations',
	);

	$foot = array(
		"comment" => "
	These superfluous divs/spans were originally provided as catch-alls to add extra imagery.
	These days we have full ::before and ::after support, favour using those instead.
	These only remain for historical design compatibility. They might go away one day.
		",
	);


?>