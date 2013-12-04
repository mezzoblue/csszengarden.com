<?php

include '../../includes/masterlist.php';
$letterarray = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Dave Shea" />
	<meta name="keywords" content="design, css, cascading, style, sheets, xhtml, graphic design, w3c, web standards, visual, display" />
	<meta name="description" content="Een demonstratie van hetgeen men visueel kan bereiken met CSS gebaseerde ontwerpen" />
	<meta name="robots" content="all" />
	<title>css Zen Garden: De schoonheid van ontwerpen met CSS</title>

	<!-- to correct the unsightly Flash of Unstyled Content. http://www.bluerobot.com/web/css/fouc.asp -->
	<script type="text/javascript"></script>
	
	<style type="text/css" title="currentStyle">
		@import "<?php echo $loadCSS; ?>";
	</style>
	<link rel="Shortcut Icon" type="image/x-icon" href="http://www.csszengarden.com/favicon.ico" />	
	<link rel="alternate" type="application/rss+xml" title="RSS" href="http://www.csszengarden.com/zengarden.xml" />
</head>

<!--


	Dit xhtm document is gemarkeerde met het maximum aan flexibiliteit voor de ontwerper. Er zijn meer classes en tags dan noodzakelijk en in de praktijk
	is het waarschijnlijker dat het veel minder zou bevatten.
	
	Echter, ik denk dat iedereen het er wel over eens kan zijn dat we veel beter af zijn dat als we dit met tabellen hadden moeten bouwen.	


-->

<body id="css-zen-garden">

