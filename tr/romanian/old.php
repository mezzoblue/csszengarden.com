<?php

include '../../includes/masterlist.php';
$letterarray = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-16" />
	<meta name="author" content="Dave Shea" />
	<meta name="keywords" content="design, css, cascading, style, sheets, xhtml, graphic design, w3c, web standards, visual, display" />
	<meta name="description" content="A demonstration of what can be accomplished visually through CSS-based design. O demonstratie a ceea ce se poate realiza vizual printr-un design bazat pe CSS"/>
	<meta name="robots" content="all" />
	<title>Gr&atilde;dina css-Zen: Frumusetea conceptului CSS</title>

	<!-- to correct the unsightly Flash of Unstyled Content. http://www.bluerobot.com/web/css/fouc.asp -->
	<script type="text/javascript"></script>
	
	<style type="text/css" title="currentStyle">
		@import "<?php echo $loadCSS; ?>";
	</style>
	<link rel="Shortcut Icon" type="image/x-icon" href="http://www.csszengarden.com/favicon.ico" />	
	<link rel="alternate" type="application/rss+xml" title="RSS" href="http://www.csszengarden.com/zengarden.xml" />
</head>

<!--


	Acest document xhtml este marcat in asa fel incit sa-i dea designerului o flexibilitate maxima.
	Sint incluse mult mai multe clase si taguri suplimentare decit este necesar,
	si, intr-o situatie reala, probabil ca acest document ar fi fost mai mic.

	Cu toate acestea, cred ca putem sa fim cu totii de acord ca ar fi fost mai rau daca
	pagina ar fi fost construita folosind tabele.


-->

<body id="css-zen-garden">

