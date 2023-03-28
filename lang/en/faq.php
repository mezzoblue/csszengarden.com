<?php

	$lang = "en";

	$pageHead = array(
		"title" => "CSS Zen Garden: FAQ",
		"description" => "A demonstration of what can be accomplished visually through CSS-based design.",
		"class" => "faq"
	);


	$pageIntro = array(
		"h1" => 'CSS Zen Garden',
		"h2" => 'FAQ',
		"return" => 'Return to CSS Zen Garden'
	);


	$pageContentList = array (

		array(
			"h3" => "Can I use these designs for other things?",
			"No, mostly. You may not use any of the graphics (image files: <abbr title=\"Graphical Interchange Format\">GIF</abbr>, <abbr title=\"Joint Photographic Experts Group\">JPG</abbr>, <abbr title=\"Portable Network Graphics\">PNG</abbr>, <abbr title=\"Scalable Vector Graphics\">SVG</abbr>, etc.) on the Zen Garden elsewhere without the original designer&#8217;s written permission. There are no exceptions to this. The Zen Garden is about learning from other people&#8217;s work, but not using it uncompensated.",
			"While the <abbr title=\"Cascading Style Sheets\">CSS</abbr> files themselves are provided as-is under a very open Creative Commons license, we&#8217;d encourage you to learn from them and create your own designs instead of using them as a basis for your work. Go ahead and learn from the files, and grab bits and pieces of the <abbr>CSS</abbr> as you need them. But if you&#8217;re using the bulk of the original <abbr>CSS</abbr> file and only changing a few colours and images, you&#8217;re basically cloning the design. Please email the designer for permission before doing this, and respect their wishes if they prefer that you don&#8217;t or consider other options if you can&#8217;t get in touch with them.",
		),

		array(
			"h3" => "How do I get in touch with a certain designer?",
			"Follow the link to their own site, and use the contact options there. If the site no longer exists, we can’t get in touch with them either. No really. 20 years is a long time on the internet.",
		),

		array(
			"h3" => "Is the <abbr>CSS</abbr> Zen Garden fully accessible?",
			"Probably not. The markup is as semantic as possible and <a href=\"http://www.w3.org/TR/wai-aria/\"><abbr title=\"Web Accessibility Initiative – Accessible Rich Internet Applications\">WAI-ARIA</abbr></a> roles have been added where appropriate. The &#8216;<abbr title=\"Accessibility\">A11y</abbr>&#8217; link on the main Zen Garden page even used to point to automated tests that checked the Zen Garden’s markup for <abbr title=\"Web Content Accessibility Guidelines – Level AAA Conformance\">AAA</abbr>/<a href=\"https://www.section508.gov/\">Section 508</a> compliance. It passed, but these validators are no longer available.",

			"Even with those measures however, accessibility is not necessarily achieved. <a href=\"https://www.w3.org/TR/WCAG20/\"><abbr title=\"Web Content Accessibility Guidelines\">WCAG</abbr></a> guidelines contain multiple checkpoints that can not be tested automatically; they require a judgment call made by a human, not software. Many designs use techniques like hiding text from the browser that are by nature inaccessible, so the <abbr>CSS</abbr> of any particular design is as relevant as the markup when it comes to accessibility.",

			"In some cases and with certain designs, the Zen Garden may come close to achieving <abbr>AAA</abbr> compliance. But we can&#8217;t in good conscience say that the Zen Garden is a fully accessible site, since we now need such a long disclaimer.",
		),

		array(
			"h3" => "How do I view each design&#8217;s <abbr>CSS</abbr>?",
			"There&#8217;s a convenient link under the &#8216;Resources&#8217; header titled &#8216;View This Design&#8217;s <abbr>CSS</abbr>.&#8217;",
		),

		array(
			"h3" => "How do I get the <abbr title=\"HyperText Markup Language\">HTML</abbr> file?",
			"Use your browser&#8217;s view source function to see the full markup source, or <a href=\"" . $zenUrls["example-html"] . "\">download the source</a> and open it in your favourite text editor.",
		),

		array(
			"h3" => "Is the Zen Garden accepting new submissions?",
			"Probably not. <a href=\"" . $zenUrls["zen-submit"] . "\">Read more here</a>.",
		),


	);

?>
