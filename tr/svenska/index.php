<?php

include '../../includes/masterlist.php';
$letterarray = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Dave Shea" />
	<meta name="keywords" content="design, css, cascading, style, sheets, xhtml, graphic design, w3c, web standards, visual, display" />
	<meta name="description" content="En demonstration av vad som kan uppnås visuellt med CSS-baserad design." />
	<meta name="robots" content="all" />
	<title>css Zen Garden: Skönheten med CSS-design</title>

	<!-- to correct the unsightly Flash of Unstyled Content. http://www.bluerobot.com/web/css/fouc.asp -->
	<script type="text/javascript"></script>
	
	<style type="text/css" title="currentStyle">
		@import "<?php echo $loadCSS; ?>";
	</style>
<?php

if($isNN4) {
	echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
	echo $isNN4;
	echo "\" />";
}

?>
	<link rel="Shortcut Icon" type="image/x-icon" href="http://www.csszengarden.com/favicon.ico" />	
	<link rel="alternate" type="application/rss+xml" title="RSS" href="http://www.csszengarden.com/zengarden.xml" />
</head>

<!--


	This xhtml document is marked up to provide the designer with the maximum possible flexibility.
	There are more classes and extraneous tags than needed, and in a real world situation, it's more
	likely that it would be much leaner.
	
	However, I think we can all agree that even given that, we're still better off than if this had been
	built with tables.


-->

<body id="css-zen-garden">