<div id="container"> 	
	<div id="intro"> 		
		<div id="pageHeader"> 			
			<h1><span>css Zen Garden</span></h1>
			<h2><span>De schoonheid van ontwerpen met <acronym title="Cascading Style Sheets">CSS</acronym> </span></h2>
		</div>

		<div id="quickSummary"> 			
			<p class="p1"><span>Een demonstratie van hetgeen men visueel kan bereiken met CSS gebaseerde ontwerpen. Kies &eacute;&eacute;n van de style sheets (ontwerpen) uit de lijst om te gebruiken in deze pagina.</span></p>
			<p class="p2"><span>Download een voorbeeld <a href="/zengarden-sample.html" title="De html mag van dit bestand niet aangepast worden">html bestand</a> en <a href="/zengarden-sample.css" title="Het css voorbeeld bestand, deze mag aangepast worden.">css bestand</a></span></p>
		</div>

		<div id="preamble">
			<h3><span>De weg naar verlichting</span></h3>
			<p class="p1"><span>We laten achter ons een duistere weg van overblijfselen van browser specieke tags, incompatibele <acronym title="Document Object Model">DOM</acronym>s, en niet werkende <acronym title="Cascading Style Sheets">CSS</acronym> ondersteuning.</span></p>
			<p class="p2"><span>Hedentendaage moeten we ons hoofd leeg maken en ontdoen van de technieken uit het verleden.Web Verlichting is mogelijk gemaakt door de onvermoeibare inspanningen van de mensen van de <acronym title="World Wide Web Consortium">W3C</acronym>,<acronym title="Web Standaards Project">WaSP</acronym> en de grote browser producenten.</span></p>
			<p class="p3"><span>De css Zen Garden nodigt u uit om te relaxen en te mediteren op de belangrijke lessen van de meesters. Begin met het zuiver zien. Leer om nieuwe (binnekort) tijd-winnende technieken op versterkende wijze te gebruiken.Wordt een met het web.</span></p>
		</div>
	</div>
	
	<div id="supportingText"> 		
		<div id="explanation"> 			
			<h3><span>Waar gaat dit over?</span></h3>
			<p class="p1"><span>Er is een duidelijke noodzaak voor het serieus nemen van <acronym title="Cascading Style Sheets">CSS</acronym> door grafische ontwerpers. De Zen Garden richt zich op het enthousiast maken, inspireren en aanmoedigen van het gebruiken van CSS door grafische ontwerpers. Kijk om te beginnen in de lijst met aanwezige ontwerpen. Door te klikken op een ontwerp wordt het ontwerp in deze pagina ingeladen. De code blijft hetzelfde, het enige wat verandert is het externe .css bestand.</span></p>
			<p class="p2"><span><acronym title="Cascading Style Sheets">CSS</acronym> stelt ons in staat complete en totale controle uit te oefenen over de opmaak van een hypertext document. De enige wijze waarop dit ge&iuml;llustreerd kan worden ,op een manier dat dit mensen enthousiast maakt, is door middel van een demonstratie van wat css echt betekent in de handen van diegene die schoonheid cre&euml;eren vanuit structuur. Tot op heden, zijn de meeste voorbeelden van mooie trucs en hacks gedemonstreerd door 'structureerders' en programmeurs. Grafische ontwerpers moeten hier echter nog hun stempel drukken. Dit moet dus snel gaan gebeuren.</span></p>
		</div>

		<div id="participation"> 			
			<h3><span>Deelname</span></h3>
			<p class="p1"><span>Bij voorkeur alleen grafische ontwerpers. U past deze pagina aan, dus goede vaardigheden op het gebied van <acronym title="Cascading Style Sheets">CSS</acronym> zijn noodzakelijk. Echter de voorbeeld bestanden zijn zodanige becommentarieert dat zelfs beginnende CSS-ers ze kunnen gebruiken als startpunt. Zie ook de <a href="http://www.mezzoblue.com/zengarden/resources.asp" title="Een lijst met CSS gerelateerde bronnen"><acronym title="Cascading Style Sheets">CSS</acronym> Bronnen</a> voor geavanceerde handleidingen en tips voor het werken met CSS.</span></p>
			<p class="p2"><span>U mag de style sheet wijzigen zoals u wilt, echter de HTML niet! Dit komt misschien wat vreemd over als u nog nooit op deze wijze gewerkt heeft, maar volg de links op deze pagina om meer te leren en gebruik de voorbeeld bestanden als een richtlijn.</span></p>
			<p class="p3"><span>Download het voorbeeld <a href="/zengarden-sample.html" title="De html mag van dit bestand niet aangepast worden">html bestand</a> en <a href="/zengarden-sample.css" title="Het css voorbeeld bestand, deze mag aangepast worden.">css bestand</a> om er lokaal eraan te kunnen werken. Op het moment dat u uw meesterwerk klaar heeft (en alstublieft stuur geen half afgemaakt werk) kunt u uw .css bestand&nbsp; uploaden naar een web server waar u toegang tot heeft. Stuur ons het adres van uw bestand en als we besluiten om het te gaan gebruiken zullen we de  bijbehorende plaatjes er bij downloaden. Uiteindelijk zullen toegezonden aanmeldingen op onze server geplaatst worden.</span></p>
			<p class="p4"><span>NB: Ik ben op zoek naar vertalers. Als u vloeiend Engels spreekt en daarnaast een andere taal, dan kunt u op deze wijze deelnemen aan dit project. Neem <a href="http://www.mezzoblue.com/contact/" title="Stuur mij een email (in het Engels) met de talen die u vloeiend spreekt">contact op met mij</a> voor de details..Voor op- en aanmerkingen betreffende deze Nederlandse vertaling kunt u contact opnemen met <a href="http://www.bdisfunctional.net/">Björn Wijers</a></span></p>
		</div>
		
		<div id="benefits"> 			
			<h3><span>Voordelen</span></h3>
			<p class="p1"><span>Waarom deelnemen? Voor de (h)erkenning, inspiratie en het meewerken aan een bron waar we allemaal naar kunnen verwijzen om het gebruik van <acronym title="Cascading Style Sheets">CSS</acronym> gebaseerd ontwerpen te promoten. Dit is zeer noodzakelijk, zelfs hedentendaage. Steeds meer grote web sites nemen de stap naar <acronym title="Cascading Style Sheets">CSS</acronym> gebaseerd ontwerp, maar velen hebben dat nog niet gedaan. Ooit zal deze galerij een historische curiositeit zijn, maar die dag is nog niet daar.</span></p>		</div>

		<div id="requirements"> 			
			<h3><span>Vereisten</span></h3>
			<p class="p1"><span>We zouden graag zoveel mogelijk <acronym title="Cascading Style Sheets, versie 1">CSS1</acronym> willen zien. <acronym title="Cascading Style Sheets, versie 2">CSS2</acronym> moet beperkt blijven tot breed ondersteunde elementen. De css Zen Garden gaat over functioneel, praktisch CSS en niet over de laatste high-tech mogelijkheden die alleen zichtbaar zijn voor 2% van het surfendepubliek. De enige echte vereiste is dat u uw CSS valideert.</span></p>
			<p class="p2"><span>Helaas, belicht het ontwerpen van web sites op deze wijze de gaten in de diverse implementaties van CSS. Verschillende browsers vertonen, zelfs volledig valide CSS </span><span>op verschillende wijzen. Dit wordt soms gek makend waarbij een oplossing voor de ene browser tot problemen leidt bij een andere browser. Bekijk de <a href="http://www.mezzoblue.com/zengarden/resources.asp" title="Een lijst met CSS gerelateerde bronnen">Bronnen</a> pagina voor informatie over de verschillende oplossingen. Volledige browser compatibiliteit is soms een wensdroom en we verwachten dan ook niet dat u met pixel-perfecte code komt voor elk platform. Maar test in zoveel mogelijk browsers als u kunt. Als uw ontwerp niet werkt in minimaal Internet Explorer 5+/Win en Mozilla (in gebruik door 90% van de bevolking) dan heeft u grote kans dat we uw ontwerp niet accepteren.</span></p>
			<p class="p3"><span>We vragen u om alleen ontwerpen die door u zelf zijn gemaakt op te sturen. Houd hierbij alstublieft rekening met de auteursrechten. Beperk mogelijk bezwaarlijk materiaal tot een minimum; smaakvol bloot is geen probleem, harde porno wel.</span></p>
			<p class="p4"><span>Dit is een oefening alsmede een demonstratie. U behoudt uw auteursrecht over de beeldmaterialen, maar we vragen u om uw CSS vrij te geven onder een "Creative Commons" licentie identiek aan de degene van deze site, zodat anderen van uw werk kunnen leren.</span></p>
			<p class="p5"><span>Bandbreedte is gedoneerd door <a href="http://www.mediatemple.net/">mediatemple</a></span></p>
		</div>

		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="Check the validity of this site&#8217;s XHTML">xhtml</a> &nbsp; 
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="Check the validity of this site&#8217;s CSS">css</a> &nbsp; 
			<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="View details of the license of this site, courtesy of Creative Commons.">cc</a> &nbsp;
			<a href="http://www.mezzoblue.com/zengarden/faq/#s508" title="Check the accessibility of this site according to U.S. Section 508">508</a> &nbsp;
			<a href="http://www.mezzoblue.com/zengarden/faq/#aaa" title="Check the accessibility of this site according to WAI Content Accessibility Guidelines 1">aaa</a>
		</div>

	</div>

	
	<!--extra div voor flexibiliteit - Deze lijst zal waarschijnlijk het lastigste zijn waar u mee te maken krijgt -->
	<div id="linkList">
		<!-- Als u zich verwondert over de extra &nbsp; aan het eind van een link, dit is een hack om te voldoen aan de WCAG 1 Accessibility. -->
		<!-- Ik houd er niet van om dit te gebruiken,maar dit is een visuele oefening. Het is een compromis. -->
		<div id="linkList2">
			<div id="lselect">
				<h3 class="select"><span>Kies een ontwerp:</span></h3>
				<!-- Lijst met links begint hier. Er zullen niet meer dan 8 links per pagina komen -->
				<ul>
