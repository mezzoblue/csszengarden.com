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
	<meta name="description" content="En demonstration av vad som kan uppn�s visuellt med CSS-baserad design." />
	<meta name="robots" content="all" />
	<title>css Zen Garden: Sk�nheten med CSS-design</title>

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
			<h2><span>Sk�nheten med <acronym title="Cascading Style Sheets">CSS</acronym>-design</span></h2>
		</div>

		<div id="quickSummary">
			<p class="p1"><span>En demonstration av vad som kan uppn�s visuellt med <acronym title="Cascading Style Sheets">CSS</acronym>&#8211;baserad design. V�lj en stilmall fr�n listan f�r att ladda in den p� denna sida.</span></p>
			<p class="p2"><span>Ladda ned <a href="zengarden-sample.html" title="Denna sidas HTML-kod, som inte f�r �ndras.">html-filen</a> och <a href="zengarden-sample.css" title="Denna sidas CSS-kod, filen du f�r �ndra i.">css-filen</a></span></p>
		</div>

		<div id="preamble">
			<h3><span>V�gen till upplysning</span></h3>
			<p class="p1"><span>L�ngs en m�rk och dyster v�g ligger det f�rflutnas kvarlevor i form av webbl�sarspecifik kod, <acronym title="Document Object Model">DOM</acronym>-inkompatibilitet och d�ligt st�d f�r <acronym title="Cascading Style Sheets">CSS</acronym>.</span></p>
			<p class="p2"><span>Idag m�ste vi rensa sinnet fr�n det f�rflutnas vanor. Upplysningens era har b�rjat p� webben, tack vare outtr�ttliga anstr�ngningar av till exempel <acronym title="World Wide Web Consortium">W3C</acronym>, <acronym title="Web Standards Project">WaSP</acronym> och de st�rsta webbl�sartillverkarna.</span></p>
			<p class="p3"><span>css Zen Garden inbjuder dig att koppla av och meditera kring m�starnas viktiga lektioner. B�rja se klart. L�r dig att anv�nda (vad som med tiden kommer att bli) sedan l�nge erk�nd teknik p� nya och stimulerande s�tt. Bli ett med webben.</span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="explanation">
			<h3><span>S� vad g�r det ut p�?</span></h3>
			<p class="p1"><span>Det finns ett tydligt behov f�r <acronym title="Cascading Style Sheets">CSS</acronym> att tas p� allvar av grafiska formgivare. Zen Garden �r t�nkt att locka, inspirera och uppmana till deltagande. B�rja med att titta p� n�gra av de befintliga bidragen. Klicka p� vilken design som helst av de i listan, och dess stilmall laddas in p� denna sida. Koden �r densamma. Det enda som �ndras �r den externa .css-filen. Jo, faktiskt!</span></p>
			<p class="p2"><span><acronym title="Cascading Style Sheets">CSS</acronym> till�ter fullst�ndig kontroll �ver hur ett dokument presenteras. Det enda sp�nnande s�ttet att visa detta p� �r att visa vad som �r m�jligt n�r de som har f�rm�gan att skapa sk�nhet av struktur f�r fria h�nder. Hittills har de flesta exemplen p� smarta trick och kluriga hack visats av de som egentligen �r b�st p� att strukturera och skriva kod. Formgivare har �nnu inte gjort mycket v�sen av sig. Det �r dags att �ndra p� det.</span></p>
		</div>

		<div id="participation">
			<h3><span>Deltagande</span></h3>
			<p class="p1"><span>Endast grafiska formgivare, tack. Du kommer att �ndra i detta dokument, s� goda <acronym title="Cascading Style Sheets">CSS</acronym>-kunskaper �r n�dv�ndiga, men exempelfilerna �r tillr�ckligt v�lkommenterade f�r att �ven nyb�rjare p� <acronym title="Cascading Style Sheets">CSS</acronym> kan utg� fr�n dem. Se <a href="http://www.mezzoblue.com/zengarden/resources/" title="En lista av CSS-relaterade resurser"><acronym title="Cascading Style Sheets">CSS</acronym> Resource Guide</a> f�r avancerade handledningar och tips p� hur man jobbar med <acronym title="Cascading Style Sheets">CSS</acronym>.</span></p>
			<p class="p2"><span>Du f�r �ndra .css-filen precis hur du vill, men inte <acronym title="HyperText Markup Language">HTML</acronym>-koden. Det kan verka skr�mmande f�rst om du inte har jobbat p� det s�ttet tidigare, men f�lj l�nkarna som listas f�r att l�ra dig mer och anv�nd exempelfilerna som guide.</span></p>
			<p class="p3"><span>Ladda ned <a href="zengarden-sample.html" title="Denna sidas HTML-kod, som inte f�r �ndras.">html-filen</a> och <a href="zengarden-sample.css" title="Denna sidas CSS-kod, filen du f�r �ndra i.">css-filen</a> f�r att ha en lokal kopia att �ndra i. N�r du �r klar med ditt m�sterverk (och sn�lla, skicka inte in halvf�rdiga saker) laddar du upp .css-filen till en webbserver som du har tillg�ng till. <a href="http://www.mezzoblue.com/zengarden/submit/" title="Anv�nd kontaktformul�ret f�r att skicka din CSS-fil till oss">Skicka oss en l�nk</a> till filen och om vi v�ljer att anv�nda den laddar vi ned de tillh�rande bilderna och l�gger allt p� v�r egen server.</span></p>
			<p class="p4"><span>Uppdatering: Jag letar efter �vers�ttare. Om du talar engelska och n�got annat spr�k flytande �r detta ett annat s�tt att delta i projektet. V�nligen <a href="http://www.mezzoblue.com/contact/" title="E-posta mig och tala om vilka spr�k du talar flytande.">kontakta mig</a> f�r detaljer. Svensk �vers�ttning Av <a href="http://www.456bereastreet.com/">Roger Johansson</a>.</span></p>
		</div>

		<div id="benefits">
			<h3><span>F�rdelar</span></h3>
			<p class="p1"><span>Varf�r delta? F�r att f� erk�nnande och inspiration, och vara med och skapa en resurs som vi alla kan anv�nda f�r att visa vad man kan �stadkomma med <acronym title="Cascading Style Sheets">CSS</acronym>&#8211;baserad design. Det finns fortfarande ett stort behov av det sistn�mnda. Fler och fler stora webbplatser tar steget, men inte tillr�ckligt m�nga har gjort det. En dag kommer detta galleri att vara en historisk kuriositet. Den dagen �r �nnu inte kommen.</span></p>
		</div>

		<div id="requirements">
			<h3><span>Krav</span></h3>
			<p class="p1"><span>Vi vill se s� mycket <acronym title="Cascading Style Sheets, version 1">CSS1</acronym> som m�jligt. <acronym title="Cascading Style Sheets, version 2">CSS2</acronym> b�r begr�nsas till delar som har utbrett st�d bland webbl�sare. css Zen Garden handlar om funktionell, anv�ndbar <acronym title="Cascading Style Sheets">CSS</acronym> och inte de senaste, mest avancerade l�sningarna som bara 2% av webbanv�ndarna kan se. Det enda verkliga kravet vi har �r dock att din <acronym title="Cascading Style Sheets">CSS</acronym> �r giltig.</span></p>
			<p class="p2"><span>Tyv�rr kommer detta s�tt att jobba p� att p�visa bristerna i de olika implementationerna av <acronym title="Cascading Style Sheets">CSS</acronym>. Olika webbl�sare visar webbsidor p� olika s�tt, ibland �ven n�r man anv�nder helt giltig <acronym title="Cascading Style Sheets">CSS</acronym>, och detta blir frustrerande n�r n�got som fungerar i en webbl�sare leder till problem i en annan. Se <a href="http://www.mezzoblue.com/zengarden/resources/" title="En lista av CSS-relaterade resurser">Resources</a>-sidan f�r information om en del av de s�tt man kan undvika problemen p�. Fullt utbyggt st�d i alla webbl�sare �r fortfarande till vissa delar en avl�gsen dr�m, och vi f�rv�ntar oss inte att ditt bidrag ser p� pixeln likadant ut i alla kombinationer av webbl�sare och operativsystem. Men testa i s� m�nga olika du kan. Om din design inte fungerar i �tminstone IE5+/Win och Mozilla (som tillsammans anv�nds av �ver 90% av alla webbanv�ndare), �r det troligt att vi inte godk�nner ditt bidrag.</span></p>
			<p class="p3"><span>Vi vill att du anv�nder egenh�ndigt framtagen grafik. V�nligen respektera upphovsr�ttslagar. V�nligen anv�nd s� litet opassande material som m�jligt. Smakfull nakenhet �r acceptabelt, ren pornografi kommer att avvisas.</span></p>
			<p class="p4"><span>Detta �r en inl�rnings�vning s�v�l som en demonstration. Du beh�ller upphovsr�tten till dina bilder, men vi ber dig frig�ra <acronym title="Cascading Style Sheets">CSS</acronym>-filen med en Creative Commons-licens som �r likadan som <a href="http://creativecommons.org/licenses/sa/1.0/" title="Visa Zen Gardens licensinformation.">den som anv�nds p� denna webbplats</a> s� att andra kan l�ra av ditt arbete.</span></p>
			<p class="p5"><span>Bandbredden �r donerad av <a href="http://www.mediatemple.net/" lang="en">mediatemple</a></span></p>
		</div>

		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="Kontrollera giltigheten av den XHTML som anv�nds p� denna webbplats">xhtml</a> &nbsp; 
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="Kontrollera giltigheten av den CSS som anv�nds p� denna webbplats">css</a> &nbsp; 
			<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="Visa detaljerna f�r licensen f�r denna webbplats hos Creative Commons.">cc</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=sec508&amp;test=" title="Kontrollera tillg�ngligheten hos denna webbplats enligt amerikansk lag, Section 508">508</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=wcag1-aaa&amp;test=" title="Kontrollera tillg�ngligheten hos denna webbplats enligt WAI Content Accessibility Guidelines 1">aaa</a>
		</div>


	</div>

	
	<div id="linkList">
		<div id="linkList2">
			<div id="lselect">
				<h3 class="select"><span>V�lj en design:</span></h3>
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
						echo "<li><a href=\"${thisFile}?cssfile=${currentDesign}&amp;page=${forward}\" title=\"Visa n�sta sida med bidrag. AccessKey: n\" accesskey=\"n\"><span class=\"accesskey\">n</span>�sta sida &raquo;</a></li>\n";
					}

					if ($thisPage >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"Visa f�reg�ende sida med bidrag. AccessKey: p\" accesskey=\"p\">&laquo; F�reg�ende sida</li>\n";
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
					echo "<li><a href=\"${currentDesign}\" title=\"Visa CSS-filen f�r den design som visas nu. AccessKey: v\" accesskey=\"v\"><span class=\"accesskey\">V</span>isa denna designs <acronym title=\"Cascading Style Sheets\">CSS</acronym></a></li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources/" title="L�nkar till bra webbplatser med information om hur man anv�nder CSS. AccessKey: r" accesskey="r"><acronym title="Cascading Style Sheets">CSS</acronym>-<span class="accesskey">R</span>esurser</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/faq/" title="En lista med vanliga fr�gor om Zen Garden. AccessKey: q" accesskey="q"><acronym title="Vanliga fr�gor">FA<span class="accesskey">Q</span></acronym></a>&nbsp;</li>
					<li><a href="http://www.mezzoblue.com/zengarden/submit/" title="Skicka in din egen CSS-fil. AccessKey: s" accesskey="s"><span class="accesskey">S</span>kicka in en design</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/translations/" title="Visa �versatta versioner av denna sida. AccessKey: t" accesskey="t">�vers�<span class="accesskey">t</span>tningar</a></li>
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