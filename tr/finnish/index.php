<?php

include '../../includes/masterlist.php';
$letterarray = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fi" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Dave Shea" />
	<meta name="keywords" content="design, suunnittelu, ulkoasu, muotoilu, CSS, tyyliohje, tyyliohjeet, tyyli, tyylitiedostot, tyylilomakkeet, tyylis��nn�t, tyylis��nn�st�t, XHTML, graafinen suunnittelu, W3C, Web-standardit, visuaalinen, esitys" />
	 <meta name="description" content="Havaintoesitys siit�, mit� voidaan saavuttaa visuaalisesti CSS-pohjaisella suunnittelulla." />
	<meta name="robots" content="all" />
	<title>css Zen Garden: CSS-muotoilun kauneutta</title>

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
                        <h1 lang="en"><span>css Zen Garden</span></h1>
                        <h2><span><acronym title="Cascading Style Sheets">CSS</acronym>-muotoilun kauneutta</span></h2>
                </div>

                <div id="quickSummary">
                        <p class="p1"><span>Havaintoesitys siit�, mit� <acronym title="Cascading Style Sheets">CSS</acronym>-pohjaisella muotoilulla voidaan saavuttaa visuaalisesti. Valitse listasta jokin tyyliohje, niin n�et t�m�n sivun sen mukaisessa ulkoasussa.</span></p>
                        <p class="p2"><span>Lataa esimerkin <a href="/zengarden-sample.html" title="T�m�n sivun HTML-koodi, jota ei tule muuttaa.">HTML-tiedosto</a> ja <a href="/zengarden-sample.css" title="T�m�n sivun esimerkkityyliohje, tiedosto, jota voit muuttaa.">CSS-tiedosto</a></span></p>
                </div>

                <div id="preamble">
                        <h3><span>Valaistumisen tie</span></h3>
                        <p class="p1"><span>Pime�n ja kolkon tien varrella lojuu roskia &#8211; selainriippuvien t�gien, yhteensopimattomien <acronym title="Document Object Model">DOM</acronym>ien ja rikkin�isen  <acronym title="Cascading Style Sheets">CSS</acronym>-tuen j��nn�ksi�.</span></p>
                        <p class="p2"><span>T�n� p�iv�n� meid�n on puhdistettava mielemme menneist� k�yt�nn�ist�. Webin valaistuminen on saavutettu sellaisten tahojen v�sym�tt�mien ponnistusten ansiosta kuin <acronym title="World Wide Web Consortium">W3C</acronym>, <acronym title="Web Standards Project">WaSP</acronym> ja johtavien selainten tekij�t.</span></p>
                        <p class="p3"><span><span lang="en">Zen Garden</span> kutsuu sinut rentoutumaan ja mietiskelem��n mestarien t�rkeit� opetuksia. Suuntaudu n�kem��n kirkkaasti. Opettele k�ytt�m��n kunnioitettavia tekniikoita uudella ja elvytt�v�ll� tavalla. Yhdisty Webin kanssa.</span></p>
                </div>
        </div>

        <div id="supportingText">
                <div id="explanation">
                        <h3><span>Mist� t�ss� siis on kyse?</span></h3>
                        <p class="p1"><span>On selv� tarve siihen, ett� graafikot ottavat <acronym title="Cascading Style Sheets">CSS</acronym>:n vakavasti. <span lang="en">Zen Garden</span> pyrkii yllytt�m��n, innostamaan ja rohkaisemaan osallistumista. Alkuun p��semiseksi katso joitakin jo tehtyj� muotoiluja listasta. Kun napsautat jotain listan kohtaa, saat n�ht�v�ksi t�m�n sivun sellaisena, miksi kyseinen tyyliohje sen tekee. Koodi pysyy samana; ainoa, mik� on muuttunut, on ulkoinen .css-tiedosto. Ihan totta.</span></p>

                        <p class="p2"><span><acronym title="Cascading Style Sheets">CSS</acronym> sallii hypertekstidokumentin tyylin t�ydellisen ja kattavan kontrollin. Ainoa tapa esitt�� t�m� niin, ett� ihmiset innostuvat, on havainnollistaa, mit� se voi todella olla. T�t� varten on ohjakset saatava niiden k�siin, joilla on kyky luoda rakenteesta kauneutta. Nykyisin useimmat esimerkit kivoista nikseist� ja tempuista ovat strukturalistien ja koodaajien tekemi� havainnollistuksia. Graafikot eiv�t viel� ole kunnostautuneet. T�h�n tarvitaan muutos.</span></p>
                </div>

                <div id="participation">
                        <h3><span>Osallistuminen</span></h3>
                        <p class="p1"><span>Muut kuin graafikot �lk��t vaivautuko. Tulet muuttamaan t�t� sivua, joten vahva  <acronym title="Cascading Style Sheets">CSS</acronym>:n osaaminen on v�ltt�m�t�nt�, mutta esimerkkitiedostot on kommentoitu tarpeeksi hyvin niin, ett� my�s <acronym title="Cascading Style Sheets">CSS</acronym>-aloittelijat voivat k�ytt�� niit� l�ht�kohtina. Katso <a lang="en" href="http://www.mezzoblue.com/zengarden/resources/" title="A listing of CSS-related resources"><acronym title="Cascading Style Sheets">CSS</acronym>-aineistoja</a> -sivulta pitemm�lle menevi� ohjeita ja vihjeit� <acronym title="Cascading Style Sheets">CSS</acronym>:n k�yt�st�.</span></p>
                        <p class="p2"><span>Saat muokata tyyliohjetta miten haluat, mutta et <acronym title="HyperText Markup Language">HTML</acronym>-tiedostoa. T�m� voi tuntua aluksi pelottavalta, jos et ole koskaan aiemmin ty�skennellyt t�ll� tavoin, mutta seuraa linkkej�, niin opit lis��, ja k�yt� esimerkkitiedostoja tienn�ytt�jin�.</span></p>
                        <p class="p3"><span>Lataa esimerkkin� oleva <a href="/zengarden-sample.html" title="T�m�n sivun HTML-l�hdekoodi, jota ei saa muuttaa.">.html-tiedosto</a> ja <a href="/zengarden-sample.css" title="T�m�n sivun esimerkkin� oleva CSS-koodi, tiedosto, jota voit muokata.">.css-tiedosto</a>, jotta voit k�sitell� sivun kopiota paikallisesti. Kun olet saanut mestariteoksesi valmiiksi &#8211; pyyd�mme, ettet l�het� puolivalmista &#8211; kopioi .css-tiedostosi Web-palvelimeen, joka on k�ytett�viss�si. <a href="http://www.mezzoblue.com/zengarden/submit/" title="K�yt� yhteydenottolomaketta l�hett��ksesi meille CSS-tiedostosi">L�het� meille tiedoston osoite</a>. Jos p��t�mme k�ytt�� sit�, niin haemme siihen liittyv�t kuvat. Lopulliset ehdotukset sijoitetaan meid�n palvelimeemme.</span></p>
                        <p class="p4"><span>T�ydennys: Etsin k��nt�ji�. Jos osaat sujuvasti englantia ja jotakin muuta kielt�, niin t�m� on toinen tapa tulle mukaan hankkeeseen. <a href="http://www.mezzoblue.com/contact/" title="L�het� minulle s�hk�postia, mainiten, mit� kieli� hallitset.">Ota minuun yhteytt�</a> yksityiskohtien selvitt�miseksi. Saatavilla on jo tehtyj� <a href="http://www.mezzoblue.com/zengarden/translations/"> k��nn�ksi�</a>. T�m�n suomennoksen on tehnyt <a href="http://www.cs.tut.fi/%7Ejkorpela/henkkoht.html">Jukka�K. Korpela.</a></span></p>
                </div>

                <div id="benefits">
                        <h3><span>Hy�dyt</span></h3>
                        <p class="p1"><span>Miksi osallistuisit? Tunnustuksen saamiseksi, innoituksen takia ja luodaksemme sellaisen aineiston, johon kaikki voimme viitata, kun puhumme  <acronym title="Cascading Style Sheets">CSS</acronym>-pohjaisen muotoilun puolesta. T�t� tarvitaan kipe�sti, t�n��nkin. Yh� useammat isot sivustot ovat loikkaamassa eteenp�in, mutta tarpeeksi monet eiv�t ole viel� loikanneet. Jonakin p�iv�n� t�m� galleria tulee olemaan historiallinen kuriositeetti; mutta se p�iv� ei viel� ole koittanut.</span></p>
                </div>

                <div id="requirements">
                        <h3><span>Vaatimukset</span></h3>
                        <p class="p1"><span>Haluaisimme n�hd� mahdollisimman paljon <acronym title="Cascading Style Sheets, version 1">CSS1</acronym>:t�. <acronym title="Cascading Style Sheets, version 2">CSS2</acronym>:n k�ytt� tulisi rajoittaa laajasti tuettuihin piirteisiin. <span lang="en">Zen Garden</span>issa on kyse toimivasta, k�yt�nn�llisest� <acronym title="Cascading Style Sheets">CSS</acronym>:st� eik� uusimmista avantgardistisista tempuista, jotka n�kyv�t 2�%:lle sivuja katsovaa yleis��. Ainoa todellinen vaatimus, joka meill� on, on se, ett� <acronym title="Cascading Style Sheets">CSS</acronym>-koodisi validoituu.</span></p>
                        <p class="p2"><span>T�llainen suunnittelu valitettavasti korostaa <acronym title="Cascading Style Sheets">CSS</acronym>:n erilaisten toteutusten puutteita. Eri selaimet esitt�v�t sivuja eri tavoin, ajoittain jopa silloin kun <acronym title="Cascading Style Sheets">CSS</acronym>-koodi on t�ysin validia, ja t�m� k�y raivostuttavaksi, kun yhden ongelman korjaus johtaa siihen, ett� jotain muuta menee rikki. Katso <a href="http://www.mezzoblue.com/zengarden/resources/" title="Luettelo CSS:��n liittyvist� aineistoista"><acronym title="Cascading Style Sheets">CSS</acronym>-aineistoja</a>-sivulta tietoja muutamista korjauskeinoista, joita voi k�ytt��. T�ydellinen yhteensopivuus selainten kanssa on joskus yh� toiveuni, emmek� odota, ett� saat aikaan koodia, joka toimii pikselintarkasti jokaisessa k�ytt�ymp�rist�ss�. Mutta testaa niin monissa ymp�rist�iss� kuin voit. Jos muotoilusi ei toimi v�hint��n IE:n versiolla 5 ja uudemmilla ja Mozillalla (joita k�ytt�� yli 90�% k�ytt�jist�), on todenn�k�ist�, ettemme hyv�ksy sit�.</span></p> 
                        <p class="p3"><span>Pyyd�mme, ett� l�het�t itse tekemi�si taideteoksia. Kunnioita tekij�noikeuslakeja. Pid� kyseenalainen aineisto minimiss��n; hyv�n maun mukainen alastomuus on hyv�ksytt�v��, avoin pornografia hyl�t��n.</span></p>
                        <p class="p4"><span>T�m� on opettavaista harjoittelua samalla kun se on havainnollistamista. S�ilyt�t t�yden tekij�noikeuden kuviisi, mutta pyyd�mme sinua antamaan <acronym title="Cascading Style Sheets">CSS</acronym>-koodisi k�ytt��n Luovan yhteisk�yt�n ehdoilla (<span lang="en">Creative Commons license</span>), jotka ovat samat kuin <a href="http://creativecommons.org/licenses/sa/1.0/" title="Tietoa Zen Gardenin k�ytt�ehdoista.">t�m�n sivuston k�ytt�ehdot</a> N�in muut voivat oppia ty�st�si.</span></p>
                        <p class="p5"><span>Kaistanleveyden on yst�v�llisesti lahjoittanut <a href="http://www.mediatemple.net/" lang="en">mediatemple</a>.</span>�</p>
                </div>

                <div id="footer">
                        <a href="http://validator.w3.org/check/referer" title="Tarkista t�m�n sivuston XHTML:n validisuus">xhtml</a> � 
                        <a href="http://jigsaw.w3.org/css-validator/check/referer" title="Tarkista t�m�n sivuston CSS:n validisuus">css</a> � 
                        <a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="T�m�n sivuston k�ytt�ehtojen yksityiskohdat, Creative Commonsin suosiollisella luvalla.">cc</a> �
                        <a href="http://www.mezzoblue.com/zengarden/faq/#s508" title="Tarkista t�m�n sivuston esteett�myys Yhdysvaltain Section 508 -s��nt�jen mukaan">508</a> �
                        <a href="http://www.mezzoblue.com/zengarden/faq/#aaa" title="Tarkista t�m�n sivuston esteett�myys WAI Content Accessibility Guidelines 1 -ohjeiden mukaan">aaa</a>
                </div>

        </div>


	
	<div id="linkList">
		<div id="linkList2">
			<div id="lselect">
				<h3 class="select"><span>Valitse muotoilu:</span></h3>
				<ul>
