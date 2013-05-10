<?php

	// Direct port of the older, not so great French version.
	// The current English text has deviated significantly, so any
	// future work on this should be based off the English version
	// of the site.

	$head = array(
		"title" => "Jardin Zen css: La beaut&eacute; de la conception CSS",
		"description" => "A demonstration of what can be accomplished visually through CSS-based design.",

		// if you'd like translation credit, place it somewhere in this comment
		"comment" => "

	Ce document xhtml est comment&eacute; pour donner au concepteur le maximum de 
	flexibilit&eacute;.  Il y a plus de classes et de marqueur que n&eacute;c&eacute;ssaire dans 
	une vraie situation il y en aurait bien moins.

	Cependant, je crois que nous pouvons tous accepter that malgr&eacute; cela, nous sommes 
	mieux plac&eacute;s que si nous avions utilis&eacute;s des tables.

		",
	);

	$intro = array(
		"h1" => "Jardin Zen css",
		"h2" => 'La beaut&eacute; de la conception <abbr title="Cascading Style Sheets">CSS</abbr>',
		"summary-p1" => 'Une demonstration de ce qu\'on peut accomplir lorsqu\'on utilise les <abbr title="Cascading Style Sheets">CSS</abbr> pour la conception web.  S&eacute;lectionez n\'importe quelle feuille de style list&eacute;e pour charger le r&eacute;sultat sur cette page.',
		"summary-p2" => 'T&eacute;l&eacute;chargez les fichiers d\'exemple <a href="/zengarden-sample.html" title="Clique-droit pour sauver ce document sur votre disque dur.">html</a> et <a href="/zengarden-sample.css" title="Clique-droit pour sauver ce document sur votre disque dur.">css</a>',
		"preamble-h3" => 'Le chemin vers l\'&eacute;dification',
		"preamble-p1" => 'Les reliques pass&eacute;es des s&eacute;lecteurs sp&eacute;cifique aux navigateurs, des <abbr title="Document Object Model">DOM</abbr>s incompatibles, et du manque de support des <abbr title="Cascading Style Sheets">CSS</abbr> encombrent un long chemin sombre et morne.',
		"preamble-p2" => 'Aujourd\'hui, nous devons nous clarifier l\'esprit et nous d&eacute;barassez des pratiques pass&eacute;es.  La r&eacute;v&eacute;lation de la v&eacute;ritable nature du Web est maintenant possible, gr&acirc;ce aux efforts infatigables des gens du <abbr title="World Wide Web Consortium">W3C</abbr>, du <abbr title="Web Standards Project">WaSP</abbr> et des cr&eacute;ateurs des principaux navigateurs.',
		"preamble-p3" => 'Le Jardin Zen css vous invite &agrave; vous relaxer et &agrave; m&eacute;diter sur les le&ccedil;ons importantes des ma&icirc;tres.  Commencez &agrave; voir clairement.  Apprenez &agrave; utiliser ces techniques (bient&ocirc;t consacr&eacute;es par l\'usage) de mani&egrave;re neuve et revigorante.  Ne faites qu\'Un avec le Web.',
	);

	$main = array(
		"explanation-h3" => "Alors, de quoi s'agit&#8211;il?",
		"explanation-p1" => 'Il y a clairement un besoin pour les graphistes de prendre les <abbr title="Cascading Style Sheets">CSS</abbr> au s&eacute;rieux.  Le Jardin Zen vise &agrave; exciter, inspirer, et encourager la participation.  Pour commencer, voyez quelques concepts choisis dans la liste.  Cliquez sur n\'importe lequel pour le charger sur cette page.  Le code HTML demeure le m&ecirc;me, et seule la feuille de style ext&eacute;rieure change.  Oui, vraiment.',
		"explanation-p2" => 'Les <abbr title="Cascading Style Sheets">CSS</abbr> permettent un contr&ocirc;le complet et total du style d\'un document hypertexte.  La seule mani&egrave;re de vraiment d&eacute;montrer cela d\'une mani&egrave;re qui excite les gens est de d&eacute;montrer ce qui peut vraiment &ecirc;tre, une fois que les rennes ont &eacute;t&eacute; plac&eacute;es dans les mains de ceux capables de cr&eacute;er la beaut&eacute; bas&eacute;e sur la forme.  Jusqu\'&agrave; maintenant, les exemples de trouvailles et montages int&eacute;ressants ont &eacute;t&eacute;s fournis par des programmeurs et des structuralistes. Les concepteurs ont encore &agrave; faire leurs preuves. Cela doit changer.',

		"participation-h3" => "Participation",
		"participation-p1" => 'Graphistes seulement s\'il vous pla&icirc;t.  Vous aller devoir modifier cette page, donc une comp&eacute;tence solide en <abbr title="Cascading Style Sheets">CSS</abbr> est n&eacute;cessaire, mais les documents exemples sont suffisament comment&eacute;s pour que les novices en <abbr title="Cascading Style Sheets">CSS</abbr> puisent les utiliser comme points de d&eacute;part.  S\'il vous pla&icirc;t, consultez le <a href="http://www.mezzoblue.com/zengarden/resources/" title="Une liste de resources CSS">Guide de Ressources <abbr title="Cascading Style Sheets">CSS</abbr></a> pour des tutoriaux avanc&eacute;s et de l\'information pour travailler avec les <abbr title="Cascading Style Sheets">CSS</abbr>.',
		"participation-p2" => 'Vous pouvez modifier la feuille de style de n\'importe quelle mani&egrave;re, mais pas le code <abbr title="HyperText Markup Language">HTML</abbr>.  Ceci peut sembler d&eacute;courageant au d&eacute;but si vous n\'avez jamais travaill&eacute; de cette mani&egrave;re, mais suivez les liens pour en apprendre plus, et utilisez les exemples pour vous guider.',
		"participation-p3" => 'T&eacute;l&eacute;chargez fichiers d\'exemple <a href="/zengarden-sample.html" title="Clique-droit pour sauver ce document sur votre disque dur.">html</a> et <a href="/zengarden-sample.css" title="Clique-droit pour sauver ce document sur votre disque dur.">css</a> pour travailler avec une copie locale.  Une fois que vous avez fini votre chef d\'oeuvre (ne soumettez pas de travaux incomplets), t&eacute;l&eacute;chargez votre document .css sur un serveur web sous votre contr&ocirc;le.  <a href="http://www.mezzoblue.com/zengarden/submit/" title="Utilisez la forme de contacte pour nous envoyez fotre document CSS">Envoyez-nous un lien</a> vers votre document, et si nous le s&eacute;lectionnons, nous rel&egrave;verons les images n&eacute;c&eacute;ssaires.',

		"benefits-h3" => "B&eacute;n&eacute;fices",
		"benefits-p1" => 'Pourquoi participer?  Pour &ecirc;tre reconnu, pour l\'inspiration, et pour cr&eacute;er une ressource que nous pouvons tous utiliser quand nous voulons promouvoir le cas de la conception web &agrave; base de <abbr title="Cascading Style Sheets">CSS</abbr>.',

		"requirements-h3" => "Crit&egrave;res",
		"requirements-p1" => 'Nous aimerions voir autant de <abbr title="Cascading Style Sheets, version 1">CSS1</abbr> que possible.  <abbr title="Cascading Style Sheets, version 2">CSS2</abbr> devrait &ecirc;tre limit&eacute; aux &eacute;lements bien support&eacute;s.  Le Jardin Zen css est bas&eacute; sur une approche pratique et fonctionelle des <abbr title="Cascading Style Sheets">CSS</abbr>, et non sur les derniers proc&eacute;d&eacute;s lisibles seulement pour 2% du publique.  Le seul vrai crit&egrave;re est que votre <abbr title="Cascading Style Sheets">CSS</abbr> puisse &ecirc;tre valid&eacute;.',
		"requirements-p2" => 'Malheureusement, conceptualiser de cette mani&egrave;re rehausse les d&eacute;fauts des diff&eacute;rentes impl&eacute;mentations <abbr title="Cascading Style Sheets">CSS</abbr>.  Differents navigateurs affichent de mani&egrave;re diff&eacute;rente le m&ecirc;me code, des fois m&ecirc;me avec une <abbr title="Cascading Style Sheets">CSS</abbr> compl&eacute;tement valide, et &ccedil;a devient enrageant quand une solution pour un navigateur &eacute;quivaut &agrave; un nouveau probl&egrave;me dans un autre.  Consulter la page de <a href="http://www.mezzoblue.com/zengarden/resources/" title="Une liste de ressource CSS">Ressources</a> pour de l\'information au sujet de quelques solutions disponibles.  La conformit&eacute; des navigateurs appartient encore au domaine du r&ecirc;ve, et nous ne nous attendons pas &agrave; ce que vous obteniez avec un code parfait sur toutes les plates-formes.  Mais testez avec autant de navigateurs et plates-formes que possible.  Si votre concept ne fonctionne pas au moins avec IE5+/Win et Mozilla (utilis&eacute; par 90% de la population), les chances sont bonnes que nous ne l\'acceptions pas.',
		"requirements-p3" => 'Nous demandons que vous soumettiez des graphismes originaux.  Veuillez respecter les lois du Copyright.  S\'il vous pla&icirc;t, veuillez garder le mat&eacute;riel choquant ou inaceptable au minimum; la nudit&eacute; l&eacute;g&egrave;re et justifi&eacute;e est acceptable, la pornographie sera rejett&eacute;e.',
		"requirements-p4" => 'Ceci est un exercice d\'apprentissage.  Vous gardez le Copyright complet de vos graphiques, mais nous vous demandons de c&eacute;der votre fichier <abbr title="Cascading Style Sheets">CSS</abbr> sous une license Creative Commons identique &agrave; celle <a href="http://creativecommons.org/licenses/sa/1.0/">sur ce site (en anglais)</a> afin que d\'autres personnes puissent en apprendre.',
		"requirements-p5" => 'Bandwidth graciously donated by <a href="http://www.mediatemple.net/">mediatemple</a>. Now available: <a href="http://www.amazon.com/exec/obidos/ASIN/0321303474/mezzoblue-20/">Zen Garden, the book</a>.',
	);

	// if you decide to localize any of these, keep them <4 characters if possible
	// some older designs assume the longest one in the group was 'XHTML'
	$footer = array(
		"zen-validate-html-title" => "V&eacute;rifiez la validit&eacute; HTML de ce site.",
		"zen-validate-html-text" => "HTML",
		"zen-validate-css-title" => "V&eacute;rifiez la validit&eacute; CSS de ce site.",
		"zen-validate-css-text" => "CSS",
		"zen-license-title" => "Voir les details de la license de ce site, courteoisie de Creative Commons.",
		"zen-license-text" => "CC",
		"zen-accessibility-title" => "V&eacute;rifiez l\'accessibilit&eacute; de ce site",
		"zen-accessibility-text" => "A11y", // a-ccessibilit-y, the middle part is 11 characters. get it?
		"zen-github-title" => "Fork this site on Github",
		"zen-github-text" => "GH",
	);


	$sidebar = array(
		"design-selection-h3" => "Choisissez une conception:",
		"design-selection-by" => "par",

		"design-archives-h3" => "Archives:",
		"design-archives-next" => "Conceptions suivantes",
		"design-archives-previous" => "Conceptions avant",
		"design-archives-viewall-title" => "View every submission to the Zen Garden.",
		"design-archives-viewall-text" => "Voir toutes les conceptions",

		"design-resources-h3" => "Ressources:",
		"view-css-title" => 'View the source CSS file of the currently-viewed design.',
		"view-css-text" => 'Voir le <abbr title="Cascading Style Sheets">CSS</abbr> pour cette conception',
		"css-resources-title" => 'Links to great sites with information on using CSS.',
		"css-resources-text" => 'Ressources <abbr title="Cascading Style Sheets">CSS</abbr>',
		"zen-faq-title" => 'Une liste de Questions Souvent Demand&eacute;es au sujet du Jardin Zen css',
		"zen-faq-text" => '<abbr title="Questions Souvent Demand&eacute;es, ou Frequently Asked Questions en Anglais">FAQ</abbr>',
		"zen-submit-title" => 'Send in your own CSS file.',
		"zen-submit-text" => 'Soummettez une conception',
		"zen-translations-title" => 'Voir les traductions pour cette page.',
		"zen-translations-text" => 'Traductions',
	);


	$foot = array(
		"comment" => "
Ces divs/spans suppl&eacute;mentaires peuvent &ecirc;tre utilis&eacute;es pour ajoutter des images suppl&eacute;mentaires.		",
	);


?>