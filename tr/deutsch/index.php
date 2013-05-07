<?php
$loadCSS = "/001/001-de.css";
include '../../masterlist.php';
$letterarray = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Dave Shea" />
	<meta name="keywords" content="design, css, cascading, style, sheets, xhtml, graphic design, w3c, web standards, visual, display" />
	<meta name="description" content="Eine Demonstration dessen, was sich visuell mit Hilfe von CSS erreichen l&auml;&szlig;t." />
	<meta name="robots" content="all" />
	<title>css Zen Garden: Die Sch&ouml;nheit der CSS-Gestaltung</title>

	<!-- um den unansehnlichen Blitz bei ungestyletem Inhalt zu korrigieren (Flash of Unstyled Content). http://www.bluerobot.com/web/css/fouc.asp -->
	<script type="text/javascript"></script>
	
	<style type="text/css" title="currentStyle">
		@import "<?php echo $loadCSS; ?>";
	</style>
	<link rel="Shortcut Icon" type="image/x-icon" href="http://www.csszengarden.com/favicon.ico" />	
	<link rel="alternate" type="application/rss+xml" title="RSS" href="http://www.csszengarden.com/zengarden.xml" />
</head>

<!--

	Dieses XHTML Dokument wurde so ausgezeichnet, dass es dem Designer die groesstmoegliche Flexibilitaet gibt.
	Es enthaelt mehr Klassen und zusaetzliche Tags als erforderlich sind und im Wahren Leben duerften es
	wohl merklich weniger sein.
	
	Wie auch immer. Ich denke wir sind uns darueber einig, dass wir selbst damit immer noch besser dran
	sind, als alles mittels Tabellen zusammen zu bauen.


-->

<body id="css-zen-garden">

