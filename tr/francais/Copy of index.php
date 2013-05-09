<?php

include '../../includes/masterlist.php';

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Dave Shea" />
	<meta name="keywords" content="design, css, cascading, style, sheets, xhtml, graphic design, w3c, web standards, visual, display" />
	<meta name="description" content="A demonstration of what can be accomplished visually through CSS-based design." />
	<meta name="robots" content="all" />

	<title>Jardin Zen css: La beaut&eacute; de la conception CSS</title>

	<!-- to correct the unsightly Flash of Unstyled Content. http://www.bluerobot.com/web/css/fouc.asp -->
	<script type="text/javascript"></script>
	
	<style type="text/css" media="all" title="currentStyle">
		@import "<?php echo $loadCSS; ?>";
	</style>
	<link rel="Shortcut Icon" type="image/x-icon" href="http://www.csszengarden.com/favicon.ico" />	
	
</head>

<!--


	Ce document xhtml est comment&eacute; pour donner au concepteur le maximum de 
	flexibilit&eacute;.  Il y a plus de classes et de marqueur que n&eacute;c&eacute;ssaire dans 
	une vraie situation il y en aurait bien moins.

	Cependant, je crois que nous pouvons tous accepter that malgr&eacute; cela, nous sommes 
	mieux plac&eacute;s que si nous avions utilis&eacute;s des tables.

-->

<body onload="window.defaultStatus='Jardin Zen css: La beaut&eacute; de la conception CSS';" id="css-zen-garden">

