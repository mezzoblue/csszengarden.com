<?php

include '../../includes/masterlist.php';
$letterarray = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="hu" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-2" />
	<meta name="author" content="Dave Shea" />
	<meta name="keywords" content="design, css, cascading, style, sheets, xhtml, graphic design, w3c, web standards, visual, display, st�luslapok, grafikus design, web standardok, web szabv�nyok, vizu�lis" />
	<meta name="description" content="Egy bemutat�, hogy mit lehet el�rni vizu�lisan CSS alap� designnal." />
	<meta name="robots" content="all" />
	<title>css Zen kert: A sz�ps�g a CSS designban</title>

	<!-- hogy kijav�tsa a d�sz�tetlen tartalom rusnya felvillan�s�t. http://www.bluerobot.com/web/css/fouc.asp -->
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

	Ez az xhtml dokumentum �gy van elk�sz�tve, hogy a lehets�ges legnanyobb rugalmass�got ny�jtsa a 
	designernek. T�bb oszt�ly �s tag van, mint sz�ks�ges �s egy val�s helyzetben val�sz�n�leg sokkal
	sz�razabb lenne.
	
	Ennek ellen�re azt hiszem, mindannyian egyet�rthet�nk abban, hogy m�g �gy is sokkal jobban j�tt�nk
	ki, mintha mindez t�bl�kkal lett volna megszerkesztve.

-->

<body id="css-zen-garden">