<?php
					$c = 0;
					for ($a = ($listStart + 1); $a <= $listEnd; $a++) {
						$b = $listEnd - $c;
						$d = $letterarray[$c];
						$tempLink = linkMe($filename[$b]);
						echo "\t\t\t\t\t";
						echo "<li><a href=\"?cssfile=/${tempLink}/${tempLink}.css&amp;page=${thisPage}\" title=\"AccessKey: ${d}\" accesskey=\"${d}\">${styleName[$b]}</a> by <a href=\"${styleURL[$b]}\" class=\"c\">${styleCreator[$b]}</a></li>";
						echo "\n";
						$c = $c + 1;
					}
?>
				</ul>
			</div>
			
			<!--
				Dit zal niet getoond worden totdat de archieven gevuld raken.Maar plan dit maar vast. Als u 
				het 'Kies een ontwerp' h3, heftig gaat wijzigen dan moet u dit ook wijzigen.
			<div id="lfavorites">
				<h3 class="favorites"><span>Favorites:</span></h3>
				<ul>
					<li><a href="#">filename</a> by <a href="" class="c">submitter</a>&nbsp;</li>
					<li><a href="#">filename</a> by <a href="" class="c">submitter</a>&nbsp;</li>
				</ul>
			</div>
			-->
						
			<div id="larchives">
				<h3 class="archives"><span>Archieven:</span></h3>
				<ul>
