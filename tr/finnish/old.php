<?php

include '../../includes/masterlist.php';
$letterarray = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fi" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Dave Shea" />
	<meta name="keywords" content="design, suunnittelu, ulkoasu, muotoilu, CSS, tyyliohje, tyyliohjeet, tyyli, tyylitiedostot, tyylilomakkeet, tyylisäännöt, tyylisäännöstöt, XHTML, graafinen suunnittelu, W3C, Web-standardit, visuaalinen, esitys" />
	 <meta name="description" content="Havaintoesitys siitä, mitä voidaan saavuttaa visuaalisesti CSS-pohjaisella suunnittelulla." />
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
                        <p class="p1"><span>Havaintoesitys siitä, mitä <acronym title="Cascading Style Sheets">CSS</acronym>-pohjaisella muotoilulla voidaan saavuttaa visuaalisesti. Valitse listasta jokin tyyliohje, niin näet tämän sivun sen mukaisessa ulkoasussa.</span></p>
                        <p class="p2"><span>Lataa esimerkin <a href="/zengarden-sample.html" title="Tämän sivun HTML-koodi, jota ei tule muuttaa.">HTML-tiedosto</a> ja <a href="/zengarden-sample.css" title="Tämän sivun esimerkkityyliohje, tiedosto, jota voit muuttaa.">CSS-tiedosto</a></span></p>
                </div>

                <div id="preamble">
                        <h3><span>Valaistumisen tie</span></h3>
                        <p class="p1"><span>Pimeän ja kolkon tien varrella lojuu roskia &#8211; selainriippuvien tägien, yhteensopimattomien <acronym title="Document Object Model">DOM</acronym>ien ja rikkinäisen  <acronym title="Cascading Style Sheets">CSS</acronym>-tuen jäännöksiä.</span></p>
                        <p class="p2"><span>Tänä päivänä meidän on puhdistettava mielemme menneistä käytännöistä. Webin valaistuminen on saavutettu sellaisten tahojen väsymättömien ponnistusten ansiosta kuin <acronym title="World Wide Web Consortium">W3C</acronym>, <acronym title="Web Standards Project">WaSP</acronym> ja johtavien selainten tekijät.</span></p>
                        <p class="p3"><span><span lang="en">Zen Garden</span> kutsuu sinut rentoutumaan ja mietiskelemään mestarien tärkeitä opetuksia. Suuntaudu näkemään kirkkaasti. Opettele käyttämään kunnioitettavia tekniikoita uudella ja elvyttävällä tavalla. Yhdisty Webin kanssa.</span></p>
                </div>
        </div>

        <div id="supportingText">
                <div id="explanation">
                        <h3><span>Mistä tässä siis on kyse?</span></h3>
                        <p class="p1"><span>On selvä tarve siihen, että graafikot ottavat <acronym title="Cascading Style Sheets">CSS</acronym>:n vakavasti. <span lang="en">Zen Garden</span> pyrkii yllyttämään, innostamaan ja rohkaisemaan osallistumista. Alkuun pääsemiseksi katso joitakin jo tehtyjä muotoiluja listasta. Kun napsautat jotain listan kohtaa, saat nähtäväksi tämän sivun sellaisena, miksi kyseinen tyyliohje sen tekee. Koodi pysyy samana; ainoa, mikä on muuttunut, on ulkoinen .css-tiedosto. Ihan totta.</span></p>

                        <p class="p2"><span><acronym title="Cascading Style Sheets">CSS</acronym> sallii hypertekstidokumentin tyylin täydellisen ja kattavan kontrollin. Ainoa tapa esittää tämä niin, että ihmiset innostuvat, on havainnollistaa, mitä se voi todella olla. Tätä varten on ohjakset saatava niiden käsiin, joilla on kyky luoda rakenteesta kauneutta. Nykyisin useimmat esimerkit kivoista nikseistä ja tempuista ovat strukturalistien ja koodaajien tekemiä havainnollistuksia. Graafikot eivät vielä ole kunnostautuneet. Tähän tarvitaan muutos.</span></p>
                </div>

                <div id="participation">
                        <h3><span>Osallistuminen</span></h3>
                        <p class="p1"><span>Muut kuin graafikot älkööt vaivautuko. Tulet muuttamaan tätä sivua, joten vahva  <acronym title="Cascading Style Sheets">CSS</acronym>:n osaaminen on välttämätöntä, mutta esimerkkitiedostot on kommentoitu tarpeeksi hyvin niin, että myös <acronym title="Cascading Style Sheets">CSS</acronym>-aloittelijat voivat käyttää niitä lähtökohtina. Katso <a lang="en" href="http://www.mezzoblue.com/zengarden/resources/" title="A listing of CSS-related resources"><acronym title="Cascading Style Sheets">CSS</acronym>-aineistoja</a> -sivulta pitemmälle meneviä ohjeita ja vihjeitä <acronym title="Cascading Style Sheets">CSS</acronym>:n käytöstä.</span></p>
                        <p class="p2"><span>Saat muokata tyyliohjetta miten haluat, mutta et <acronym title="HyperText Markup Language">HTML</acronym>-tiedostoa. Tämä voi tuntua aluksi pelottavalta, jos et ole koskaan aiemmin työskennellyt tällä tavoin, mutta seuraa linkkejä, niin opit lisää, ja käytä esimerkkitiedostoja tiennäyttäjinä.</span></p>
                        <p class="p3"><span>Lataa esimerkkinä oleva <a href="/zengarden-sample.html" title="Tämän sivun HTML-lähdekoodi, jota ei saa muuttaa.">.html-tiedosto</a> ja <a href="/zengarden-sample.css" title="Tämän sivun esimerkkinä oleva CSS-koodi, tiedosto, jota voit muokata.">.css-tiedosto</a>, jotta voit käsitellä sivun kopiota paikallisesti. Kun olet saanut mestariteoksesi valmiiksi &#8211; pyydämme, ettet lähetä puolivalmista &#8211; kopioi .css-tiedostosi Web-palvelimeen, joka on käytettävissäsi. <a href="http://www.mezzoblue.com/zengarden/submit/" title="Käytä yhteydenottolomaketta lähettääksesi meille CSS-tiedostosi">Lähetä meille tiedoston osoite</a>. Jos päätämme käyttää sitä, niin haemme siihen liittyvät kuvat. Lopulliset ehdotukset sijoitetaan meidän palvelimeemme.</span></p>
                        <p class="p4"><span>Täydennys: Etsin kääntäjiä. Jos osaat sujuvasti englantia ja jotakin muuta kieltä, niin tämä on toinen tapa tulle mukaan hankkeeseen. <a href="http://www.mezzoblue.com/contact/" title="Lähetä minulle sähköpostia, mainiten, mitä kieliä hallitset.">Ota minuun yhteyttä</a> yksityiskohtien selvittämiseksi. Saatavilla on jo tehtyjä <a href="http://www.mezzoblue.com/zengarden/translations/"> käännöksiä</a>. Tämän suomennoksen on tehnyt <a href="http://www.cs.tut.fi/%7Ejkorpela/henkkoht.html">Jukka K. Korpela.</a></span></p>
                </div>

                <div id="benefits">
                        <h3><span>Hyödyt</span></h3>
                        <p class="p1"><span>Miksi osallistuisit? Tunnustuksen saamiseksi, innoituksen takia ja luodaksemme sellaisen aineiston, johon kaikki voimme viitata, kun puhumme  <acronym title="Cascading Style Sheets">CSS</acronym>-pohjaisen muotoilun puolesta. Tätä tarvitaan kipeästi, tänäänkin. Yhä useammat isot sivustot ovat loikkaamassa eteenpäin, mutta tarpeeksi monet eivät ole vielä loikanneet. Jonakin päivänä tämä galleria tulee olemaan historiallinen kuriositeetti; mutta se päivä ei vielä ole koittanut.</span></p>
                </div>

                <div id="requirements">
                        <h3><span>Vaatimukset</span></h3>
                        <p class="p1"><span>Haluaisimme nähdä mahdollisimman paljon <acronym title="Cascading Style Sheets, version 1">CSS1</acronym>:tä. <acronym title="Cascading Style Sheets, version 2">CSS2</acronym>:n käyttö tulisi rajoittaa laajasti tuettuihin piirteisiin. <span lang="en">Zen Garden</span>issa on kyse toimivasta, käytännöllisestä <acronym title="Cascading Style Sheets">CSS</acronym>:stä eikä uusimmista avantgardistisista tempuista, jotka näkyvät 2 %:lle sivuja katsovaa yleisöä. Ainoa todellinen vaatimus, joka meillä on, on se, että <acronym title="Cascading Style Sheets">CSS</acronym>-koodisi validoituu.</span></p>
                        <p class="p2"><span>Tällainen suunnittelu valitettavasti korostaa <acronym title="Cascading Style Sheets">CSS</acronym>:n erilaisten toteutusten puutteita. Eri selaimet esittävät sivuja eri tavoin, ajoittain jopa silloin kun <acronym title="Cascading Style Sheets">CSS</acronym>-koodi on täysin validia, ja tämä käy raivostuttavaksi, kun yhden ongelman korjaus johtaa siihen, että jotain muuta menee rikki. Katso <a href="http://www.mezzoblue.com/zengarden/resources/" title="Luettelo CSS:ään liittyvistä aineistoista"><acronym title="Cascading Style Sheets">CSS</acronym>-aineistoja</a>-sivulta tietoja muutamista korjauskeinoista, joita voi käyttää. Täydellinen yhteensopivuus selainten kanssa on joskus yhä toiveuni, emmekä odota, että saat aikaan koodia, joka toimii pikselintarkasti jokaisessa käyttöympäristössä. Mutta testaa niin monissa ympäristöissä kuin voit. Jos muotoilusi ei toimi vähintään IE:n versiolla 5 ja uudemmilla ja Mozillalla (joita käyttää yli 90 % käyttäjistä), on todennäköistä, ettemme hyväksy sitä.</span></p> 
                        <p class="p3"><span>Pyydämme, että lähetät itse tekemiäsi taideteoksia. Kunnioita tekijänoikeuslakeja. Pidä kyseenalainen aineisto minimissään; hyvän maun mukainen alastomuus on hyväksyttävää, avoin pornografia hylätään.</span></p>
                        <p class="p4"><span>Tämä on opettavaista harjoittelua samalla kun se on havainnollistamista. Säilytät täyden tekijänoikeuden kuviisi, mutta pyydämme sinua antamaan <acronym title="Cascading Style Sheets">CSS</acronym>-koodisi käyttöön Luovan yhteiskäytön ehdoilla (<span lang="en">Creative Commons license</span>), jotka ovat samat kuin <a href="http://creativecommons.org/licenses/sa/1.0/" title="Tietoa Zen Gardenin käyttöehdoista.">tämän sivuston käyttöehdot</a> Näin muut voivat oppia työstäsi.</span></p>
                        <p class="p5"><span>Kaistanleveyden on ystävällisesti lahjoittanut <a href="http://www.mediatemple.net/" lang="en">mediatemple</a>.</span> </p>
                </div>

                <div id="footer">
                        <a href="http://validator.w3.org/check/referer" title="Tarkista tämän sivuston XHTML:n validisuus">xhtml</a>   
                        <a href="http://jigsaw.w3.org/css-validator/check/referer" title="Tarkista tämän sivuston CSS:n validisuus">css</a>   
                        <a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="Tämän sivuston käyttöehtojen yksityiskohdat, Creative Commonsin suosiollisella luvalla.">cc</a>  
                        <a href="http://www.mezzoblue.com/zengarden/faq/#s508" title="Tarkista tämän sivuston esteettömyys Yhdysvaltain Section 508 -sääntöjen mukaan">508</a>  
                        <a href="http://www.mezzoblue.com/zengarden/faq/#aaa" title="Tarkista tämän sivuston esteettömyys WAI Content Accessibility Guidelines 1 -ohjeiden mukaan">aaa</a>
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
						echo "<li><a href=\"?cssfile=/${tempLink}/${tempLink}.css&amp;page=${thisPage}\" title=\"Näppäinoikotie: ${d}\" accesskey=\"${d}\">${styleName[$b]}</a> tekijä <a href=\"${styleURL[$b]}\" class=\"c\">${styleCreator[$b]}</a></li>";
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
						echo "<li><a href=\"${thisFile}?cssfile=${currentDesign}&amp;page=${forward}\" title=\"Seuraava muotoilujen joukko. Näppäinoikotie: n\" accesskey=\"n\">Seuraavat muotoilut &raquo;</a></li>\n";
					}

					if ($thisPage >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"View previous set of designs. AccessKey: p\" accesskey=\"p\">&laquo; <span class=\"accesskey\">p</span>revious designs</a></li>\n";
					}