<div id="container">
	<div id="intro">
		<div id="pageHeader">
			<h1><span>css Zen Garden</span></h1>
			<h2><span>Die Sch&ouml;nheit des <acronym title="Cascading Style Sheets">CSS</acronym> Designs</span></h2>
		</div>

		<div id="quickSummary">
			<p class="p1"><span>Eine Demonstration dessen, was sich visuell mit Hilfe von <acronym title="Cascading Style Sheets">CSS</acronym> erreichen l&auml;&szlig;t. W&auml;hlen Sie eine Stil&#8211;Vorlage aus der Liste um sie mit dieser Seite anzeigen zu lassen.</span></p>
			<p class="p2"><span>Laden Sie die Beispieldateien f&uuml;r <a href="/zengarden-sample.html" title="This page's source HTML code, not to be modified.">HTML</a> und <a href="/zengarden-sample.css" title="This page's sample CSS, the file you may modify.">CSS</a> herunter</span></p>
		</div>

		<div id="preamble">
			<h3><span>Der Weg der Erleuchtung</span></h3>
			<p class="p1"><span>Wir blicken zur&uuml;ck auf den dunklen Weg vergangener Relikte wie browserspezifischen Tags, inkompatiblen <acronym title="Dokument Objekt Modell">DOM</acronym>s und einer br&uuml;chigen <acronym title="Cascading Style Sheets">CSS</acronym> Unterst&uuml;tzung.</span></p>
			<p class="p2"><span>Heute m&uuml;ssen wir den Kopf von den alten Praktiken befreien. Die Erleuchtung im Web wurde nicht zuletzt dank der unerm&uuml;dlichen Anstrengungen von Leuten wie dem <acronym title="World Wide Web Consortium">W3C</acronym>, <acronym title="Web Standards Project">WaSP</acronym> sowie den gro&szlig;en Browserherstellern erreicht.</span></p>
			<p class="p3"><span>Der css Zen Garden l&auml;d Sie ein zu entspannen und &uuml;ber die wesentlichen Lektionen der Meister zu mediteren. Beginnen Sie klar zu sehen. Lernen Sie die (letzten Endes) Zeit gewinnenden Techniken in einer neuen und anregenden Weise anzuwenden. Werden Sie Eins mit dem Web.</span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="explanation">
			<h3><span>Also, worum geht&#8217;s hier eigentlich?</span></h3>
			<p class="p1"><span>Es ist klar erforderlich, dass <acronym title="Cascading Style Sheets">CSS</acronym> von Grafikk&uuml;nstlern erst genommen wird. Der Zen Garden strebt danach zu begeistern, zu inspirieren und zur Teilname zu ermutigen. Betrachten Sie sich zun&auml;chst einige der existierenden Designs aus der Liste. Wenn Sie eines davon anklicken wird es in diese Seite geladen. Der Code bleibt der selbe, das einzige, dass sich ge&auml;ndert hat ist die externe CSS Datei. Ja, wirklich.</span></p>
			<p class="p2"><span><acronym title="Cascading Style Sheets">CSS</acronym> erlaubt vollst&auml;ndige und totale Steuerung &uuml;ber die Gestaltung eines Hypertext&#8211;Dokuments. Der einzige Weg es auf eine Weise zu illustrieren welche die Leute begeistert, besteht darin zu demonstrieren wie es wirklich sein kann, wenn man die Z&uuml;gel denjenigen in die Hand gibt die in der Lage sind, Sch&ouml;nheit aus Struktur zu schaffen. Bis heute wurden die meisten Beispiele der geschickten Tricks und Hacks von Strukturisten und Programmierern vorgef&uuml;hrt. Designer m&uuml;ssen ihre Spuren erst noch hinterlassen. Das muss sich &auml;ndern.</span></p>
		</div>

		<div id="participation">
			<h3><span>Teilnahme</span></h3>
			<p class="p1"><span>Bitte nur Grafikk&uuml;nstler. Sie modifizieren diese Seite, daher sind erhebliche Kenntnisse in <acronym title="Cascading Style Sheets">CSS</acronym> erforderlich, jedoch sind die Beispieldateien ausreichend kommentiert, damit sie auch von <acronym title="Cascading Style Sheets">CSS</acronym>&#8211;Anf&auml;ngern als Ausgangspunkt verwendet werden k&ouml;nnen. Bitte schauen Sie in den <a href="http://www.mezzoblue.com/zengarden/resources.asp" title="Eine Liste CSS relevanter Quellen">Quellenf&uuml;hrer f&uuml;r <acronym title="Cascading Style Sheets">CSS</acronym></a> nach fortgeschrittenen Tutorien und Tipps zur Arbeit mit <acronym title="Cascading Style Sheets">CSS</acronym>.</span></p>
			<p class="p2"><span>Sie k&ouml;nnen das Stylesheet nach Ihren W&uuml;nschen modifizieren, aber nicht das <acronym title="HyperText Markup Language">HTML</acronym>. Das mag zun&auml;chst entmutigend klingen, wenn Sie vorher noch nie auf diese Weise gearbeitet haben, folgen Sie den aufgef&uuml;hrten Links um mehr dar&uuml;ber zu lernen und verwenden Sie die Beispieldateien als Anleitung.</span></p>
			<p class="p3"><span>Laden Sie sich die <a href="/zengarden-sample.html" title="This page's source HTML code, not to be modified.">HTML</a>&#8211; und <a href="/zengarden-sample.css" title="This page's sample CSS, the file you may modify.">CSS</a>&#8211;Beispieldateien herunter um mit einer lokalen Kopie zu arbeiten. Nachdem Sie ihr Meisterst&uuml;ck vollendet haben (und bitte, senden Sie keine halbfertigen Arbeiten ein), laden Sie ihre .css Datei auf einen Webserver auf den Sie Zugriff haben. <a href="http://www.mezzoblue.com/zengarden/sendfile.asp" title="Verwenden Sie das Kontaktformular um uns ihre CSS zu senden">Senden Sie uns einen Link</a> zu der Datei und wenn wir uns entschliessen sie zu verwenden, werden wir die zugeh&ouml;rigen Bilder herunterladen. Entg&uuml;ltige Einsendungen werden auf unserem Server platziert.</span></p>
			<p class="p4"><span>Nachtrag: Ich suche nach &Uuml;bersetzern. Wenn sie fliessend in Englisch und einer anderen Sprache sind, ist dies eine weitere M&ouml;glichkeit um an dem Projekt teilzunehmen. Bitte nehmen Sie <a href="http://www.mezzoblue.com/contact/" title="Senden Sie mit eine E-Mail mit der Angabe welche Sprache sie fliessend beherrschen.">Kontakt mit mir</a> auf wegen der Details. &Uuml;bersetzt von <a href="http://www.webmechanic.biz/">R. Serradeil</a>.</span></p>
		</div>

		<div id="benefits">
			<h3><span>Vorteile</span></h3>
			<p class="p1"><span>Warum teilnehmen? Wegen der Anerkennung, Inspiration und einer Quelle auf die wir alle verweisen k&ouml;nnen, wenn es um den Anwendungsfall von <acronym title="Cascading Style Sheets">CSS</acronym> basierendem Design geht. Dies ist dringend erforderlich, selbst heutzutage. Immer mehr bedeutende Seiten machen den Sprung, aber bislang zu wenige. Eines Tages wird diese Galerie eine historische Kuriosit&auml;t sein; dieser Tag ist nicht heute.</span></p>
		</div>

		<div id="requirements">
			<h3><span>Voraussetzungen</span></h3>
			<p class="p1"><span>Wir m&ouml;chten so viel <acronym title="Cascading Style Sheets, Version 1">CSS1</acronym> sehen wir m&ouml;glich. <acronym title="Cascading Style Sheets, Version 2">CSS2</acronym> sollte auf die am weitesten unterst&uuml;tzten Elemente beschr&auml;nkt werden. Beim css Zen Garden geht es um funktionales, praktisches <acronym title="Cascading Style Sheets">CSS</acronym> und nicht die allerheisstesten, letzten Tricks die von 2% der browsenden &Ouml;ffentlichkeit gesehen werden k&ouml;nnen.
			Die einzig wirkliche Voraussetzung die wir haben ist, dass Ihr <acronym title="Cascading Style Sheets">CSS</acronym> validiert.</span></p>
			<p class="p2"><span>Ungl&uuml;cklicherweise hebt diese Art des Gestaltens die M&auml;ngel in den verschiedenen <acronym title="Cascading Style Sheets">CSS</acronym>&#8211;Implementierungen hervor. Verschiedene Browser zeigen Verschiedenes an, ab und an sogar ein v&ouml;llig g&uuml;ltiges <acronym title="Cascading Style Sheets">CSS</acronym>, und dies wird &auml;u&szlig;erst argerlich, wenn ein Fix f&uuml;r den Einen zum Bruch bei einem Anderen f&uuml;hrt. Schauen sie auf der <a href="http://www.mezzoblue.com/zengarden/resources.asp" title="Eine Aufstellung CSS relevanter Ressourcen">Ressourcenseite</a> nach Informationen zu einigen der verf&uuml;gbaren Fixes. Volle Browserunterst&uuml;tzung ist immer noch ein gelegentlicher Wunschtraum und wir erwarten von Ihnen nicht, dass Sie pixelperfektem Code f&uuml;r jede Plattform abliefern. Testen Sie jedoch auf so vielen wie Ihnen m&ouml;glich ist. Wenn Ihr Design nicht wenigstens in IE5+/Win und Mozilla (sie laufen bei &uuml;ber 90% der Bev&ouml;lkerung) funktioniert, stehen die Chancen gut, dass wir es nicht akzeptieren werden.</span></p>
			<p class="p3"><span>Wir m&ouml;chten sie bitten, nur Originalwerke einzusenden. Bitte respektieren Sie die Urheberrechte. Halten Sie anst&ouml;&szlig;iges Material auf ein Minimum; geschmackvolle Nacktheit ist akzeptabel, absolute Pornographie wird abgelehnt.</span></p>
			<p class="p4"><span>Dies ist sowohl eine Lern&uuml;bung als auch eine Demonstration. Sie behalten volles Copyright an ihren Grafiken, aber wir bitten Sie darum, ihr <acronym title="Cascading Style Sheets">CSS</acronym> unter die Creative Commons Lizenz zu stellen, identisch mit der <a href="http://creativecommons.org/licenses/sa/1.0/" title="Beachten Sie die Zen Garden Lizensinformation.">auf dieser Seite</a>, damit andere von Ihrer Arbeit lernen k&ouml;nnen.</span></p>
			<p class="p5"><span>Bandbreite freundlicherweise gespendet von <a href="http://www.mediatemple.net/">mediatemple</a></span></p>
		</div>

		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="Pr&uuml;fen Sie die G&uuml;ltigkeit des XHTML dieser Seite">xhtml</a> &nbsp; 
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="Pr&uuml;fen Sie die G&uuml;ltigkeit des CSS dieser Seite">css</a> &nbsp; 
			<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="Sehen sie Details zur Lizenz dieser Seite, mit freundlicher Genehmigung von Creative Commons.">cc</a> &nbsp;
			<a href="http://www.mezzoblue.com/zengarden/faq/#s508" title="Pr&uuml;fen Sie die Zug&auml;nglichkeit dieser Seite gem&auml;&szlig; der U.S. Section 508">508</a> &nbsp;
			<a href="http://www.mezzoblue.com/zengarden/faq/#aaa" title="Pr&uuml;fen Sie die Zug&auml;nglichkeit dieser Seite gem&auml;&szlig; der WAI Content Accessibility Guidelines 1">aaa</a>
		</div>

	</div>


	
	<div id="linkList">
		<!-- extra DIV für Flexibilitaet - diese Liste wird wohl der trickreichste Punkt sein, mit dem sie zu kämpfen haben -->
		<div id="linkList2">

		<!-- Falls Sie sich über das zusaetzliche &nbsp; am Ende des Link wundern, es handelt sich um einen Hack um die WCAG 1 Accessibility zu erfüllen. -->
		<!-- Ich hasse es dies zu tun, aber dies ist eine visuelle Übung. Es ist ein Kompromiss. -->
			<div id="lselect">
				<h3 class="select"><span>Select a Design:</span></h3>
				<!-- hier begint die Liste der Links. Es werden nicht mehr als 8 Links auf der Seite sein -->
				<ul>
