<?php

include '../../includes/masterlist.php';
$letterarray = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="da" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Dave Shea" />
	<meta name="keywords" content="design, css, cascading, style, sheets, xhtml, graphic design, w3c, web standards, visual, display" />
	<meta name="description" content="A demonstration of what can be accomplished visually through CSS-based design." />
	<meta name="robots" content="all" />
	<title>css Zen Garden: The Beauty in CSS Design</title>

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
			<h2><span>The Beauty of <acronym title="Cascading Style Sheets">CSS</acronym> Design</span></h2>
		</div>

    <div id="quickSummary">
      <p class="p1">En demonstration af mulighederne i CSS baseret design. V&aelig;lg 
        en af de forskellige layouts fra listen for at loade den p&aring; siden.</p>
			
      <p class="p2"><span>Download den orignale <a href="/zengarden-sample.html" title="This page's source HTML code, not to be modified.">html 
        fil</a> og <a href="/zengarden-sample.css" title="This page's sample CSS, the file you may modify.">css 
        fil</a></span></p>
		</div>

		<div id="preamble">
			
      <h3><span>En Bedre Verden</span></h3>
			
      <p class="p1"><span>En m&oslash;rk tid pr&aelig;get af browser-specifikke 
        tags, inkompatible DOMs og d&aring;rlig CSS support.</span></p>
			
      <p class="p2"><span>I dag m&aring; vi starte p&aring; en firsk. En bedre 
        web-verden er blevet opn&aring;et takket v&aelig;re utr&aelig;tteligt 
        arbejde fra folk som W3C, WaSP og de store browser producenter.</span></p>
			
      <p class="p3"><span>css Zen Garden inviterer indenfor til en verden hvor 
        du kan slappe af og reflektere over de vigtige ting vi har l&aelig;rt 
        fra mestrene. Se med klarere &oslash;jne. L&aelig;r at h&aring;ndtere 
        det (endnu ikke) beundret h&aring;ndv&aelig;rk p&aring; en ny og sp&aelig;ndende 
        m&aring;de. V&aelig;r &eacute;n med nettet.</span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="explanation">
			
      <h3><span>Hvad G&aring;r Det Ud P&aring;?</span></h3>
			
      <p class="p1"><span>Grafiske designere skal til at tage CSS seri&oslash;st. 
        The Zen Garden vil forbl&oslash;ffe, inspirere og opmuntre til deltagelse. 
        Start med at kigge p&aring; nogle af de eksisterende layouts fra listen.Ved 
        at klikke p&aring; en af dem loades det p&aring;g&aelig;ldende style sheet 
        p&aring; siden. Selve koden forbliver den sammen, det eneste der &aelig;ndres 
        er den eksterne .css fil. Nej, du dr&oslash;mmer ikke.</span></p>
			
      <p class="p2"><span><acronym title="Cascading Style Sheets">CSS giver en 
        total kontrol over udseendet af et dokument</acronym>. Den eneste m&aring;de 
        dette kan illusteres p&aring; en m&aring;de der forbl&oslash;ffer, er 
        at demonstrere hvor meget CSS kan g&oslash;re i h&aelig;nderne p&aring; 
        en der kan kreere sk&oslash;nhed fra struktur. Indtil nu er de fleste 
        finesser og hacks demonstreret af programm&oslash;rer. Desgnere har endnu 
        ikke sat deres pr&aelig;g. Det skal vi lave om p&aring;.</span></p>
		</div>

		<div id="participation">
			
      <h3><span>Deltagelse</span></h3>
			
      <p class="p1"><span>Kun grafisk designere. Du skal modificere denne side, 
        s&aring; st&aelig;rke CSS evner er n&oslash;dvendige. Dog er filerne kommenteret 
        grundigt nok til at selv folk uden s&aring; megen erfaring kan bruge dem 
        som hj&aelig;lpelinier. Se <a href="http://www.mezzoblue.com/zengarden/resources.asp">CSS 
        resource guiden</a> og find tips og guider til CSS.</span></p>
			
      <p class="p2"><span>Du kan modificere style sheetet som du &oslash;nsker, 
        men ikke html filen. Dette kan virke sv&aelig;rt hvis du aldrig har arbejdet 
        p&aring; denne m&aring;de f&oslash;r, men kig gennem linksene for at l&aelig;re 
        mere, og kig filerne igennnem for at f&aring; gode ideer.</span></p>
			
      <p class="p3"><span>Download <a href="/zengarden-sample.html" title="This page's source HTML code, not to be modified.">html 
        filen</a> og <a href="/zengarden-sample.css" title="This page's sample CSS, the file you may modify.">css 
        filen</a> og begynd p&aring; en kopi der gemmes lokalt. N&aring;r dit 
        mesterv&aelig;rk er f&aelig;rdigt (v&aelig;r venlig ikke at aflevere halv-f&aelig;rdige 
        sider) upload .css filen p&aring; en valgfri server under din kontrol. 
        <a href="http://www.mezzoblue.com/zengarden/sendfile.asp" title="Use the contact form to send us your CSS file">Send 
        os et link</a> til filen og vi vil l&aelig;gge den op p&aring; vores egen, 
        sammen med billederne, hvis vi v&aelig;lger at bruge layoutet.</span></p>
			
      <p class="p4"><span>Opdatering: Jeg leder efter overs&aelig;ttere. Hvis 
        du snakker flydende engelsk plus et andet sprog kan du p&aring; en alternativ 
        m&aring;de blive involveret i projektet. <a href="http://www.mezzoblue.com/contact/" title="Send me an e-mail mentioning which languages you are fluent in.">Kontakt 
        mig</a> og f&aring; flere detaljer. This translation by Brian Anderson.</span></p>
		</div>

		<div id="benefits">
			
      <h3><span>Fordele</span></h3>
			
      <p class="p1"><span>Hvorfor deltage? Anderkendelse, inspiration og en for 
        at v&aelig;re en resource vi alle kan refere til n&aring;r vi taler for 
        CSS-baseret design. Dette er der i den grad mangel p&aring;, selv i dag. 
        Flere og flere store sider tager spriget, men langt fra nok. En dag vil 
        dette galleri blive et interessant minde, den dag er ikke i dag.</span></p>
		</div>

		<div id="requirements">
			
      <h3><span>Krav</span></h3>
			
      <p class="p1"><span>S&aring; meget CSS1 som muligt. Diverse CSS2 elementer 
        skal v&aelig;re begr&aelig;nset til de bredt underst&oslash;ttede. Css 
        Zen Garden handler om funktionelt, praktisk CSS og ikke de sidste nye 
        tricks kun 2% af netsurferne kan se. Vores eneste krav er at din CSS validerer.</span></p>
			
      <p class="p2"><span>Desv&aelig;rre bringer denne m&aring;de at designe tit 
        de forskellige fejl i implementationerne af CSS. Forskellige browsere 
        viser forskellige resultater, selv ved perfekt valideret CSS. Utroligt 
        frustrerende n&aring;r en rettelse p&aring; &eacute;n fejl, bringer et 
        nyt problem op et andet sted. Se <a href="http://www.mezzoblue.com/zengarden/resources.asp" title="A listing of CSS-related resources">Resources</a> 
        for at l&aelig;re mere om nogle af de l&oslash;sninger der findes. Fuld 
        browser kompabilitet eksisterer stadig kun i en dr&oslash;mmeverden og 
        vi forventer ikke fuldkommen pixel-perfekt kode til alle platforme. Dog 
        beder vi om at du tester i s&aring; mange som muligt. Hvis dit design 
        ikke virker i mindst IE5+/Win og Mozilla (brugt af over 90% af brugere), 
        er chancerne for at vi vil godtage designet ikke store.</span></p>
			
      <p class="p3"><span>Kun originale v&aelig;rker. Respekter copyright love. 
        Hold tilbage med upassende materiale, smagfuld n&oslash;genhed er acceptabelt, 
        direkte pornografi er ikke.</span></p>
			
      <p class="p4"><span>Dette en ment som en l&aelig;rerig oplevelse, lige s&aring; 
        vel som en demonstration.Du beholder fuldt copyright p&aring; dit arbejde, 
        men vi beder om at udgive din CSS under et &quot;Creative Commons&quot; 
        licens, som vist <a href="http://creativecommons.org/licenses/sa/1.0/" title="View the Zen Garden's license information.">p&aring; 
        denne side</a> s&aring; andre kan l&aelig;re fra dit arbejde.</span></p>
			
      <p class="p5"><span>Hosting er elskv&aelig;rdigt doneret af <a href="http://www.mediatemple.net/">mediatemple</a></span></p>
		</div>
		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="Check the validity of this site&#8217;s XHTML">xhtml</a> &nbsp; 
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="Check the validity of this site&#8217;s CSS">css</a> &nbsp; 
			<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="View details of the license of this site, courtesy of Creative Commons.">cc</a> &nbsp;
			<a href="http://www.mezzoblue.com/zengarden/faq/#s508" title="Check the accessibility of this site according to U.S. Section 508">508</a> &nbsp;
			<a href="http://www.mezzoblue.com/zengarden/faq/#aaa" title="Check the accessibility of this site according to WAI Content Accessibility Guidelines 1">aaa</a>
		</div>

	</div>

	
	<div id="linkList">
		<div id="linkList2">
			<div id="lselect">
				<h3 class="select"><span>V&aelig;lg et Design:</span></h3>
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

			<div id="larchives">
				<h3 class="archives"><span>Arkiverne:</span></h3>
				<ul>
