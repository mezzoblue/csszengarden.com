<?php

include '../../includes/masterlist.php';
$letterarray = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="hu" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-2" />
	<meta name="author" content="Dave Shea" />
	<meta name="keywords" content="design, css, cascading, style, sheets, xhtml, graphic design, w3c, web standards, visual, display, stíluslapok, grafikus design, web standardok, web szabványok, vizuális" />
	<meta name="description" content="Egy bemutató, hogy mit lehet elérni vizuálisan CSS alapú designnal." />
	<meta name="robots" content="all" />
	<title>css Zen kert: A szépség a CSS designban</title>

	<!-- hogy kijavítsa a díszítetlen tartalom rusnya felvillanását. http://www.bluerobot.com/web/css/fouc.asp -->
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

	Ez az xhtml dokumentum úgy van elkészítve, hogy a lehetséges legnanyobb rugalmasságot nyújtsa a 
	designernek. Több osztály és tag van, mint szükséges és egy valós helyzetben valószínüleg sokkal
	szárazabb lenne.
	
	Ennek ellenére azt hiszem, mindannyian egyetérthetünk abban, hogy még így is sokkal jobban jöttünk
	ki, mintha mindez táblákkal lett volna megszerkesztve.

-->

<body id="css-zen-garden">

<div id="container">
	<div id="intro">
		<div id="pageHeader">
			<h1><span>css Zen kert</span></h1>
			<h2><span>A szépség a <acronym title="Cascading Style Sheets">CSS</acronym> designban</span></h2>
		</div>

		<div id="quickSummary">
			<p class="p1"><span>Egy bemutató, hogy mit lehet vizuálisan elérni <acronym title="Cascading Style Sheets">CSS</acronym> alapú designal. Válaszd ki bármelyik stíluslapot a listából, hogy betöltsd erre az oldalra.</span></p>
			<p class="p2"><span>Töltsd le a minta <a href="/zengarden-sample.html" title="Ennek az oldalnak a HTML kódja, nem módosítandó.">html</a> és <a href="/zengarden-sample.css" title="Ennek az oldalnak a minta CSS-e, amit tetszőlegesen módosíthatsz.">css</a> állományokat.</span></p>
		</div>

		<div id="preamble">
			<h3><span>Út a fevilágosodás felé</span></h3>
			<p class="p1"><span>Egy sötét, kietlen út porában szétszórva hevernek régi böngészőspecifikus tag-ek roncsai, összeférhetetlen <acronym title="Document Object Model">DOM</acronym>ok és nem működő <acronym title="Cascading Style Sheets">CSS</acronym> támogatások.</span></p>
			<p class="p2"><span>Pedig meg kell tisztítanunk elménket a múlt beidegződéseitől. A Web felvilágosodását elértük, hála olyan emberek faradhatatlan munkájának, mint a <acronym title="World Wide Web Consortium">W3C</acronym>, a <acronym title="Web Standards Project">WaSP</acronym> és jelentősebb böngészők alkotói.</span></p>
			<p class="p3"><span>Most a css Zen kert meginvitál. Lazíts és meditálj a mesterek bölcs tanításain. Láss tisztán, mint egy megvilágosodott elme. Tanuld meg az egykor majd hagyományosnak számító technikákat új és felkavaró módon használni. Válj eggyé a webbel!</span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="explanation">
			<h3><span>Miről is szól a tanítás?</span></h3>
			<p class="p1"><span>Egyértelmű, hogy a grafikus művészeknek komolyan kell venniük a <acronym title="Cascading Style Sheets">CSS</acronym> - t. A Zen kert célja, hogy megmozgasson, megihlessen, és bátorítson a bekapcsolódásra. Kezdetnek, nézz meg egy párat a létező designok közül a mellékelt listából. Bármelyikre kattintva, betöltődik az új stíluslap de pontosan ugyanerre az oldalra. A kód változatlan marad, az egyetlen, ami megváltozik, az a külső .css. Ez komoly!</span></p>
			<p class="p2"><span>A <acronym title="Cascading Style Sheets">CSS</acronym> teljes és totális kontrollt nyújt a hipertext dokumentum kinézete fölött. Ez az egyetlen lehetőség, mindezt úgy bemutatni, hogy felkeltse az emberek érdeklődését, mert így lehet igazából felvillantani mire is képes, ha olyan emberek kezébe kerül, akik képesek lenyűgöző szerkezeteket összehozni. Egész mostanáig, a legtöbb példát cselező és buheráló szerkezetépítők és programozók mutatták be. A designerek még meg kell tegyék a magukét. Az eddigieken változtatni kell!</span></p>
		</div>

		<div id="participation">
			<h3><span>Részvételi javaslatok</span></h3>
			<p class="p1"><span>Ha lehet, legyenek csak grafikusok. Módosítani fogod ezt az oldalt, úgyhogy elég jó <acronym title="Cascading Style Sheets">CSS</acronym> ismeretekre van szükség, de a példák elég jól vannak magyarázva, hogy még <acronym title="Cascading Style Sheets">CSS</acronym> -ben kezdők is használhassák azokat, kiindulópontként. Haladó tananyagokért és tippekért, kérlek, nézd meg a <a href="http://www.mezzoblue.com/zengarden/resources/" title="CSS-hez kapcsolódó források listája"><acronym title="Cascading Style Sheets">CSS</acronym> forrásokat</a>.</span></p>
			<p class="p2"><span>Ezt a stíluslapot úgy módosítod, ahogy óhajtod, de a <acronym title="HyperText Markup Language">HTML</acronym>-t tilos. Ez talán ijesztőnek tűnhet, ha még sohasem dolgoztál így korábban, de csak kövesd a hivatkozásokat, hogy többet tanulj és használd a példákat útmutatóul.</span></p>
			<p class="p3"><span>Töltsd le a minta <a href="/zengarden-sample.html" title="Ennek az oldalnak a HTML kódja, nem módosítandó.">html</a> és <a href="/zengarden-sample.css" title="Ennek az oldalnak a minta CSS-e, amit tetszőlegesen módosíthatsz.">css</a> állományokat és dolgozz helyben. Ha készen áll mesterműved (és kérlek, ne küldj el félkész munkát) töltsd fel a .css-t egy általad elérhető webszerverre. <a href="http://www.mezzoblue.com/zengarden/submit/" title="Használd a form-ot, hogy elküldd a CSS állományodat">Küldj egy hivatkozást</a> az állományról, és ha úgy döntünk, hogy felhasználjuk, leszedjük majd a társított képeket is. A végső beküldések a mi szeverünkre kerülnek.</span></p>
			<p class="p4"><span>Frissítés: fordítókat keresek. Ha folyékonyan beszéled az angolt és valamilyen más nyelvet, ez egy újabb lehetőség, hogy részt vegyél a projektben. Kérlek, <a href="http://www.mezzoblue.com/contact/" title="Küldj nekem egy emailt, megjegyezve milyen nyelveket beszélsz folyékonyan.">vedd fel velem a kapcsolatot</a> a további részletekért. Már <a href="http://www.mezzoblue.com/zengarden/translations/">elérhetőek</a> az elkészült fordítások.</span></p>
		</div>

		<div id="benefits">
			<h3><span>Végkifejlet</span></h3>
			<p class="p1"><span>Hogy miért is kapcsolódj be? Elismerésért, ihletért és egy forrásért, amire hivatkozhatunk mikor a <acronym title="Cascading Style Sheets">CSS</acronym> alapú design mellet érvelünk. Ez égetően szükséges, még mostanság is. Egyre több nagy oldal hozza meg a döntést, de még nem elegen. Egy nap ez a tárlat csak történelmi érdekesség lesz; de ez a nap még nem jött el.</span></p>
		</div>

		<div id="requirements">
			<h3><span>Követelmények</span></h3>
			<p class="p1"><span>Szeretnénk annyi <acronym title="Cascading Style Sheets, version 1">CSS1</acronym>-et látni, amennyit csak lehetséges. <acronym title="Cascading Style Sheets, version 2">CSS2</acronym>-t lehetőleg csak a széles körben támogatott elemeket. A css Zen kert működőképes, gyakorlatba ültethető <acronym title="Cascading Style Sheets">CSS</acronym>-ről szól és nem a legfrissebb technikai trükkökről, amit a Web közönségnek csak 2%-a láthat. Az egyetlen igazi követelmény, hogy a <acronym title="Cascading Style Sheets">CSS</acronym>-ed érvényes legyen.</span></p>
			<p class="p2"><span>Sajnos így designolva kiugranak a hibák a <acronym title="Cascading Style Sheets">CSS</acronym> különböző kivitelezéseiben. Különböző böngészők különbözőképpen jelenítenek meg néha teljesen érvényes <acronym title="Cascading Style Sheets">CSS</acronym>-t is, és őrjítő tud lenni, ha egy hibajavítás valamelyikhez újabb hibát szül egy másikban. Nézd meg a <a href="http://www.mezzoblue.com/zengarden/resources/" title="CSS-hez kapcsolódó források listája">Források</a> oldalt bővebb információkért néhány ismert hiba javításáról. A teljes böngésző kompatibilitás még mindig vágyálom és nem várjuk el, hogy pixelre tökéletes legyen a kódod minden egyes platformon. De teszteld le ahogy csak bírod. Ha a designod nem működik legalább IE5+/Win-al és Mozillával (a népesség több mint 90% által használva), valószínűleg nem fogjuk elfogadni.</span></p>
			<p class="p3"><span>Arra kérünk, eredeti művet küldj. Kérünk, tartsd figyelemben a szerzői jogokat. Korlátozd a kifogásolható tartalmat a minimumra; ízléses meztelenség elfogadható, a nyilvánvaló pornográfiát visszautasítjuk.</span></p>
			<p class="p4"><span>Ez egy tanuló gyakorlat és egy szemléltetés egyben. Megtarthatod a teljes szerzői jogokat a képekre, de arra kérünk, <acronym title="Cascading Style Sheets">CSS</acronym>-edet egy Creative Commons licensz alá helyezd, hasonlatosan ahhoz, <a href="http://creativecommons.org/licenses/sa/1.0/" title="Tekintsd meg a Zen kert licenszét.">ami ezen az oldalon</a> is van, hogy mások is tanulhassanak a munkádból.</span></p>
			<p class="p5"><span>A sávszélesség a <a href="http://www.mediatemple.net/" lang="en">mediatemple</a> szívélyes adománya.</span></p>
		</div>

		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="Ellenőrizd ezen oldal XHTML-jének az érvényességét">xhtml</a> &nbsp; 
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="Ellenőrizd ezen oldal CSS-ének az érvényességét">css</a> &nbsp; 
			<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="Tekintsd ezen oldal licenszének a reészleteit, a Creative Commons szívességéből.">cc</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=sec508&amp;test=" title="Ellenőrizd ezen oldal hozzáférhetőségét a U.S. Section 508 szerint">508</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=wcag1-aaa&amp;test=" title="Ellenőrizd ezen oldal hozzáférhetőségét a WAI Content Accessibility Guidelines 1 szerint">aaa</a>
		</div>

	</div>

	
	<div id="linkList">
		<!--extra div a rugalmasság kedvéért - ez a lista valószínüleg a legravaszabb rész amivel foglalkoznod kell -->
		<div id="linkList2">

		<!-- Ha csodálkozol az extra &nbsp; a link végén, az csak egy csel, hogy megfelejen a  WCAG 1 Accessibility -nek. -->
		<!-- Nem szeretem, hogy meg kell tegyem, de ez egy vizuális gyakorlat. Kompromisszum. -->
			<div id="lselect">
				<h3 class="select"><span>Válassz egy designt:</span></h3>
				<!-- a linkek listája itt kezdődik. Nem lesz több mint 8 link oldalanként -->
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
				Ez nem fog megjelenni csak majd ha az archívum elkezd betelni. De számíts rá. Ha
				erősen vátoztatsz a 'válassz egy designt' h3-on, ezen is változtatnod kell.
			<div id="lfavorites">
				<h3 class="favorites"><span>Kedvencek:</span></h3>
				<ul>
					<li><a href="#">filename</a> by <a href="" class="c">submitter</a>&nbsp;</li>
					<li><a href="#">filename</a> by <a href="" class="c">submitter</a>&nbsp;</li>
				</ul>
			</div>
			-->
			
			<div id="larchives">
				<h3 class="archives"><span>Archívum:</span></h3>
				<ul>