<?php
					$c = 0;
					for ($a = ($listStart + 1); $a <= $listEnd; $a++) {
						$b = $listEnd - $c;
						$d = $letterarray[$c];
						$tempLink = linkMe($filename[$b]);
						echo "\t\t\t\t\t";
						echo "<li><a href=\"?cssfile=/${tempLink}/${tempLink}.css&amp;page=${thisPage}\" title=\"AccessKey: ${d}\" accesskey=\"${d}\">${styleName[$b]}</a> von <a href=\"${styleURL[$b]}\" class=\"c\">${styleCreator[$b]}</a></li>";
						echo "\n";
						$c = $c + 1;
					}
?>
				</ul>
			</div>
			
			<!--
				Dies wird nicht angezeigt bis das Archiv sich gefüllt hat. Aber planen Sie es ein. 
				Wenn Sie starke Anpassungen am 'Wählen Sie ein Design' h3 gemacht haben, muss dieses
				ebenfalls angepasst werden.
			<div id="lfavorites">
				<h3 class="favorites"><span>Favoriten:</span></h3>
				<ul>
					<li><a href="#">filename</a> von <a href="" class="c">submitter</a>&nbsp;</li>
					<li><a href="#">filename</a> von <a href="" class="c">submitter</a>&nbsp;</li>
				</ul>
			</div>
			-->
						
			<div id="larchives">
				<h3 class="archives"><span>Archive:</span></h3>
				<ul>