<div id="container">
	<div id="intro">
		<div id="pageHeader">
			<h1><span>css Zen kert</span></h1>
			<h2><span>A sz�ps�g a <acronym title="Cascading Style Sheets">CSS</acronym> designban</span></h2>
		</div>

		<div id="quickSummary">
			<p class="p1"><span>Egy bemutat�, hogy mit lehet vizu�lisan el�rni <acronym title="Cascading Style Sheets">CSS</acronym> alap� designal. V�laszd ki b�rmelyik st�luslapot a list�b�l, hogy bet�ltsd erre az oldalra.</span></p>
			<p class="p2"><span>T�ltsd le a minta <a href="/zengarden-sample.html" title="Ennek az oldalnak a HTML k�dja, nem m�dos�tand�.">html</a> �s <a href="/zengarden-sample.css" title="Ennek az oldalnak a minta CSS-e, amit tetsz�legesen m�dos�thatsz.">css</a> �llom�nyokat.</span></p>
		</div>

		<div id="preamble">
			<h3><span>�t a fevil�gosod�s fel�</span></h3>
			<p class="p1"><span>Egy s�t�t, kietlen �t por�ban sz�tsz�rva hevernek r�gi b�ng�sz�specifikus tag-ek roncsai, �sszef�rhetetlen <acronym title="Document Object Model">DOM</acronym>ok �s nem m�k�d� <acronym title="Cascading Style Sheets">CSS</acronym> t�mogat�sok.</span></p>
			<p class="p2"><span>Pedig meg kell tiszt�tanunk elm�nket a m�lt beidegz�d�seit�l. A Web felvil�gosod�s�t el�rt�k, h�la olyan emberek faradhatatlan munk�j�nak, mint a <acronym title="World Wide Web Consortium">W3C</acronym>, a <acronym title="Web Standards Project">WaSP</acronym> �s jelent�sebb b�ng�sz�k alkot�i.</span></p>
			<p class="p3"><span>Most a css Zen kert meginvit�l. Laz�ts �s medit�lj a mesterek b�lcs tan�t�sain. L�ss tiszt�n, mint egy megvil�gosodott elme. Tanuld meg az egykor majd hagyom�nyosnak sz�m�t� technik�kat �j �s felkavar� m�don haszn�lni. V�lj eggy� a webbel!</span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="explanation">
			<h3><span>Mir�l is sz�l a tan�t�s?</span></h3>
			<p class="p1"><span>Egy�rtelm�, hogy a grafikus m�v�szeknek komolyan kell venni�k a <acronym title="Cascading Style Sheets">CSS</acronym> - t. A Zen kert c�lja, hogy megmozgasson, megihlessen, �s b�tor�tson a bekapcsol�d�sra. Kezdetnek, n�zz meg egy p�rat a l�tez� designok k�z�l a mell�kelt list�b�l. B�rmelyikre kattintva, bet�lt�dik az �j st�luslap de pontosan ugyanerre az oldalra. A k�d v�ltozatlan marad, az egyetlen, ami megv�ltozik, az a k�ls� .css. Ez komoly!</span></p>
			<p class="p2"><span>A <acronym title="Cascading Style Sheets">CSS</acronym> teljes �s tot�lis kontrollt ny�jt a hipertext dokumentum kin�zete f�l�tt. Ez az egyetlen lehet�s�g, mindezt �gy bemutatni, hogy felkeltse az emberek �rdekl�d�s�t, mert �gy lehet igaz�b�l felvillantani mire is k�pes, ha olyan emberek kez�be ker�l, akik k�pesek leny�g�z� szerkezeteket �sszehozni. Eg�sz mostan�ig, a legt�bb p�ld�t cselez� �s buher�l� szerkezet�p�t�k �s programoz�k mutatt�k be. A designerek m�g meg kell tegy�k a maguk�t. Az eddigieken v�ltoztatni kell!</span></p>
		</div>

		<div id="participation">
			<h3><span>R�szv�teli javaslatok</span></h3>
			<p class="p1"><span>Ha lehet, legyenek csak grafikusok. M�dos�tani fogod ezt az oldalt, �gyhogy el�g j� <acronym title="Cascading Style Sheets">CSS</acronym> ismeretekre van sz�ks�g, de a p�ld�k el�g j�l vannak magyar�zva, hogy m�g <acronym title="Cascading Style Sheets">CSS</acronym> -ben kezd�k is haszn�lhass�k azokat, kiindul�pontk�nt. Halad� tananyagok�rt �s tippek�rt, k�rlek, n�zd meg a <a href="http://www.mezzoblue.com/zengarden/resources/" title="CSS-hez kapcsol�d� forr�sok list�ja"><acronym title="Cascading Style Sheets">CSS</acronym> forr�sokat</a>.</span></p>
			<p class="p2"><span>Ezt a st�luslapot �gy m�dos�tod, ahogy �hajtod, de a <acronym title="HyperText Markup Language">HTML</acronym>-t tilos. Ez tal�n ijeszt�nek t�nhet, ha m�g sohasem dolgozt�l �gy kor�bban, de csak k�vesd a hivatkoz�sokat, hogy t�bbet tanulj �s haszn�ld a p�ld�kat �tmutat�ul.</span></p>
			<p class="p3"><span>T�ltsd le a minta <a href="/zengarden-sample.html" title="Ennek az oldalnak a HTML k�dja, nem m�dos�tand�.">html</a> �s <a href="/zengarden-sample.css" title="Ennek az oldalnak a minta CSS-e, amit tetsz�legesen m�dos�thatsz.">css</a> �llom�nyokat �s dolgozz helyben. Ha k�szen �ll mesterm�ved (�s k�rlek, ne k�ldj el f�lk�sz munk�t) t�ltsd fel a .css-t egy �ltalad el�rhet� webszerverre. <a href="http://www.mezzoblue.com/zengarden/submit/" title="Haszn�ld a form-ot, hogy elk�ldd a CSS �llom�nyodat">K�ldj egy hivatkoz�st</a> az �llom�nyr�l, �s ha �gy d�nt�nk, hogy felhaszn�ljuk, leszedj�k majd a t�rs�tott k�peket is. A v�gs� bek�ld�sek a mi szever�nkre ker�lnek.</span></p>
			<p class="p4"><span>Friss�t�s: ford�t�kat keresek. Ha foly�konyan besz�led az angolt �s valamilyen m�s nyelvet, ez egy �jabb lehet�s�g, hogy r�szt vegy�l a projektben. K�rlek, <a href="http://www.mezzoblue.com/contact/" title="K�ldj nekem egy emailt, megjegyezve milyen nyelveket besz�lsz foly�konyan.">vedd fel velem a kapcsolatot</a> a tov�bbi r�szletek�rt. M�r <a href="http://www.mezzoblue.com/zengarden/translations/">el�rhet�ek</a> az elk�sz�lt ford�t�sok.</span></p>
		</div>

		<div id="benefits">
			<h3><span>V�gkifejlet</span></h3>
			<p class="p1"><span>Hogy mi�rt is kapcsol�dj be? Elismer�s�rt, ihlet�rt �s egy forr�s�rt, amire hivatkozhatunk mikor a <acronym title="Cascading Style Sheets">CSS</acronym> alap� design mellet �rvel�nk. Ez �get�en sz�ks�ges, m�g mostans�g is. Egyre t�bb nagy oldal hozza meg a d�nt�st, de m�g nem elegen. Egy nap ez a t�rlat csak t�rt�nelmi �rdekess�g lesz; de ez a nap m�g nem j�tt el.</span></p>
		</div>

		<div id="requirements">
			<h3><span>K�vetelm�nyek</span></h3>
			<p class="p1"><span>Szeretn�nk annyi <acronym title="Cascading Style Sheets, version 1">CSS1</acronym>-et l�tni, amennyit csak lehets�ges. <acronym title="Cascading Style Sheets, version 2">CSS2</acronym>-t lehet�leg csak a sz�les k�rben t�mogatott elemeket. A css Zen kert m�k�d�k�pes, gyakorlatba �ltethet� <acronym title="Cascading Style Sheets">CSS</acronym>-r�l sz�l �s nem a legfrissebb technikai tr�kk�kr�l, amit a Web k�z�ns�gnek csak 2%-a l�that. Az egyetlen igazi k�vetelm�ny, hogy a <acronym title="Cascading Style Sheets">CSS</acronym>-ed �rv�nyes legyen.</span></p>
			<p class="p2"><span>Sajnos �gy designolva kiugranak a hib�k a <acronym title="Cascading Style Sheets">CSS</acronym> k�l�nb�z� kivitelez�seiben. K�l�nb�z� b�ng�sz�k k�l�nb�z�k�ppen jelen�tenek meg n�ha teljesen �rv�nyes <acronym title="Cascading Style Sheets">CSS</acronym>-t is, �s �rj�t� tud lenni, ha egy hibajav�t�s valamelyikhez �jabb hib�t sz�l egy m�sikban. N�zd meg a <a href="http://www.mezzoblue.com/zengarden/resources/" title="CSS-hez kapcsol�d� forr�sok list�ja">Forr�sok</a> oldalt b�vebb inform�ci�k�rt n�h�ny ismert hiba jav�t�s�r�l. A teljes b�ng�sz� kompatibilit�s m�g mindig v�gy�lom �s nem v�rjuk el, hogy pixelre t�k�letes legyen a k�dod minden egyes platformon. De teszteld le ahogy csak b�rod. Ha a designod nem m�k�dik legal�bb IE5+/Win-al �s Mozill�val (a n�pess�g t�bb mint 90% �ltal haszn�lva), val�sz�n�leg nem fogjuk elfogadni.</span></p>
			<p class="p3"><span>Arra k�r�nk, eredeti m�vet k�ldj. K�r�nk, tartsd figyelemben a szerz�i jogokat. Korl�tozd a kifog�solhat� tartalmat a minimumra; �zl�ses meztelens�g elfogadhat�, a nyilv�nval� pornogr�fi�t visszautas�tjuk.</span></p>
			<p class="p4"><span>Ez egy tanul� gyakorlat �s egy szeml�ltet�s egyben. Megtarthatod a teljes szerz�i jogokat a k�pekre, de arra k�r�nk, <acronym title="Cascading Style Sheets">CSS</acronym>-edet egy Creative Commons licensz al� helyezd, hasonlatosan ahhoz, <a href="http://creativecommons.org/licenses/sa/1.0/" title="Tekintsd meg a Zen kert licensz�t.">ami ezen az oldalon</a> is van, hogy m�sok is tanulhassanak a munk�db�l.</span></p>
			<p class="p5"><span>A s�vsz�less�g a <a href="http://www.mediatemple.net/" lang="en">mediatemple</a> sz�v�lyes adom�nya.</span></p>
		</div>

		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="Ellen�rizd ezen oldal XHTML-j�nek az �rv�nyess�g�t">xhtml</a> &nbsp; 
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="Ellen�rizd ezen oldal CSS-�nek az �rv�nyess�g�t">css</a> &nbsp; 
			<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="Tekintsd ezen oldal licensz�nek a re�szleteit, a Creative Commons sz�vess�g�b�l.">cc</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=sec508&amp;test=" title="Ellen�rizd ezen oldal hozz�f�rhet�s�g�t a U.S. Section 508 szerint">508</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=wcag1-aaa&amp;test=" title="Ellen�rizd ezen oldal hozz�f�rhet�s�g�t a WAI Content Accessibility Guidelines 1 szerint">aaa</a>
		</div>

	</div>

	
	<div id="linkList">
		<!--extra div a rugalmass�g kedv��rt - ez a lista val�sz�n�leg a legravaszabb r�sz amivel foglalkoznod kell -->
		<div id="linkList2">

		<!-- Ha csod�lkozol az extra &nbsp; a link v�g�n, az csak egy csel, hogy megfelejen a  WCAG 1 Accessibility -nek. -->
		<!-- Nem szeretem, hogy meg kell tegyem, de ez egy vizu�lis gyakorlat. Kompromisszum. -->
			<div id="lselect">
				<h3 class="select"><span>V�lassz egy designt:</span></h3>
				<!-- a linkek list�ja itt kezd�dik. Nem lesz t�bb mint 8 link oldalank�nt -->
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
				Ez nem fog megjelenni csak majd ha az arch�vum elkezd betelni. De sz�m�ts r�. Ha
				er�sen v�toztatsz a 'v�lassz egy designt' h3-on, ezen is v�ltoztatnod kell.
			<div id="lfavorites">
				<h3 class="favorites"><span>Kedvencek:</span></h3>
				<ul>
					<li><a href="#">filename</a> by <a href="" class="c">submitter</a>&nbsp;</li>
					<li><a href="#">filename</a> by <a href="" class="c">submitter</a>&nbsp;</li>
				</ul>
			</div>
			-->
			
			<div id="larchives">
				<h3 class="archives"><span>Arch�vum:</span></h3>
				<ul>