<?php
					$c = 0;
					for ($a = ($listStart + 1); $a <= $listEnd; $a++) {
						$b = $listEnd - $c;
						$d = $letterarray[$c];
						$tempLink = linkMe($filename[$b]);
						echo "\t\t\t\t\t";
						echo "<li><a href=\"?cssfile=/${tempLink}/${tempLink}.css&amp;page=${thisPage}\" title=\"N�pp�inoikotie: ${d}\" accesskey=\"${d}\">${styleName[$b]}</a> tekij� <a href=\"${styleURL[$b]}\" class=\"c\">${styleCreator[$b]}</a></li>";
						echo "\n";
						$c = $c + 1;
					}
?>
				</ul>
			</div>

			<div id="larchives">
				<h3 class="archives"><span>Arkistot:</span></h3>
				<ul>
<?php
					
					$forward = $thisPage + 1;
					$backward = $thisPage - 1;
					
					if ($listStart >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"${thisFile}?cssfile=${currentDesign}&amp;page=${forward}\" title=\"Seuraava muotoilujen joukko. N�pp�inoikotie: n\" accesskey=\"n\">Seuraavat muotoilut &raquo;</a></li>\n";
					}

					if ($thisPage >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"View previous set of designs. AccessKey: p\" accesskey=\"p\">&laquo; <span class=\"accesskey\">p</span>revious designs</a></li>\n";
					}