<div id="container">
	<div id="intro">
		<div id="pageHeader">
			<h1><span>Jardin Zen css</span></h1>
			<h2><span>La beaut&eacute; de la conception <acronym title="Cascading Style Sheets">CSS</acronym></span></h2>
		</div>

		<div id="quickSummary">
			<p class="p1"><span>Une demonstration de ce qu'on peut accomplir lorsqu'on utilise le <acronym title="Cascading Style Sheets">CSS</acronym> pour la conception web.  S&eacute;lectionez n'importe quelle feuille de style list&eacute;e pour charger le r&eacute;sultat sur cette page.</span></p>
			<p class="p2"><span>T&eacute;l&eacute;chargez les fichiers d'exemple <a href="zengarden-sample.html" title="Clique-droit pour sauver ce document sur votre disque dur.">html</a> et <a href="zengarden-sample.css" title="Clique-droit pour sauver ce document sur votre disque dur.">css</a></span></p>
		</div>

		<div id="preamble">
			<h3><span>Le chemin vers l'&eacute;dification</span></h3>
			<p class="p1"><span>Les reliques pass&eacute;es des s&eacute;lecteurs sp&eacute;cifique aux navigateurs, des <acronym title="Document Object Model">DOM</acronym>s incompatibles, et du manque de support des <acronym title="Cascading Style Sheets">CSS</acronym> encombrent un long chemin sombre et morne.</span></p>
			<p class="p2"><span>Aujourd'hui, nous devons nous clarifier l'esprit et nous d&eacute;barassez des pratiques pass&eacute;es.  La r&eacute;v&eacute;lation de la v&eacute;ritable nature du Web est maintenant possible, gr&acirc;ce aux efforts infatigables des gens du <acronym title="World Wide Web Consortium">W3C</acronym>, du <acronym title="Web Standards Project">WaSP</acronym> et des cr&eacute;ateurs de principaux navigateurs.</span></p>
			<p class="p3"><span>Le Jardin Zen css vous invite &agrave; relaxer et m&eacute;diter sur les le&ccedil;ons importantes des ma&icirc;tres.  Commencez &agrave; voir clairement.  Apprenez &agrave; utiliser ces techniques (bient&ocirc;t consacr&eacute;es par l'usage) de mani&egrave;re neuve et revigorante.  Ne faites qu'Un avec le Web.</span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="explanation">
			<h3><span>Alors, de quoi s'agit&#8211;il?</span></h3>
			<p class="p1"><span>Il y a clairement un besoin pour les graphistes de prendre les <acronym title="Cascading Style Sheets">CSS</acronym> au s&eacute;rieux.  Le Jardin Zen vise &agrave; exciter, inspirer, et encourager la participation.  Pour commencer, voyez quelques concepts choisis dans la liste.  Cliquer sur n'importe lequel pour le charger sur cette page.  Le code HTML demeure le m&ecirc;me, et seule la feuille de style ext&eacute;rieure change.  Oui, vraiment.</span></p>
			<p class="p2"><span>Les <acronym title="Cascading Style Sheets">CSS</acronym> permettent un contr&ocirc;le complet et total du style d'un document hypertexte.  La seule mani&egrave;re de vraiment d&eacute;montrer cela d'une mani&egrave;re qui excite les gens est de d&eacute;montrer ce qui peut vraiment &ecirc;tre, une fois que les rennes ont &eacute;t&eacute; plac&eacute;es dans les mains de ceux capables de cr&eacute;er la beaut&eacute; bas&eacute;e sur la forme.  Jusqu'&agrave; maintenant, les exemples de trouvailles et montages int&eacute;ressants ont &eacute;t&eacute;s fournis par des programmeurs et des structuralistes.  Les concepteurs ont encore &agrave; faire leurs preuves.  Cela doit changer.</span></p>
		</div>

		<div id="participation">
			<h3><span>Participation</span></h3>
			<p class="p1"><span>Graphistes seulement s'il vous pla&icirc;t.  Vous aller devoir modifier cette page, donc une comp&eacute;tence solide en <acronym title="Cascading Style Sheets">CSS</acronym> est n&eacute;cessaire, mais les documents exemples sont suffisament comment&eacute;s pour que les novices en <acronym title="Cascading Style Sheets">CSS</acronym> puisent les utiliser comme points de d&eacute;part.  S'il vous pla&icirc;t, consultez le <a href="http://www.mezzoblue.com/zengarden/resources/" title="Une liste de resources CSS">Guide de Ressources <acronym title="Cascading Style Sheets">CSS</acronym></a> pour des tutoriaux avanc&eacute;s et de l'information pour travailler avec les <acronym title="Cascading Style Sheets">CSS</acronym>.</span></p>
			<p class="p2"><span>Vous pouvez modifier la feuille de style de n'importe quelle mani&egrave;re, mais pas le code <acronym title="HyperText Markup Language">HTML</acronym>.  Ceci peut sembler d&eacute;courageant au d&eacute;but si vous n'avez jamas travaill&eacute; de cette mani&egrave;re, mais suivez les liens pour en apprendre plus, et utilisez les exemples pour vous guider.</span></p>
			<p class="p3"><span>T&eacute;l&eacute;chargez fichiers d'exemple <a href="zengarden-sample.html" title="Clique-droit pour sauver ce document sur votre disque dur.">html</a> et <a href="zengarden-sample.css" title="Clique-droit pour sauver ce document sur votre disque dur.">css</a> pour travailler avec une copie locale.  Une fois que vous avez fini votre chef d'oeuvre (ne soumettez pas de travaux incomplets), t&eacute;l&eacute;chargez votre document .css sur un serveur web sous votre contr&ocirc;le.  <a href="http://www.mezzoblue.com/zengarden/submit/" title="Utilisez la forme de contacte pour nous envoyez fotre document CSS">Envoyez-nous un lien</a> vers votre document, et si nous le s&eacute;lectionnons, nous rel&egrave;verons les images n&eacute;c&eacute;ssaires.</span></p>
			<p class="p4"><span>Mise &agrave; jour:  je cherche des traducteurs.  Si vous parlez l'anglais couramment ainsi qu'une autre langue, vous auriez ainsi la possibilit&eacute; de participer d'une autre mani&egrave;re au projet. S'il vous pla&icirc;t, <a href="http://www.mezzoblue.com/contact/">contactez-moi</a> pour plus de d&eacute;tails. Traduction par <a href="http://www.bmee.net/">Nicolas Steenhout</a> et <a href="http://www.pouipouidesign.net">Marie Alhomme</a>.</span></p>
		</div>

		<div id="benefits">
			<h3><span>B&eacute;n&eacute;fices</span></h3>
			<p class="p1"><span>Pourquoi participer?  Pour &ecirc;tre reconnu, pour l'inspiration, et pour cr&eacute;er une ressource que nous pouvons tous utiliser quand nous voulons promouvoir le cas de la conception web &agrave; base de <acronym title="Cascading Style Sheets">CSS</acronym>.</span></p>
		</div>

		<div id="requirements">
			<h3><span>Crit&egrave;res</span></h3>
			<p class="p1"><span>Nous aimerions voir autant de <acronym title="Cascading Style Sheets, version 1">CSS1</acronym> que possible.  <acronym title="Cascading Style Sheets, version 2">CSS2</acronym> devrait &ecirc;tre limit&eacute; aux &eacute;lements bien support&eacute;s.  Le Jardin Zen css est bas&eacute; sur une approche pratique et fonctionelle des <acronym title="Cascading Style Sheets">CSS</acronym>, et non sur les derniers proc&eacute;d&eacute;s lisibles seulement pour 2% du publique.  Le seul vrai crit&egrave;re est que votre <acronym title="Cascading Style Sheets">CSS</acronym> puisse &ecirc;tre valid&eacute;.</span></p>
			<p class="p2"><span>Malheureusement, conceptualiser de cette mani&egrave;re rehausse les d&eacute;fautes des diff&eacute;rentes impl&eacute;mentations <acronym title="Cascading Style Sheets">CSS</acronym>.  Differents navigateurs affichent de mani&egrave;re diff&eacute;rente le m&ecirc;me code, des fois m&ecirc;me avec une <acronym title="Cascading Style Sheets">CSS</acronym> compl&eacute;tement valide, et &ccedil;a devient enrageant quand une solution pour un navigateur &eacute;quivaut &agrave; un nouveau probl&egrave;me dans un autre.  Consulter la page de <a href="http://www.mezzoblue.com/zengarden/resources/" title="Une liste de ressource CSS">Ressources</a> pour de l'information au sujet de quelques solutions disponibles.  La conformit&eacute; des navigateurs appartient encore au domaine du r&ecirc;ve, et nous ne nous attendons pas &agrave; ce que vous obteniez avec un code parfait sur toutes les plates-formes.  Mais testez avec autant de navigateurs et plates-formes que possible.  Si votre concept ne fonctionne pas au moins avec IE5+/Win et Mozilla (utilis&eacute; par 90% de la population), les chances sont bonnes que nous ne l'accepterons pas.</span></p>
			<p class="p3"><span>Nous demandons que vous soumettiez des graphismes originaux.  Veuillez respecter les lois du Copyright.  S'il vous pla&icirc;t, veuillez garder le mat&eacute;riel choquant ou inaceptable au minimum; la nudit&eacute; l&eacute;g&egrave;r et justifi&eacute;e est acceptable, la pornographie sera rejett&eacute;e.</span></p>
			<p class="p4"><span>Ceci est un exercice d'apprentissage.  Vous gardez le Copyright complet de vos graphiques, mais nous vous demandons de c&eacute; votre fichier <acronym title="Cascading Style Sheets">CSS</acronym> sous une license Creative Commons identique &agrave; celle <a href="http://creativecommons.org/licenses/sa/1.0/">sur ce site (en anglais)</a> afin que d'autres personnes puissent en apprendre.</span></p>
		</div>

		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="V&eacute;rifiez la validit&eacute; XHTML de ce site.">xhtml</a> &nbsp; 
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="V&eacute;rifiez la validit&eacute; CSS de ce site.">css</a> &nbsp; 
			<a href="http://creativecommons.org/licenses/sa/1.0/" title="Voir les details de la license de ce site, courteoisie de Creative Commons.">cc</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=sec508&amp;test=" title="V&eacute;rifiez l'accessibilit&eacute; de ce site d'apr&egrave;s le U.S. Section 508">508</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=wcag1-aaa&amp;test=" title="V&eacute;rifiez l'accessibilit&eacute; de ce site d'apr&egrave;s le Guide d'Accessibility de WAI, version 1">aaa</a>
		</div>

	</div>

	
	<div id="linkList">
		<div id="linkList2">
			<div id="lselect">

				<h3 class="select"><span>Choisissez une conception:</span></h3>
				<ul>
<?php
					$c = 0;
					for ($a = ($listStart + 1); $a <= $listEnd; $a++) {
						$b = $listEnd - $c;
						$tempLink = linkMe($filename[$b]);
						echo "\t\t\t\t\t";
						echo "<li><a href=\"${tempLink}&amp;page=${thisPage}\">${styleName[$b]}</a> par <a href=\"${styleURL[$b]}\" class=\"c\">${styleCreator[$b]}</a>&nbsp;</li>";
						echo "\n";
						$c = $c + 1;
					}
?>
				</ul>
			</div>

			<div id="larchives">
				<h3 class="archives"><span>Archives:</span></h3>
				<ul>
<?php
					
					$forward = $thisPage + 1;
					$backward = $thisPage - 1;
					
					if ($listStart >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"${thisFile}?cssfile=${currentDesign}&amp;page=${forward}\">Conceptions suivantes &raquo;</a>&nbsp;</li>\n";
					}

					if ($thisPage >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\">&laquo; Conceptions avant</a>&nbsp;</li>\n";
					}
?>
					<li><a href="http://www.mezzoblue.com/zengarden/alldesigns/">Voir toutes les conceptions</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>Ressources:</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"http://www.csszengarden.com/${currentDesign}\">Voir le <acronym title=\"Cascading Style Sheets\">CSS</acronym> pour cette conception</a></li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources/">Ressources <acronym title="Cascading Style Sheets">CSS</acronym></a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/faq/" title="Une liste de Questions Souvent Demand&eacute;es au sujet du Jardin Zen css"><acronym title="Questions Souvent Demand&eacute;es, ou Frequently Asked Questions en Anglais">FAQ</acronym></a>&nbsp;</li>
					<li><a href="http://www.mezzoblue.com/zengarden/submit/">Soummettez une conception</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/translations/" title="Voir les traductions pour cette page.">Traductions</a></li>
				</ul>
			</div>
		</div>
	</div>


</div>

<!--Ces divs/spans suppl&eacute;mentaires peuvent &ecirc;tre utilis&eacute;es pour ajoutter des images suppl&eacute;mentaires.-->
<div id="extraDiv1"><span></span></div><div id="extraDiv2"><span></span></div><div id="extraDiv3"><span></span></div>
<div id="extraDiv4"><span></span></div><div id="extraDiv5"><span></span></div><div id="extraDiv6"><span></span></div>


<!--D&eacute;sol&eacute; pour ceci.  Je n'ai pas de statistiques serveur, donc c'est ma conc&eacute;ssion &agrave; ma vanit&eacute;-->
<script type="text/javascript">
<!--//
document.write('<img src="http://www.hotstats.gr/cgi-bin/hotstats/easystat?acct=mezzoblue');
document.write('&ref=' + escape(document.referrer) + '" border="0" alt="">');
//-->
</script>


</body>
</html>