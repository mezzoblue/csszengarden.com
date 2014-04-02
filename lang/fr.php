<?php

	$lang = "fr";

	$head = array(
		"title" => "Jardin Zen CSS&nbsp;: La beaut&eacute; de la conception CSS",
		"description" => "Une d&eacute;monstration de ce qui peut &ecirc;tre r&eacute;alis&eacute; visuellement via la conception bas&eacute;e sur CSS.",

		// if you'd like translation credit, place it somewhere in this comment
		"comment" => "
	Afficher la source est une fonctionnalité, pas un bug.
	Merci pour votre curiosité et votre intérêt en y contribuant !

	Quelques astuces de développement pour le nouveau Jardin Zen CSS amélioré :

	- utilisez des classes pour la mise en forme. N’utilisez pas d’id.
	- utilisez :first-child, :last-child et :nth-child pour cibler les éléments sans classe.
	- soyez « responsive »; testez votre mise en forme sur plusieurs tailles d’écran.
	- utilisez si besoin la méthode Kellum pour les remplacements d’image. http://goo.gl/GXxdI
	- ne comptez pas sur les spans ici présents. Ils ne le seront bientôt plus.
	- ne comptez pas sur les div supplémentaires en bas. Utilisez plutôt ::before et ::after.



	Traduit par @NumEricR – http://github.com/NumEricR
	Typographie par Alex Dieulot – http://dieulot.net/
	Toute aide est la bienvenue !

",
	);

	$intro = array(
		"h1" => "Jardin Zen CSS",
		"h2" => 'La beaut&eacute; de la conception <abbr lang="en" title="Cascading Style Sheets">CSS</abbr>',

		"summary-p1" => 'Une d&eacute;monstration de ce qui peut &ecirc;tre r&eacute;alis&eacute; via la conception bas&eacute;e sur <abbr lang="en" title="Cascading Style Sheets">CSS</abbr>. S&eacute;lectionnez n&#8217;importe quelle feuille de style de la liste pour l&#8217;utiliser sur cette page.',
		"summary-p2" => 'T&eacute;l&eacute;chargez les exemples <a href="/zengarden-sample.html" title="Le code HTML de la source de cette page, ne doit pas &ecirc;tre modifi&eacute;.">HTML</a> et <a href="/zengarden-sample.css" title="Le code CSS d&#8217;exemple de cette page, le fichier que vous pouvez modifier.">CSS</a>',

		"preamble-h3" => 'Le chemin vers l&#8217;&eacute;veil',
		"preamble-p1" => 'Les reliques dues aux balises sp&eacute;cifiques aux navigateurs, aux <abbr lang="en" title="Document Object Model">DOM</abbr>s incompatibles, au support corrompu de <abbr title="Cascading Style Sheets">CSS</abbr> et aux navigateurs abandonn&eacute;s jonchent un chemin sombre et lugubre.',
		"preamble-p2" => 'Aujourd&#8217;hui, nous devons nous lib&eacute;rer de l&#8217;esprit du pass&eacute;. La v&eacute;ritable nature du web a &eacute;t&eacute; r&eacute;v&eacute;l&eacute;e gr&acirc;ce aux efforts continus des gens du <abbr lang="en" title="World Wide Web Consortium">W3C</abbr>, du <abbr lang="en" title="Web Standards Project">WaSP</abbr> et des cr&eacute;ateurs des principaux navigateurs.',
		"preamble-p3" => 'Le Jardin Zen CSS vous invite &agrave; vous relaxer et m&eacute;diter sur les importantes le&ccedil;ons des ma&icirc;tres. Commencez &agrave; voir clairement. Apprenez &agrave; utiliser ces techniques consacr&eacute;es dans une nouvelle m&eacute;thode stimulante. Ne faites qu&#8217;un avec le web.',
	);

	$main = array(
		"explanation-h3" => "Alors, de quoi s'agit&ndash;il&nbsp;?",
		"explanation-p1" => 'Il faut sans cesse montrer la puissance de <abbr lang="en" title="Cascading Style Sheets">CSS</abbr>. Le Jardin Zen vise &agrave; exciter, inspirer et encourager la participation. Pour commencer, regardez quelques designs pr&eacute;sents dans la liste. Cliquer sur l&#8217;un d&#8217;eux appliquera son style sur cette page. Le code <abbr lang="en" title="HyperText Markup Language">HTML</abbr> reste le m&ecirc;me, seule la feuille de style externe change. Oui, vraiment&nbsp;!',
		"explanation-p2" => 'Les <abbr lang="en" title="Cascading Style Sheets">CSS</abbr> permettent un contr&ocirc;le total de la mise en forme d&#8217;un document hypertexte. La seule mani&egrave;re de le d&eacute;montrer en stimulant les gens est de pr&eacute;senter ce que les cr&eacute;atifs peuvent concr&ecirc;tement r&eacute;aliser quand on leur confie les rennes. Les concepteurs et les d&eacute;veloppeurs ont contribu&eacute; ensemble &agrave; la beaut&eacute; du web, on peut toujours aller plus loin.',

		"participation-h3" => "Participation",
		"participation-p1" => 'Notre objectif a toujours &eacute;t&eacute; de promouvoir les designs de qualit&eacute;. Vous allez modifier cette page, de solides comp&eacute;tences en <abbr lang="en" title="Cascading Style Sheets">CSS</abbr> sont donc n&eacute;cessaires. Toutefois les fichiers d&#8217;exemple sont suffisamment comment&eacute;s pour que m&ecirc;me les novices en <abbr lang="en" title="Cascading Style Sheets">CSS</abbr> puisent les utiliser comme point de d&eacute;part. S&#8217;il vous pla&icirc;t, consultez le <a href="http://www.mezzoblue.com/zengarden/resources/" title="Une liste de ressources CSS">guide de ressources <abbr lang="en" title="Cascading Style Sheets">CSS</abbr></a> pour des tutoriaux avanc&eacute;s et des astuces sur le d&eacute;veloppement <abbr lang="en" title="Cascading Style Sheets">CSS</abbr>.',
		"participation-p2" => 'Vous pouvez modifier la feuille de style comme bon vous semble, mais pas le code <abbr lang="en" title="HyperText Markup Language">HTML</abbr>. Ceci peut sembler d&eacute;courageant au d&eacute;but si vous n&#8217;avez jamais travaill&eacute; de cette mani&egrave;re, mais servez-vous des liens pour en apprendre plus et utilisez les exemples pour vous guider.',
		"participation-p3" => 'T&eacute;l&eacute;chargez les fichiers d&#8217;exemple <a href="' . $zenUrls["example-html"] . '" title="Le code HTML de la source de cette page, ne doit pas &ecirc;tre modifi&eacute;.">HTML</a> et <a href="' . $zenUrls["example-css"] . '" title="Le code CSS d&#8217;exemple de cette page, le fichier que vous pouvez modifier.">CSS</a> pour travailler sur une copie locale. Une fois que vous avez fini votre chef d&#8217;&oelig;uvre (merci de ne pas soumettre de travaux incomplets), publiez votre document <abbr lang="en" title="Cascading Style Sheets">CSS</abbr> sur le serveur web de votre choix. <a href="http://www.mezzoblue.com/zengarden/submit/" title="Utilisez le formulaire de contact pour nous envoyer votre fichier CSS">Envoyez-nous un lien</a> vers une archive contenant ce fichier et ses ressources associ&eacute;es, et si nous la s&eacute;lectionnons, elle sera h&eacute;berg&eacute;e sur notre propre serveur.',

		"benefits-h3" => "Avantages",
		"benefits-p1" => 'Pourquoi participer&nbsp;? Pour la reconnaissance, l&#8217;inspiration et pour cr&eacute;er une ressource que nous pouvons tous utiliser pour promouvoir <abbr lang="en" title="Cascading Style Sheets">CSS</abbr>. Ce site sert autant d&#8217;inspiration pour les travailleurs du web en exercice, d&#8217;outil d&#8217;apprentissage pour ceux en devenir que de gallerie des futures techniques que nous pouvons tous attendre.',

		"requirements-h3" => "Conditions",
		"requirements-p1" => 'Si possible, nous aimerions surtout voir l&#8217;utilisation de <abbr lang="en" title="Cascading Style Sheets, versions 1 et 2">CSS 1 et 2</abbr>. <abbr lang="en" title="Cascading Style Sheets, versions 3 et 4">CSS 3 et 4</abbr> devraient &ecirc;tre uniquement limit&eacute;s aux techniques largement impl&eacute;ment&eacute;es, sinon des alternatives efficaces devraient &ecirc;tre pr&eacute;vues. Le Jardin Zen CSS est bas&eacute; sur une approche pragmatique et fonctionnelle des <abbr lang="en" title="Cascading Style Sheets">CSS</abbr> et non sur les derni&egrave;res pratiques visibles par seulement 2&nbsp;% des internautes. Notre seul vrai crit&egrave;re est que votre <abbr lang="en" title="Cascading Style Sheets">CSS</abbr> soit valide.',
		"requirements-p2" => 'Heureusement, concevoir de cette mani&egrave;re d&eacute;montre comment les diff&eacute;rents navigateurs ont maintenant bien impl&eacute;ment&eacute; les <abbr lang="en" title="Cascading Style Sheets">CSS</abbr>. En respectant les conventions vous devriez constater des r&eacute;sultats assez coh&eacute;rents sur la plupart des navigateurs modernes. En raison du nombre important d&#8217;agents utilisateurs sur le web, surtout avec la prise en compte du mobile, les rendus ne peuvent pas &ecirc;tre toujours pr&eacute;cis au pixel pr&egrave;s sur toutes les plateformes. Pas de soucis, mais faites autant de tests que possible. Votre design doit au moins &ecirc;tre compatible avec IE&nbsp;9 (et versions ult&eacute;rieures) et avec les derni&egrave;res versions des navigateurs Chrome, Firefox, iOS et Android (utilis&eacute;s par plus de 90&nbsp;% du march&eacute;).',
		"requirements-p3" => 'Nous vous demandons de soumettre des cr&eacute;ations originales, merci de respecter les droits d&#8217;auteur. S&#8217;il vous pla&icirc;t, minimisez le contenu r&eacute;pr&eacute;hensible et essayez d&#8217;inclure dans votre travail des th&egrave;mes uniques et int&eacute;ressants. Nous n&#8217;avons pas besoin d&#8217;un autre design utilisant le th&egrave;me du jardin.',
		"requirements-p4" => 'Ceci est aussi bien un exercice d&#8217;apprentissage que de d&eacute;monstration. Vous gardez les droits d&#8217;auteur de vos graphismes (&agrave; quelques exceptions pr&egrave;s, cf. &laquo;&nbsp;<a lang="en" href="http://www.mezzoblue.com/zengarden/submit/guidelines/">submission guidelines</a>&nbsp;&raquo;), mais nous vous demandons de publier votre fichier <abbr lang="en" title="Cascading Style Sheets">CSS</abbr> sous une license Creative Commons identique &agrave; <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" title="Voir la license du Jardin Zen">celle de ce site</a> pour que d&#8217;autres personnes puissent apprendre de votre travail.',
		"requirements-p5" => 'Par <a href="' . $zenUrls["zen-credits-creator"] . '">Dave Shea</a>. Bande pasante gr&acirc;cieusement offerte par <a href="http://www.mediatemple.net/">mediatemple</a>. Le livre &laquo;&nbsp;<a href="http://www.amazon.com/exec/obidos/ASIN/0321303474/mezzoblue-20/">The Zen of CSS Design: Visual Enlightenment for the Web</a>&nbsp;&raquo; est maintenant disponible.',
	);

	// if you decide to localize any of these, keep the link text <4 characters if possible
	// some older designs assume the longest one in the group was 'XHTML'
	$footer = array(
		"zen-validate-html-title" => "V&eacute;rifier la validit&eacute; HTML de ce site",
		"zen-validate-html-text" => "HTML",
		"zen-validate-css-title" => "V&eacute;rifier la validit&eacute; CSS de ce site",
		"zen-validate-css-text" => "CSS",
		"zen-license-title" => "Voir la license Creative Commons de ce site&nbsp;: Attribution - Pas d&#8217;utilisation commerciale - Partage dans les m&ecirc;mes conditions",
		"zen-license-text" => "CC",
		"zen-accessibility-title" => "En savoir plus sur l&#8217;accessibilit&eacute; de ce site",
		"zen-accessibility-text" => "A11y", // a-ccessibilit-y, the middle part is 11 characters. get it?
		"zen-github-title" => "Contribuer &agrave; ce projet sur Github",
		"zen-github-text" => "GH",
	);


	$sidebar = array(
		"design-selection-h3" => "Choisissez un design&nbsp;:",
		"design-selection-by" => "par",

		"design-archives-h3" => "Archives&nbsp;:",
		"design-archives-next" => "Designs suivants",
		"design-archives-previous" => "Designs pr&eacute;c&eacute;dents",
		"design-archives-viewall-title" => "Voir toutes les propositions soumises au Jardin Zen CSS.",
		"design-archives-viewall-text" => "Voir tous les designs",

		"design-resources-h3" => "Ressources&nbsp;:",
		"view-css-title" => 'Voir le fichier CSS source de la mise en forme en cours.',
		"view-css-text" => 'Voir le <abbr lang="en" title="Cascading Style Sheets">CSS</abbr> de ce design',
		"css-resources-title" => 'Liens vers de bons sites avec des informations sur l&#8217;utilisation de CSS.',
		"css-resources-text" => 'Ressources <abbr lang="en" title="Cascading Style Sheets">CSS</abbr>',
		"zen-faq-title" => 'Une liste de questions souvent pos&eacute;es au sujet du Jardin Zen CSS.',
		"zen-faq-text" => '<abbr title="Foire Aux Questions">FAQ</abbr>',
		"zen-submit-title" => 'Envoyez-nous votre propre fichier CSS.',
		"zen-submit-text" => 'Soumettre un design',
		"zen-translations-title" => 'Voir les traductions de cette page.',
		"zen-translations-text" => 'Traductions',
	);


	$foot = array(
		"comment" => "
	Ces div et span superflus ont été fournis initialement comme fourre-tout pour ajouter des images supplémentaires.
	Actuellement nous disposons du support complet de ::before et ::after, privilégiez plutôt leur utilisation.
	Ces balises sont conservées uniquement pour la compatibilité des anciennes mises en formes. Elles pourraient disparaître un jour.
		",
	);


?>