<div id="container">
	<div id="intro">
		<div id="pageHeader">
			<h1><span>Gr&atilde;dina css-Zen</span></h1>
			<h2><span>Frumusetea conceptului <acronym title="Cascading Style Sheets">CSS</acronym></span></h2>
		</div>

		<div id="quickSummary">
			<p class="p1"><span>O demonstratie a ceea ce se poate realiza vizual printr-un design bazat pe <acronym title="Cascading Style Sheets">CSS</acronym>. Alegeti oricare din stylesheet-urile de pe list&atilde; pentru a-l downloada &icirc;n aceast&atilde; pagin&atilde;.</span></p>
			<p class="p2"><span>Download mostrele documentelor <a href="/zengarden-sample.html" title="Codul initial HTML al acestei pagini, a nu se modifica.">html</a> si <a href="/zengarden-sample.css" title="Mostra de CSS pentru aceasta pagina; documentul pe care il puteti modifica.">css</a></span></p>
		</div>

		<div id="preamble">
			<h3><span>Drumul c&atilde;tre iluminare</span></h3>
			<p class="p1"><span>De-a lungul unui drum &icirc;ntunecos si mohor&icirc;t zac azv&icirc;rlite relicvele fostelor taguri specifice pentru anumite browsere, incompatibile cu <acronym title="Document Object Model">DOM</acronym>-urile, precum si sprijinul defectuos al <acronym title="Cascading Style Sheets">CSS</acronym>-ului.</span></p>
			<p class="p2"><span>&Icirc;n ziua de azi, trebuie s&atilde; ne limpezim mintea de practica trecutului. Desteptarea Web-ului s-a realizat multumit&atilde; eforturilor neobosite ale participantilor la <acronym title="World Wide Web Consortium">W3C</acronym>, <acronym title="Web Standards Project">WaSP</acronym> precum si ale creatorilor importanti de browsere.</span></p>
			<p class="p3"><span>Gr&atilde;dina css-Zen v&atilde; invit&atilde; s&atilde; v&atilde; relaxati si s&atilde; meditati asupra lectiilor importante ale maestrilor.  &Icirc;ncepeti s&atilde; vedeti cu claritate. &Icirc;nv&atilde;tati s&atilde; folositi metodele (&icirc;nc&atilde; nu) confirmate de timp &icirc;n feluri noi si &icirc;nvigoratoare. Deveniti nedesp&atilde;rtiti de web.</span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="explanation">
			<h3><span>Deci, despre ce este vorba aici?</span></h3>
			<p class="p1"><span>Exist&atilde; nevoia clar&atilde; ca designerii grafici  s&atilde; ia &icirc;n serios conceptul <acronym title="Cascading Style Sheets">CSS</acronym>. Gr&atilde;dina css-Zen este conceput&atilde; s&atilde; atrag&atilde;, s&atilde; inspire, si s&atilde; &icirc;ncurajeze participarea dumneavoastr&atilde;. Pentru &icirc;nceput, v&atilde; indrept&atilde;m atentia asupra unor designuri de pe list&atilde;. Alegeti oricare stylesheet din paleta de stiluri de pe list&atilde; pentru a-l &icirc;nc&atilde;rca &icirc;n aceast&atilde; pagin&atilde;. Codul r&atilde;m&icirc;ne acelasi, singurul lucru care s-a schimbat este documentul extern .css. Da, &icirc;ntr-adev&atilde;r!</span></p>
			<p class="p2"><span><acronym title="Cascading Style Sheets">CSS</acronym> permite controlul complet si total asupra stilului documentului html. Singurul mod &icirc;n care aceasta se poate ilustra &icirc;ntr-un fel interesant este demonstr&icirc;nd ce se poate realiza de-adev&atilde;rat, dac&atilde; se d&atilde; volanul pe m&icirc;na celor care s&icirc;nt &icirc;n stare s&atilde; creeze frumosul din structur&atilde;. P&icirc;na &icirc;n prezent, majoritatea exemplelor de g&atilde;selnite si montaje interesante a fost demonstrat&atilde; de structuristi si codificatori. Designerii &icirc;nc&atilde; nu si-au pus amprenta.  Trebuie sa schimb&atilde;m aceast&atilde; situatie.</span></p>
		</div>

		<div id="participation">
			<h3><span>Participare</span></h3>
			<p class="p1"><span>Exclusiv designeri grafici, v&atilde; rug&atilde;m. Veti modifica aceast&atilde; pagin&atilde;, de aceea trebuie s&atilde; aveti o competent&atilde; solid&atilde; &icirc;n <acronym title="Cascading Style Sheets">CSS</acronym>, cu toate acestea documentele care contin exemplele s&icirc;nt suficient de bine comentate &icirc;nc&icirc;t p&icirc;n&atilde; si &icirc;ncep&atilde;torii &icirc;n <acronym title="Cascading Style Sheets">CSS</acronym> le pot folosi ca punct de plecare. V&atilde; rug&atilde;m sa consultati <a href="http://www.mezzoblue.com/zengarden/resources.asp" title="Ghidul de materiale despre CSS"><acronym title="Cascading Style Sheets"></acronym>Ghidul resurselor CSS</a> contin&icirc;nd materiale avansate si indrum&atilde;ri pentru folosirea <acronym title="Cascading Style Sheets">CSS</acronym>-ului.</span></p>
			<p class="p2"><span>Puteti s&atilde; modificati documentul .css &icirc;n orice fel doriti, dar nu v&atilde; atingeti de <acronym title="HyperText Markup Language">HTML</acronym>. Pentru &icirc;nceput aceasta va putea pare inhibant dac&atilde; nu ati lucrat niciodat&atilde; &icirc;n acest fel p&icirc;na acum, dar folositi link-urile listate, si folositi documentele mostr&atilde; drept ghid.</span></p>
			<p class="p3"><span>Downloadati mostrele <a href="/zengarden-sample.html" title="Sursa codului HTML pentru aceast&atilde; pagina, l&atilde;sati-l neschimbat.">html</a> si <a href="/zengarden-sample.css" title="Mostra de CSS pentru aceast&atilde; pagin&atilde;; documentul pe care puteti sa-l modificati.">css</a> pentru a lucra pe o copie local&atilde;. De &icirc;ndat&atilde; ce ati terminat de lucru la capodopera dumneavoastr&atilde; (si v&atilde; rug&atilde;m s&atilde; nu trimiteti o lucrare neterminat&atilde;) v&atilde; rug&atilde;m sa uploadati documentul .css pe un web server la care aveti acces dumneavoastr&atilde;. <a href="http://www.mezzoblue.com/zengarden/sendfile.asp" title="Folositi formularul pentru contactare ca s&atilde; ne trimiteti documentul dumneavoastr&atilde;">Trimiteti-ne un link</a> la documentul dumneavoastr&atilde; si noi, dac&atilde; vom decide s&atilde;-l selection&atilde;m, vom downloada imaginile asociate cu documentul .css. Lucr&atilde;rile selectionate vor fi g&atilde;zduite pe serverul nostru.</span></p>
			<p class="p4"><span>COMPLETARE: C&atilde;ut&atilde;m traduc&atilde;tori. Dac&atilde; stiti bine engleza si o alt&atilde; limb&atilde;, aceasta este &icirc;nc&atilde; o cale pe care puteti s&atilde; participati la proiect. V&atilde; rug&atilde;m <a href="http://www.mezzoblue.com/contact/" title="Trimiteti un email mention&icirc;nd limbile pe care le stiti bine">s&atilde; luati leg&atilde;tura</a> cu noi pentru a afla am&atilde;nunte.  [Traducere de <a href="http://joseph.siroker.com">Joseph Siroker</a> si <a href="http://homelesspixel.de">Radu Darvas</a>]</span></p>
		</div>

		<div id="benefits">
			<h3><span>Beneficii</span></h3>
			<p class="p1"><span>De ce s&atilde; participati? Pentru a v&atilde; face un nume, pentru inspiratie, si pentru o resurs&atilde; la care ne putem referi cu totii c&icirc;nd vrem s&atilde; populariz&atilde;m ideea designului bazat pe <acronym title="Cascading Style Sheets">CSS</acronym>. Este extrem de necesar s&atilde; facem aceasta, chiar si &icirc;n ziua de azi. Din ce &icirc;n ce mai multe website-uri majore fac pasul acesta, dar &icirc;nc&atilde; nu suficient de multe l-au f&atilde;cut. &Icirc;ntr-o buna zi aceast&atilde; galerie va deveni o curiozitate istoric&atilde;; dar acea zi &icirc;nca n-a venit.</span></p>
		</div>

		<div id="requirements">
			<h3><span>Criterii</span></h3>
			<p class="p1"><span>Am vrea s&atilde; vedem at&icirc;t de mult <acronym title="Cascading Style Sheets, version 1">CSS1</acronym> pe c&icirc;t este posibil. <acronym title="Cascading Style Sheets, version 2">CSS2</acronym> trebuie limitat numai la elementele sprijinite &icirc;n modul cel mai r&atilde;sp&icirc;ndit. Gr&atilde;dina css-Zen este bazat&atilde; pe o abordare functional&atilde; si practic&atilde; a <acronym title="Cascading Style Sheets">CSS</acronym>-ului si nu pe ultimele r&atilde;cnete ale tehnologiei vizibile numai de 2% din public. Singura cerint&atilde; real&atilde; pe care o avem este ca <acronym title="Cascading Style Sheets">CSS</acronym>-ul dumneavoastr&atilde; s&atilde; treac&atilde; prin validare.</span></p>
			<p class="p2"><span>Din p&atilde;cate, designul practicat &icirc;n acest fel subliniaz&atilde; lacunele diverselor implement&atilde;ri ale <acronym title="Cascading Style Sheets">CSS</acronym>-ului. Browsere diferite reprezint&atilde; uneori &icirc;n mod diferit chiar si <acronym title="Cascading Style Sheets">CSS</acronym> complet validat, si devine enervant c&icirc;nd o solutie pentru unul din ele stric&atilde; reprezentarea &icirc;ntr-un altul. V&atilde; indrept&atilde;m atentia c&atilde;tre pagina de <a href="http://www.mezzoblue.com/zengarden/resources.asp" title="O list&atilde; de materiale privind CSS">Resurse</a> unde puteti g&atilde;si informatii asupra unor solutii disponibile. O conformitate complet&atilde; cu toate browserele r&atilde;m&icirc;ne uneori o sperant&atilde; pentru viitor, si noi nu ne astept&atilde;m de la dumneavoastr&atilde; s&atilde; produceti o codificare absolut perfect&atilde; &icirc;n fiecare pixel pe toate platformele corespunz&atilde;toare. Totusi v&atilde; rug&atilde;m s&atilde; testati pe c&icirc;t mai multe platforme posibile. Dac&atilde; designul dumneavoastr&atilde; nu functioneaz&atilde; cel putin &icirc;n IE5+/Win si Mozilla (care s&icirc;nt folosite de peste 90% din populatie), este posibil ca noi s&atilde; nu-l accept&atilde;m.</span></p>
			<p class="p3"><span>Cerinta noastr&atilde; este s&atilde; ne trimiteti numai lucr&atilde;ri originale. V&atilde; rug&atilde;m s&atilde; respectati legile de copyright. V&atilde; rug&atilde;m s&atilde; limitati pe c&icirc;t se poate materialele socante si dubioase; prezentarea cu bun gust a nudurilor este acceptabil&atilde;, pornografia explicit&atilde; va fi respins&atilde;.</span></p>
			<p class="p4"><span>Acesta este un exercitiu de ucenicie si de demonstratie. Dumneavoastr&atilde; p&atilde;strati drepturile complete de copyright asupra lucr&atilde;rilor dumneavoastr&atilde; grafice, dar v&atilde; rug&atilde;m s&atilde; cedati drepturile pentru <acronym title="Cascading Style Sheets">CSS</acronym> &icirc;n favoarea unei Licence Creative Commons identice cu <a href="http://creativecommons.org/licenses/sa/1.0/" title="V&atilde; indrept&atilde;m atentia c&atilde;tre informatiile de licent&atilde; a Gr&atilde;dinii css-Zen.">cea de pe acest site (&icirc;n engleza)</a> pentru ca s&atilde; oferiti posibilitatea altor oameni s&atilde; &icirc;nvete din lucr&atilde;rile dumneavoastr&atilde;.</span></p>
			<p class="p5"><span>Canalele s&icirc;nt donate prin bun&atilde;vointa <a href="http://www.mediatemple.net/" lang="en">mediatemple</a></span></p>
		</div>

		<!-- Daca sinteti curiosi sa stiti de ce exista &nbsp; suplimentare la capatul link-urilor, acesta este un hack pentru a indeplini WCAG 1 Accessibility. -->
		<!-- Nu-mi place ca trebuie sa fac asta, dar acesta este un exercitiu visual. Este un compromis. -->
		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="Check the validity of this site&#8217;s XHTML">xhtml</a> &nbsp; 
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="Check the validity of this site&#8217;s CSS">css</a> &nbsp; 
			<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="View details of the license of this site, courtesy of Creative Commons.">cc</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=sec508&amp;test=" title="Check the accessibility of this site according to U.S. Section 508">508</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=wcag1-aaa&amp;test=" title="Check the accessibility of this site according to WAI Content Accessibility Guidelines 1">aaa</a>
		</div>

	</div>


	<div id="linkList">
		<div id="linkList2">
			<div id="lselect">
				<h3 class="select"><span>Alegeti un design:</span></h3>
				<ul>