?>
                                        <li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="Kaikki Zen Gardeniin otetut muotoilut. Näppäinoikotie: w" accesskey="w">Kaikki muotoilut</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>Tietolähteitä:</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"${currentDesign}\" title=\"Katso sen muotoilun CSS-koodi, jota juuri olet katsomassa. Näppäinoikotie: v\" accesskey=\"v\">Tämän muotoilun <acronym title=\"Cascading Style Sheets\">CSS</acronym></a></li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources/" title="Linkkejä hyviin sivustoihin, joissa on tietoa CSS:n käytöstä. Näppäinoikotie: r" accesskey="r"><acronym title="Cascading Style Sheets">CSS</acronym>-aineistoja</a></li>
                                        <li><a href="http://www.mezzoblue.com/zengarden/faq/" title="Zen Gardenin usein esitettyjen kysymysten lista. Näppäinoikotie: q" accesskey="q">Usein kysyttyä</a></li>

                                        <li><a href="http://www.mezzoblue.com/zengarden/submit/" title="Lähetä oma CSS-tiedostosi. Näppäinoikotie: s" accesskey="s">Lähetä muotoilu</a></li>
                                        <li><a href="http://www.mezzoblue.com/zengarden/translations/" title="Tämän sivun käännökset. Näppäinoikotie: t" accesskey="t">Käännökset</a></li>
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