<div id="container">
	<div id="intro">
		<div id="pageHeader">
			<h1><span>css Zen Garden</span></h1>
			<h2><span>Skönheten med <acronym title="Cascading Style Sheets">CSS</acronym>-design</span></h2>
		</div>

		<div id="quickSummary">
			<p class="p1"><span>En demonstration av vad som kan uppnås visuellt med <acronym title="Cascading Style Sheets">CSS</acronym>&#8211;baserad design. Välj en stilmall från listan för att ladda in den på denna sida.</span></p>
			<p class="p2"><span>Ladda ned <a href="zengarden-sample.html" title="Denna sidas HTML-kod, som inte får ändras.">html-filen</a> och <a href="zengarden-sample.css" title="Denna sidas CSS-kod, filen du får ändra i.">css-filen</a></span></p>
		</div>

		<div id="preamble">
			<h3><span>Vägen till upplysning</span></h3>
			<p class="p1"><span>Längs en mörk och dyster väg ligger det förflutnas kvarlevor i form av webbläsarspecifik kod, <acronym title="Document Object Model">DOM</acronym>-inkompatibilitet och dåligt stöd för <acronym title="Cascading Style Sheets">CSS</acronym>.</span></p>
			<p class="p2"><span>Idag måste vi rensa sinnet från det förflutnas vanor. Upplysningens era har börjat på webben, tack vare outtröttliga ansträngningar av till exempel <acronym title="World Wide Web Consortium">W3C</acronym>, <acronym title="Web Standards Project">WaSP</acronym> och de största webbläsartillverkarna.</span></p>
			<p class="p3"><span>css Zen Garden inbjuder dig att koppla av och meditera kring mästarnas viktiga lektioner. Börja se klart. Lär dig att använda (vad som med tiden kommer att bli) sedan länge erkänd teknik på nya och stimulerande sätt. Bli ett med webben.</span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="explanation">
			<h3><span>Så vad går det ut på?</span></h3>
			<p class="p1"><span>Det finns ett tydligt behov för <acronym title="Cascading Style Sheets">CSS</acronym> att tas på allvar av grafiska formgivare. Zen Garden är tänkt att locka, inspirera och uppmana till deltagande. Börja med att titta på några av de befintliga bidragen. Klicka på vilken design som helst av de i listan, och dess stilmall laddas in på denna sida. Koden är densamma. Det enda som ändras är den externa .css-filen. Jo, faktiskt!</span></p>
			<p class="p2"><span><acronym title="Cascading Style Sheets">CSS</acronym> tillåter fullständig kontroll över hur ett dokument presenteras. Det enda spännande sättet att visa detta på är att visa vad som är möjligt när de som har förmågan att skapa skönhet av struktur får fria händer. Hittills har de flesta exemplen på smarta trick och kluriga hack visats av de som egentligen är bäst på att strukturera och skriva kod. Formgivare har ännu inte gjort mycket väsen av sig. Det är dags att ändra på det.</span></p>
		</div>

		<div id="participation">
			<h3><span>Deltagande</span></h3>
			<p class="p1"><span>Endast grafiska formgivare, tack. Du kommer att ändra i detta dokument, så goda <acronym title="Cascading Style Sheets">CSS</acronym>-kunskaper är nödvändiga, men exempelfilerna är tillräckligt välkommenterade för att även nybörjare på <acronym title="Cascading Style Sheets">CSS</acronym> kan utgå från dem. Se <a href="http://www.mezzoblue.com/zengarden/resources/" title="En lista av CSS-relaterade resurser"><acronym title="Cascading Style Sheets">CSS</acronym> Resource Guide</a> för avancerade handledningar och tips på hur man jobbar med <acronym title="Cascading Style Sheets">CSS</acronym>.</span></p>
			<p class="p2"><span>Du får ändra .css-filen precis hur du vill, men inte <acronym title="HyperText Markup Language">HTML</acronym>-koden. Det kan verka skrämmande först om du inte har jobbat på det sättet tidigare, men följ länkarna som listas för att lära dig mer och använd exempelfilerna som guide.</span></p>
			<p class="p3"><span>Ladda ned <a href="zengarden-sample.html" title="Denna sidas HTML-kod, som inte får ändras.">html-filen</a> och <a href="zengarden-sample.css" title="Denna sidas CSS-kod, filen du får ändra i.">css-filen</a> för att ha en lokal kopia att ändra i. När du är klar med ditt mästerverk (och snälla, skicka inte in halvfärdiga saker) laddar du upp .css-filen till en webbserver som du har tillgång till. <a href="http://www.mezzoblue.com/zengarden/submit/" title="Använd kontaktformuläret för att skicka din CSS-fil till oss">Skicka oss en länk</a> till filen och om vi väljer att använda den laddar vi ned de tillhörande bilderna och lägger allt på vår egen server.</span></p>
			<p class="p4"><span>Uppdatering: Jag letar efter översättare. Om du talar engelska och något annat språk flytande är detta ett annat sätt att delta i projektet. Vänligen <a href="http://www.mezzoblue.com/contact/" title="E-posta mig och tala om vilka språk du talar flytande.">kontakta mig</a> för detaljer. Svensk Översättning Av <a href="http://www.456bereastreet.com/">Roger Johansson</a>.</span></p>
		</div>

		<div id="benefits">
			<h3><span>Fördelar</span></h3>
			<p class="p1"><span>Varför delta? För att få erkännande och inspiration, och vara med och skapa en resurs som vi alla kan använda för att visa vad man kan åstadkomma med <acronym title="Cascading Style Sheets">CSS</acronym>&#8211;baserad design. Det finns fortfarande ett stort behov av det sistnämnda. Fler och fler stora webbplatser tar steget, men inte tillräckligt många har gjort det. En dag kommer detta galleri att vara en historisk kuriositet. Den dagen är ännu inte kommen.</span></p>
		</div>

		<div id="requirements">
			<h3><span>Krav</span></h3>
			<p class="p1"><span>Vi vill se så mycket <acronym title="Cascading Style Sheets, version 1">CSS1</acronym> som möjligt. <acronym title="Cascading Style Sheets, version 2">CSS2</acronym> bör begränsas till delar som har utbrett stöd bland webbläsare. css Zen Garden handlar om funktionell, användbar <acronym title="Cascading Style Sheets">CSS</acronym> och inte de senaste, mest avancerade lösningarna som bara 2% av webbanvändarna kan se. Det enda verkliga kravet vi har är dock att din <acronym title="Cascading Style Sheets">CSS</acronym> är giltig.</span></p>
			<p class="p2"><span>Tyvärr kommer detta sätt att jobba på att påvisa bristerna i de olika implementationerna av <acronym title="Cascading Style Sheets">CSS</acronym>. Olika webbläsare visar webbsidor på olika sätt, ibland även när man använder helt giltig <acronym title="Cascading Style Sheets">CSS</acronym>, och detta blir frustrerande när något som fungerar i en webbläsare leder till problem i en annan. Se <a href="http://www.mezzoblue.com/zengarden/resources/" title="En lista av CSS-relaterade resurser">Resources</a>-sidan för information om en del av de sätt man kan undvika problemen på. Fullt utbyggt stöd i alla webbläsare är fortfarande till vissa delar en avlägsen dröm, och vi förväntar oss inte att ditt bidrag ser på pixeln likadant ut i alla kombinationer av webbläsare och operativsystem. Men testa i så många olika du kan. Om din design inte fungerar i åtminstone IE5+/Win och Mozilla (som tillsammans används av över 90% av alla webbanvändare), är det troligt att vi inte godkänner ditt bidrag.</span></p>
			<p class="p3"><span>Vi vill att du använder egenhändigt framtagen grafik. Vänligen respektera upphovsrättslagar. Vänligen använd så litet opassande material som möjligt. Smakfull nakenhet är acceptabelt, ren pornografi kommer att avvisas.</span></p>
			<p class="p4"><span>Detta är en inlärningsövning såväl som en demonstration. Du behåller upphovsrätten till dina bilder, men vi ber dig frigöra <acronym title="Cascading Style Sheets">CSS</acronym>-filen med en Creative Commons-licens som är likadan som <a href="http://creativecommons.org/licenses/sa/1.0/" title="Visa Zen Gardens licensinformation.">den som används på denna webbplats</a> så att andra kan lära av ditt arbete.</span></p>
			<p class="p5"><span>Bandbredden är donerad av <a href="http://www.mediatemple.net/" lang="en">mediatemple</a></span></p>
		</div>

		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="Kontrollera giltigheten av den XHTML som används på denna webbplats">xhtml</a> &nbsp; 
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="Kontrollera giltigheten av den CSS som används på denna webbplats">css</a> &nbsp; 
			<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="Visa detaljerna för licensen för denna webbplats hos Creative Commons.">cc</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=sec508&amp;test=" title="Kontrollera tillgängligheten hos denna webbplats enligt amerikansk lag, Section 508">508</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=wcag1-aaa&amp;test=" title="Kontrollera tillgängligheten hos denna webbplats enligt WAI Content Accessibility Guidelines 1">aaa</a>
		</div>


	</div>

	
	<div id="linkList">
		<div id="linkList2">
			<div id="lselect">
				<h3 class="select"><span>Välj en design:</span></h3>
				<ul>
