<?php

include '../../includes/masterlist.php';
$letterarray = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="no" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Dave Shea" />
	<meta name="keywords" content="design, css, cascading, style, sheets, xhtml, graphic design, w3c, web standards, visual, display" />
	<meta name="description" content="En demonstrasjon av hva som kan oppn&aring;s visuelt ved hjelp av CSS-basert design." />
	<meta name="robots" content="all" />
	<title>css Zen Garden: Skj&oslash;nnhet med CSS-Design</title>

	<!-- to correct the unsightly Flash of Unstyled Content. http://www.bluerobot.com/web/css/fouc.asp -->
	<script type="text/javascript"></script>
	
	<style type="text/css" title="currentStyle">
		@import "<?php echo $loadCSS; ?>";
	</style>
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
			<h2><span>Skj&oslash;nnheten i <acronym title="Cascading Style Sheets">CSS</acronym> Design</span></h2>
		</div>

		<div id="quickSummary">
			<p class="p1"><span>En demonstrasjon av hva som kan oppn&aring;s visuelt gjennom <acronym title="Cascading Style Sheets">CSS</acronym>&#8211;basert design. Velg en stil fra listen for &aring; laste den inn p&aring; denne siden.</span></p>
			<p class="p2"><span>Last ned <a href="/zengarden-sample.html" title="Denne sidens HTML kildekode, som ikke skal endres.">html-filen</a> og <a href="/zengarden-sample.css" title="Denne sidens CSS, filen som du kan endre p&aring;.">css-filen</a></span></p>
		</div>

		<div id="preamble">
			<h3><span>Veien til Opplysning</span></h3>
			<p class="p1"><span>Selv om vi har kommet langt i dag, s&aring; er det en m&oslash;rk og trist vei som har f&oslash;rt oss hit, og som vi med gru kan snu oss og se tilbake p&aring;. Veien ligger der, fors&oslash;plet av levningene etter slik html-kode som bare virker i noen nettlesere, inkompatible <acronym title="Document Object Model">DOM</acronym>s, og d&aring;rlig st&oslash;tte for <acronym title="Cascading Style Sheets">CSS</acronym>.</span></p>
			<p class="p2"><span>I dag er det p&aring; tide &aring; rense minnet og glemme hvordan man laget nettsider i tidligere tider. Opplysningstiden p&aring; Nettet har kommet i gang, takket v&aelig;re den utrettelige innsatsen til folk som <acronym title="World Wide Web Consortium">W3C</acronym>, <acronym title="Web Standards Project">WaSP</acronym> og de st&oslash;rste Nettleser-produsentene.</span></p>
			<p class="p3"><span>css Zen Garden inviterer deg til &aring; slappe av og meditere rundt den viktige undervisningen til de store mestrene. Begynn &aring; se med klarhet. L&aelig;r &aring; bruke teknikkene som (ikke enda) har v&aelig;rt anerkjent i lange tider p&aring; nye og stimulerende m&aring;ter. Bli ett med Nettet.</span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="explanation">
			<h3><span>Hva dreier det seg om?</span></h3>
			<p class="p1"><span>Det er et klart behov for at <acronym title="Cascading Style Sheets">CSS</acronym> skal bli tatt seri&oslash;st av grafiske designere. Zen Gardens m&aring;l er &aring; pirre, inspirere og oppmuntre til deltakelse. Til &aring; begynne med kan du jo ta en kikk p&aring; noen av de ekisterende designene. Klikk p&aring; hvilken som helst p&aring; listen, og den vil den bli lastet som det gjeldene stilarket p&aring; denne siden. HTML-koden forblir den samme, det eneste som har endret seg er den eksterne .css-filen. Det er faktisk helt sant!</span></p>
			<p class="p2"><span><acronym title="Cascading Style Sheets">CSS</acronym> tillater fullstendig kontroll over stilene i et dokument. Den eneste pirrende m&aring;ten &aring; demonstrere dette p&aring; er &aring; vise hva som kan skje n&aring;r t&oslash;mmene er i hendene p&aring; de som har muligheten til &aring; skape skj&oslash;nnhet av struktur. Til dags dato har de fleste eksemplene p&aring; stilige triks og lure omveier blitt demonstrert av de som egentlig er flinkest til &aring; strukturere og lage kode. Designere har enda ikke satt spor etter seg. Det er tid for en forandring.</span></p>
		</div>

		<div id="participation">
			<h3><span>Deltakelse</span></h3>
			<p class="p1"><span>Bare grafiske designere, takk. Du endrer p&aring; denne siden, s&aring; sv&aelig;rt gode egenskaper med <acronym title="Cascading Style Sheets">CSS</acronym> er n&oslash;dvendig, men eksempelfilene er kommentert godt nok til at selv nybegynnere med <acronym title="Cascading Style Sheets">CSS</acronym> kan bruke de som gode steder &aring; begynne. Se <a href="http://www.mezzoblue.com/zengarden/resources/" title="En opplisting av CSS-relaterte ressurser"><acronym title="Cascading Style Sheets">CSS</acronym> Resource Guide</a> for praktisk undervisning og gode tips til hvordan man jobber med <acronym title="Cascading Style Sheets">CSS</acronym>.</span></p>
			<p class="p2"><span>Du kan endre stilarket p&aring; akkurat den m&aring;ten du f&oslash;ler for, men kan ikke endre p&aring; <acronym title="HyperText Markup Language">HTML</acronym>-dokumentet. Dette kan kanskje ta motet fra deg i begynnelsen hvis du aldri har jobbet p&aring; denne m&aring;ten f&oslash;r. Men bare f&oslash;lg lenkene som er listet opp for &aring; l&aelig;re mer, og bruk eksempelfilene som guide.</span></p>
			<p class="p3"><span>Last ned <a href="/zengarden-sample.html" title="Denne sidens HTML kildekode, som ikke skal endres.">html-filen</a> og <a href="/zengarden-sample.css" title="Denne sidens CSS, filen som du kan endre p&aring;.">css-filen</a> for &aring; jobbe p&aring; en kopi lokalt. N&aring;r du har fullf&oslash;rt mesterverket ditt (v&aelig;r snill &aring; ikke sende inn halvgjort arbeid) laster du opp .css-filen til en webserver som du har tilgang til. <a href="http://www.mezzoblue.com/zengarden/submit/" title="Bruk kontaktskjemaet for &aring; sende oss din CSS-fil.">Send oss en lenke</a> til filen. Hvis vi velger &aring; bruke den, vil vi hente bildene som h&oslash;rer til og legge de p&aring; serveren v&aring;r.</span></p>
			<p class="p4"><span>Oppdatering: Jeg leter etter oversettere. Hvis du snakker flytende engelsk og et annet spr&aring;k, er dette en annen m&aring;te &aring; bli involvert i prosjektet p&aring;. Vennligst <a href="http://www.mezzoblue.com/contact/" title="Send meg en epost der du nevner hvilke spr&aring;k du snakker flytende.">kontakt meg</a> for detaljer. Denne oversettelsen er ved <a href="http://www.fargestifter.com/">Thomas Hammer</a>.</span></p>
		</div>

		<div id="benefits">
			<h3><span>Fordeler</span></h3>
			<p class="p1"><span>Hvorfor delta? For &aring; f&aring; anerkjennelse og inspirasjon. Og for &aring; skape en ressurs som alle kan benytte seg av n&aring;r man trenger slagkraftig dokumentasjon p&aring; hva man kan utrette med <acronym title="Cascading Style Sheets">CSS</acronym>&#8211;basert design. Det siste er s&aring;rt tiltrengt, ogs&aring; i dag. Flere og flere st&oslash;rre sider tar steget, med ikke mange nok har gjort det enda. En dag vil dette galleriet v&aelig;re en historisk kuriositet. Den dagen er ikke i dag.</span></p>
		</div>

		<div id="requirements">
			<h3><span>Krav</span></h3>
			<p class="p1"><span>Vi har lyst til &aring; se s&aring; mye <acronym title="Cascading Style Sheets, version 1">CSS1</acronym> som mulig. <acronym title="Cascading Style Sheets, version 2">CSS2</acronym> b&oslash;r v&aelig;re begrenset til elementer som det er vid st&oslash;tte for. css Zen Garden handler om funksjonell, praktisk <acronym title="Cascading Style Sheets">CSS</acronym>, ikke de siste, hotte triksene som bare virker hos 2% av befolkningen. Men det eneste virkelige kravet vi har er at <acronym title="Cascading Style Sheets">CSS</acronym>en din validerer.</span></p>
			<p class="p2"><span>Dessverre er det s&aring;nn at &aring; designe p&aring; denne m&aring;ten r&oslash;per svakhetene i de ulike implementasjonene av <acronym title="Cascading Style Sheets">CSS</acronym>. Ulike nettlesere viser nettsider forskjellig, noen ganger til og med n&aring;r det er helt gyldig <acronym title="Cascading Style Sheets">CSS</acronym>. Dette blir frustrerende n&aring;r noe som fikser saken for den ene nettleseren f&oslash;rer til en feil i den andre. Se <a href="http://www.mezzoblue.com/zengarden/resources/" title="En opplisting av CSS-relaterte ressurser">Resources</a>-siden for informasjon om noen av de gode m&aring;tene &aring; fikse p&aring;. Full st&oslash;tte i alle nettlesere er fortsatt en litt fjern dr&oslash;m, og vi forventer ikke at du skal levere kode som er perfekt ned til den minste piksel p&aring; tvers av alle slags plattformer. Men test den i s&aring; mange nettlesere du kan. Hvis designet ditt ikke virker i IE5+/Win og Mozilla (som blir brukt av over 90% av befolkningen), er det stor sannsynlighet for at vi ikke kommer til &aring; akseptere det.</span></p>
			<p class="p3"><span>Vi ber om at du sender originalt arbeide. Vennligst respekter opphavsrettslovgivning. Vennligst hold et lavest mulig niv&aring; av upassende materiale, smakfull nakenhet er akseptert, pornografi vil bli avvist.</span></p>
			<p class="p4"><span>Dette er en l&aelig;rings&oslash;velse s&aring; vel som en demonstrasjon. Du beholder opphavsretten til bildene dine, men vi ber deg om at du frigir <acronym title="Cascading Style Sheets">CSS</acronym>-filen under en Creative Commons-lisens som er identisk til <a href="http://creativecommons.org/licenses/sa/1.0/" title="Se Zen Gardens lisensinformasjon.">den som brukes p&aring; denne siden</a> slik at andre kan l&aelig;re fra arbeidet ditt.</span></p>
			<p class="p5"><span>B&aring;ndvidden er n&aring;dig donert av <a href="http://www.mediatemple.net/" lang="en">mediatemple</a></span></p>
		</div>

		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="Sjekk validiteten til denne sidens XHTML">xhtml</a> &nbsp; 
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="Sjekk validiteten til denne sidens CSS">css</a> &nbsp; 
			<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="Se detaljene rundt lisensen til denne siden, hos Creative Commons.">cc</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=sec508&amp;test=" title="Sjekk tilgjengeligheten til denne siden i henhold til amerikansk lov, Section 508">508</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=wcag1-aaa&amp;test=" title="Sjekk tilgjengeligheten til denne siden i henhold til WAI Content Accessibility Guidelines 1">aaa</a>
		</div>

	</div>

	
	<div id="linkList">
		<div id="linkList2">
			<div id="lselect">
				<h3 class="select"><span>Velg et Design:</span></h3>
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
				<h3 class="archives"><span>Arkivet:</span></h3>
				<ul>