?>
                                        <li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="Kaikki Zen Gardeniin otetut muotoilut. N�pp�inoikotie: w" accesskey="w">Kaikki muotoilut</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>Tietol�hteit�:</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"${currentDesign}\" title=\"Katso sen muotoilun CSS-koodi, jota juuri olet katsomassa. N�pp�inoikotie: v\" accesskey=\"v\">T�m�n muotoilun <acronym title=\"Cascading Style Sheets\">CSS</acronym></a></li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources/" title="Linkkej� hyviin sivustoihin, joissa on tietoa CSS:n k�yt�st�. N�pp�inoikotie: r" accesskey="r"><acronym title="Cascading Style Sheets">CSS</acronym>-aineistoja</a></li>
                                        <li><a href="http://www.mezzoblue.com/zengarden/faq/" title="Zen Gardenin usein esitettyjen kysymysten lista. N�pp�inoikotie: q" accesskey="q">Usein kysytty�</a></li>

                                        <li><a href="http://www.mezzoblue.com/zengarden/submit/" title="L�het� oma CSS-tiedostosi. N�pp�inoikotie: s" accesskey="s">L�het� muotoilu</a></li>
                                        <li><a href="http://www.mezzoblue.com/zengarden/translations/" title="T�m�n sivun k��nn�kset. N�pp�inoikotie: t" accesskey="t">K��nn�kset</a></li>
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