<?php
					$c = 0;
					for ($a = ($listStart + 1); $a <= $listEnd; $a++) {
						$b = $listEnd - $c;
						$d = $letterarray[$c];
						$tempLink = linkMe($filename[$b]);
						echo "\t\t\t\t\t";
						echo "<li><a href=\"?cssfile=/${tempLink}/${tempLink}.css&amp;page=${thisPage}\" title=\"AccessKey: ${d}\" accesskey=\"${d}\">${styleName[$b]}</a> av <a href=\"${styleURL[$b]}\" class=\"c\">${styleCreator[$b]}</a></li>";
						echo "\n";
						$c = $c + 1;
					}
?>
				</ul>
			</div>

			<div id="larchives">
				<h3 class="archives"><span>Arkiv:</span></h3>
				<ul>
<?php
					
					$forward = $thisPage + 1;
					$backward = $thisPage - 1;
					
					if ($listStart >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"${thisFile}?cssfile=${currentDesign}&amp;page=${forward}\" title=\"Visa nästa sida med bidrag. AccessKey: n\" accesskey=\"n\"><span class=\"accesskey\">n</span>ästa sida &raquo;</a></li>\n";
					}

					if ($thisPage >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"Visa föregående sida med bidrag. AccessKey: p\" accesskey=\"p\">&laquo; Föregående sida</li>\n";
					}
?>
					<li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="Visa alla bidrag till Zen Garden. AccessKey: w" accesskey="w">Visa alla bidrag</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>Resurser:</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"${currentDesign}\" title=\"Visa CSS-filen för den design som visas nu. AccessKey: v\" accesskey=\"v\"><span class=\"accesskey\">V</span>isa denna designs <acronym title=\"Cascading Style Sheets\">CSS</acronym></a></li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources/" title="Länkar till bra webbplatser med information om hur man använder CSS. AccessKey: r" accesskey="r"><acronym title="Cascading Style Sheets">CSS</acronym>-<span class="accesskey">R</span>esurser</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/faq/" title="En lista med vanliga frågor om Zen Garden. AccessKey: q" accesskey="q"><acronym title="Vanliga frågor">FA<span class="accesskey">Q</span></acronym></a>&nbsp;</li>
					<li><a href="http://www.mezzoblue.com/zengarden/submit/" title="Skicka in din egen CSS-fil. AccessKey: s" accesskey="s"><span class="accesskey">S</span>kicka in en design</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/translations/" title="Visa översatta versioner av denna sida. AccessKey: t" accesskey="t">Översä<span class="accesskey">t</span>tningar</a></li>
				</ul>
			</div>
		</div>
	</div>


</div>

<!-- These extra divs/spans may be used as catch-alls to add extra imagery. -->
<div id="extraDiv1"><span></span></div><div id="extraDiv2"><span></span></div><div id="extraDiv3"><span></span></div>
<div id="extraDiv4"><span></span></div><div id="extraDiv5"><span></span></div><div id="extraDiv6"><span></span></div>

</body>
</html>