<?php
					
					$forward = $thisPage + 1;
					$backward = $thisPage - 1;
					
					if ($listStart >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"${thisFile}?cssfile=${currentDesign}&amp;page=${forward}\" title=\"Vis neste sett med design. AccessKey: n\" accesskey=\"n\"><span class=\"accesskey\">n</span>este design &raquo;</a></li>\n";
					}

					if ($thisPage >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"Vis forrige sett med design. AccessKey: p\" accesskey=\"p\">&laquo; Forrige design</a></li>\n";
					}
?>
					<li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="Vis alle bidrag til Zen Garden. AccessKey: w" accesskey="w">Vis<span class="accesskey"></span> Alle Design</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>Ressurser:</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"${currentDesign}\" title=\"Vis CSS-kildefilen for designet du ser n&aring;, AccessKey: v\" accesskey=\"v\"><span class=\"accesskey\">V</span>is Dette Designets <acronym title=\"Cascading Style Sheets\">CSS</acronym></a></li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources/" title="Lenker til gode sider som har informasjon om &aring; bruke CSS. AccessKey: r" accesskey="r"><acronym title="Cascading Style Sheets">CSS</acronym>-<span class="accesskey">R</span>essurser</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/faq/" title="En liste med Ofte Stilte Sp&oslash;rsm&aring;l (Frequently Asked Questions) om Zen Garden. AccessKey: q" accesskey="q"><acronym title="Frequently Asked Questions">FA<span class="accesskey">Q</span></acronym></a>&nbsp;</li>
					<li><a href="http://www.mezzoblue.com/zengarden/submit/" title="Send inn din egen CSS-fil. AccessKey: s" accesskey="s"><span class="accesskey">S</span>end inn et Design</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/translations/" title="Vis oversatte versjoner av denne side. AccessKey: t" accesskey="t">Overse<span class="accesskey">t</span>telser</a></li>
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