<?php
					
					$forward = $thisPage + 1;
					$backward = $thisPage - 1;
					
					if ($listStart >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"${thisFile}?cssfile=${currentDesign}&amp;page=${forward}\" title=\"Tekintsd meg a k�vetkez� adag designt. Gyorsbillenty�: n\" accesskey=\"n\">a k�vetkez� desigok<span class=\"accesskey\">n</span>ok &raquo;</a></li>\n";
					}

					if ($thisPage >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"Tekintsd meg az el�z� adag designt. Gyorsbillenty�: p\" accesskey=\"p\">&laquo; el�z� designok</a></li>\n";
					}
?>
					<li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="Tekintsd meg az �sszes bek�ld�st a Zen kerthez. Gyorsbillenty�: w" accesskey="w">Az �sszes design</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>Forr�sok:</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"${currentDesign}\" title=\"Tekintsd meg ennek a designnak a forr�s�t, Gyorsbillenty�: v\" accesskey=\"v\">Ennek a designnak a <acronym title=\"Cascading Style Sheets\">CSS</acronym></a></li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources/" title="Linkek kiv�l� oldalakra, ahol t�bbet tudhatsz meg a CSS haszn�lat�r�l. Gyorsbillenty�: r" accesskey="r"><acronym title="Cascading Style Sheets">CSS</acronym> Fo<span class="accesskey">r</span>r�sok</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/faq/" title="Gyakran ism�tl�d� k�rd�sek ilst�ja a Zen kertr�l. Gyorsbillenty�: q" accesskey="q"><acronym title="Gyakran Ism�tl�d� K�rd�sek">GYIK</acronym></a>&nbsp;</li>
					<li><a href="http://www.mezzoblue.com/zengarden/submit/" title="K�ldd be saj�t CSS �llom�nyodat. Gyorsbillenty�: s" accesskey="s">K�ldj el egy de<span class="accesskey">s</span>ignt</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/translations/" title="Tekintsd meg a leford�tott v�ltozatait ennek az oldalnak. Gyorsbillenty�: t" accesskey="t">Ford�<span class="accesskey">t</span>�sok</a></li>
				</ul>
			</div>
		</div>
	</div>


</div>

<!-- Ezek az extra div-ek/span-ok haszn�lhat�ak t�rol�k�nt plussz k�pek hozz�ad�s�ra. -->
<!-- Adj egy-egy h�tt�rk�pet mindegyikhez �s haszn�ld a 'width'-ot �s a 'height'-ot hogy ellen�rizd a m�reteket, majd helyezd el �ket abszol�t elhelyez�ssel -->
<!-- Van egy el�g randa sz�neltol�d�si hiba az �tl�tsz� GIFek-n�l Netscape 6/7-ben, valamint a Mozilla 1.0-t�l 1.3-ig (amelyben kijav�tott�k) ,	�gyhogy ellen�rizd munk�dat ezekben a b�ngesz�kben, hogy j�l m�k�dik-e -->
<div id="extraDiv1"><span></span></div><div id="extraDiv2"><span></span></div><div id="extraDiv3"><span></span></div>
<div id="extraDiv4"><span></span></div><div id="extraDiv5"><span></span></div><div id="extraDiv6"><span></span></div>

</body>
</html>