<?php
					
					$forward = $thisPage + 1;
					$backward = $thisPage - 1;
					
					if ($listStart >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"${thisFile}?cssfile=${currentDesign}&amp;page=${forward}\" title=\"Tekintsd meg a következő adag designt. Gyorsbillentyű: n\" accesskey=\"n\">a következő desigok<span class=\"accesskey\">n</span>ok &raquo;</a></li>\n";
					}

					if ($thisPage >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"Tekintsd meg az előző adag designt. Gyorsbillentyű: p\" accesskey=\"p\">&laquo; előző designok</a></li>\n";
					}
?>
					<li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="Tekintsd meg az összes beküldést a Zen kerthez. Gyorsbillentyű: w" accesskey="w">Az összes design</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>Források:</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"${currentDesign}\" title=\"Tekintsd meg ennek a designnak a forrását, Gyorsbillentyű: v\" accesskey=\"v\">Ennek a designnak a <acronym title=\"Cascading Style Sheets\">CSS</acronym></a></li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources/" title="Linkek kiváló oldalakra, ahol többet tudhatsz meg a CSS használatáról. Gyorsbillentyű: r" accesskey="r"><acronym title="Cascading Style Sheets">CSS</acronym> Fo<span class="accesskey">r</span>rások</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/faq/" title="Gyakran ismétlődő kérdések ilstája a Zen kertről. Gyorsbillentyű: q" accesskey="q"><acronym title="Gyakran Ismétlődő Kérdések">GYIK</acronym></a>&nbsp;</li>
					<li><a href="http://www.mezzoblue.com/zengarden/submit/" title="Küldd be saját CSS állományodat. Gyorsbillentyű: s" accesskey="s">Küldj el egy de<span class="accesskey">s</span>ignt</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/translations/" title="Tekintsd meg a lefordított változatait ennek az oldalnak. Gyorsbillentyű: t" accesskey="t">Fordí<span class="accesskey">t</span>ások</a></li>
				</ul>
			</div>
		</div>
	</div>


</div>

<!-- Ezek az extra div-ek/span-ok használhatóak tárolóként plussz képek hozzáadására. -->
<!-- Adj egy-egy háttérképet mindegyikhez és használd a 'width'-ot és a 'height'-ot hogy ellenőrizd a méreteket, majd helyezd el őket abszolút elhelyezéssel -->
<!-- Van egy elég randa színeltolódási hiba az átlátszó GIFek-nél Netscape 6/7-ben, valamint a Mozilla 1.0-tól 1.3-ig (amelyben kijavították) ,	Úgyhogy ellenőrizd munkádat ezekben a böngeszőkben, hogy jól működik-e -->
<div id="extraDiv1"><span></span></div><div id="extraDiv2"><span></span></div><div id="extraDiv3"><span></span></div>
<div id="extraDiv4"><span></span></div><div id="extraDiv5"><span></span></div><div id="extraDiv6"><span></span></div>

</body>
</html>