<?php
					$c = 0;
					for ($a = ($listStart + 1); $a <= $listEnd; $a++) {
						$b = $listEnd - $c;
						$d = $letterarray[$c];
						$tempLink = linkMe($filename[$b]);
						echo "\t\t\t\t\t";
						echo "<li><a href=\"?cssfile=/${tempLink}/${tempLink}.css&amp;page=${thisPage}\" title=\"AccessKey: ${d}\" accesskey=\"${d}\">${styleName[$b]}</a> de <a href=\"${styleURL[$b]}\" class=\"c\">${styleCreator[$b]}</a></li>";
						echo "\n";
						$c = $c + 1;
					}
?>
				</ul>
			</div>

			<div id="larchives">
				<h3 class="archives"><span>Arhive:</span></h3>
				<ul>
<?php
					
					$forward = $thisPage + 1;
					$backward = $thisPage - 1;
					
					if ($listStart >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"${thisFile}?cssfile=${currentDesign}&amp;page=${forward}\" title=\"View next set of designs. AccessKey: u\" accesskey=\"u\">Designul <span class=\"accesskey\">u</span>rmator &raquo;</a></li>\n";
					}

					if ($thisPage >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"View previous set of designs. AccessKey: p\" accesskey=\"p\">&laquo; Designul <span class=\"accesskey\">p</span>recedent</a></li>\n";
					}