<?php
					
					$forward = $thisPage + 1;
					$backward = $thisPage - 1;
					
					if ($listStart >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"${thisFile}?cssfile=${currentDesign}&amp;page=${forward}\" title=\"Volgende lijst met ontwerpen. Toets: n\" accesskey=\"n\">volge<span class=\"accesskey\">n</span>de lijst met ontwerpen &raquo;</a></li>\n";
					}

					if ($thisPage >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"View previous set of designs. AccessKey: p\" accesskey=\"p\">&laquo; <span class=\"accesskey\">p</span>revious designs</a></li>\n";
					}
?>
					<li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="Bekijk alle aangemelde ontwerpen. Toets: w" accesskey="w">Bekijk alle ont<span class="accesskey">w</span>erpen</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>Bronnen:</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"${currentDesign}\" title=\"Bekijk de CSS van de huidige pagina, Toets: v\" accesskey=\"v\">Bekijk het <acronym title=\"Cascading Style Sheets\">CSS</acronym> <span class=\"accesskey\">v</span>an dit ontwerp</a></li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources/" title="Links naar site over het gebruik van CSS. Toets: r" accesskey="r"><acronym title="Cascading Style Sheets">CSS</acronym> B<span class="accesskey">r</span>onnen</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/faq/" title="Een lijst met veelgevraagde vragen en antwoorden over de css Zen Garden. Toets: q" accesskey="q"><acronym title="Frequently Asked Questions">FA<span class="accesskey">Q</span></acronym></a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/submit/" title="Stuur een eigen ontwerp toe. Toets: s" accesskey="s"><span class="accesskey">Stuur een ontwerp</span></a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/translations/"  title="Bekijk vertaalde varianten van deze pagina. Toets: t" accesskey="t"><span class="accesskey">Vertalingen</span></a></li>
				</ul>
			</div>
		</div>
	</div>


</div>

<!-- Deze extra span/div tags kunnen gebruikt worden om extra beeldmateriaal te gebruiken -->
<!-- Voeg een achtergrond plaatje toe en gebruik hoogte en breedte voor de grote, plaats ze met absolute positionering -->
<!-- Er is nogal een vervelende kleur verandering met transparante GIF bestanden in Netscape 6/7 en Mozilla 1 tot en met 1.3-->
 <!--(in de laatste is het probleem opgelost) -->
<!-- Zorg ervoor dat u dus uw werk in deze browser test-->
<div id="extraDiv1"><span></span></div><div id="extraDiv2"><span></span></div><div id="extraDiv3"><span></span></div>
<div id="extraDiv4"><span></span></div><div id="extraDiv5"><span></span></div><div id="extraDiv6"><span></span></div>

</body>
</html>