<?php
					
					$forward = $thisPage + 1;
					$backward = $thisPage - 1;
					
					if ($listStart >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"${thisFile}?cssfile=${currentDesign}&amp;page=${forward}\" title=\"View next set of designs. AccessKey: n\" accesskey=\"n\"><span class=\"accesskey\">n</span>&aelig;ste designs &raquo;</a></li>\n";
					}

					if ($thisPage >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"View previous set of designs. AccessKey: p\" accesskey=\"p\">&laquo; <span class=\"accesskey\">p</span>revious designs</a></li>\n";
					}
?>
					<li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="View every submission to the Zen Garden. AccessKey: w" accesskey="w">Se Alle Designs</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>Resourcer:</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"http://www.csszengarden.com/${currentDesign}\" title=\"View the source CSS file for the currently-viewed design, AccessKey: v\" accesskey=\"v\">Se Dette Design&#8217;s <acronym title=\"Cascading Style Sheets\">CSS</acronym></a></li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources/" title="Links to great sites with information on using CSS. AccessKey: r" accesskey="r"><acronym title="Cascading Style Sheets">CSS</acronym> <span class="accesskey">R</span>esourcer</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/faq/" title="A list of Frequently Asked Questions about the Zen Garden. AccessKey: q" accesskey="q"><acronym title="Frequently Asked Questions">FA<span class="accesskey">Q</span></acronym></a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/submit/" title="Send in your own CSS file. AccessKey: s" accesskey="s">Ind<span class="accesskey">s</span>end et Design</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/translations/" title="View translated versions of this page. AccessKey: t" accesskey="t">Overs&aelig;<span class="accesskey">t</span>telser</a></li>
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