?>
					<li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="View every submission to the Zen Garden. AccessKey: o" accesskey="o">Uitati-va la t<span class="accesskey">o</span>ate designurile</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>Resurse:</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"${currentDesign}\" title=\"View the source CSS file for the currently-viewed design, AccessKey: v\" accesskey=\"v\"><acronym title=\"Cascading Style Sheets\">CSS</acronym>-ul ace<span class=\"accesskey\">s</span>tui design</a></li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources.asp" title="Links to great sites with information on using CSS. AccessKey: r" accesskey="r"><acronym title="Cascading Style Sheets">CSS</acronym> <span class="accesskey">R</span>esources</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/faq.asp" title="A list of Frequently Asked Questions about the Zen Garden. AccessKey: q" accesskey="q"><acronym title="Frequently Asked Questions">FA<span class="accesskey">Q</span></acronym></a>&nbsp;</li>
					<li><a href="http://www.mezzoblue.com/zengarden/sendfile.asp" title="Send in your own CSS file. AccessKey: m" accesskey="m">Tri<span class="accesskey">m</span>iteti un design</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/translations/" title="View translated versions of this page. AccessKey: t" accesskey="t"><span class="accesskey">T</span>raduceri</a></li>
				</ul>
			</div>
		</div>
	</div>


</div>

<!-- Aceste divs/spans suplimentare pot fi folosite pentru a adauga elemente vizuale suplimentare. -->
<!-- Puteti adauga imagini de background in fiecare si puteti folosi width si height pentru a controla dimensiunile, si puteti sa le plasati folosind pozitionare absoluta -->
<!-- Exista un bug rau care schimba culorile cu transparent GIFs in Netscape 6/7 si Mozilla v1.0 pina la v1.3 (in care e deja corectat),
		asa ca trebuie sa va testati lucrarea in aceste browsere. -->

<div id="extraDiv1"><span></span></div><div id="extraDiv2"><span></span></div><div id="extraDiv3"><span></span></div>
<div id="extraDiv4"><span></span></div><div id="extraDiv5"><span></span></div><div id="extraDiv6"><span></span></div>

</body>
</html>