<?php
					
					$forward = $thisPage + 1;
					$backward = $thisPage - 1;
					
					if ($listStart >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"${thisFile}?cssfile=${currentDesign}&amp;page=${forward}\" title=\"View next set of designs. AccessKey: n\" accesskey=\"n\"><span class=\"accesskey\">n</span>&auml;chste Designs &raquo;</a></li>\n";
					}

					if ($thisPage >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"View previous set of designs. AccessKey: p\" accesskey=\"p\">&laquo; <span class=\"accesskey\">p</span>revious designs</a></li>\n";
					}
?>
					<li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="View every submission to the Zen Garden. AccessKey: w" accesskey="w">Alle Designs</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>Resources:</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"${currentDesign}\" title=\"View the source CSS file for the currently-viewed design, AccessKey: v\" accesskey=\"v\"><acronym title=\"Cascading Style Sheets\">CSS</acronym> <span class=\"accesskey\">v</span>on dieser Seite</a></li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources/" title="Links to great sites with information on using CSS. AccessKey: r" accesskey="r"><acronym title="Cascading Style Sheets">CSS</acronym> <span class="accesskey">R</span>essourcen</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/faq/" title="A list of Frequently Asked Questions about the Zen Garden. AccessKey: q" accesskey="q"><acronym title="Frequently Asked Questions">FA<span class="accesskey">Q</span></acronym></a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/submit/" title="Send in your own CSS file. AccessKey: s" accesskey="s">Ein De<span class="accesskey">s</span>ign abgeben</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/translations/" title="View translated versions of this page. AccessKey: t" accesskey="t">&Uuml;berse<span class="accesskey">t</span>zungen</a></li>
				</ul>
			</div>
		</div>
	</div>


</div>

<!-- Diese extra DIVs können als Auffänger für zusätziche Bebilderung verwendet werden. -->

<!-- Legen Sie für jedes ein Hintergrundbild fest und verwenden Sie width und height um die Groesse steuern, platzieren Sie es mit absoluter Positionierung -->

<!-- Es gibt leider einen sehr miesen Farbverschiebungs bug mit transparenten GIFs in Netscape 6/7 und Mozilla v1.0 bis v1.3 (wo er behoben wurde),

	also stellen Sie sicher, dass Sie ihr Werk in diesen Browsern testen. -->

<div id="extraDiv1"><span></span></div><div id="extraDiv2"><span></span></div>
<div id="extraDiv3"><span></span></div>
<div id="extraDiv4"><span></span></div>
<div id="extraDiv5"><span></span></div><div id="extraDiv6"><span></span></div>





</body>
</html>