<?php

include '../../includes/masterlist.php';
$letterarray = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=windows-1250">
	<meta name="author" content="Dave Shea" />
	<meta name="keywords" content="design, css, kask�dov�, styl, styly, �ablona, �ablony, xhtml, grafick� design, w3c, webov� standarty, visu�ln�, zobrazen�">
	<meta name="description" content="Uk�zka �eho se d� vizu�ln� dos�hnout designem zalo�en�m na CSS.">
	<meta name="robots" content="all" />
	<title>css Zenov� zahrada: Kr�sa CSS designu</title>

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
			<h1><span>css Zenov� zahrada</span></h1>
			<h2><span>Kr�sa <acronym title="Cascading Style Sheets - �ablony kask�dov�ch styl�">CSS</acronym> designu</span></h2>
		</div>

		<div id="quickSummary">
			<p class="p1"><span>Uk�zka �eho se d� vizu�ln� dos�hnout designem zalo�en�m na <acronym title="Cascading Style Sheets - �ablony kask�dov�ch styl�">CSS</acronym>. Vyberte si jakoukoliv �ablonu stylu ze seznamu, kter� se m� nahr�t do t�to str�nky.</span></p>
			<p class="p2"><span>St�hn�te si uk�zkov� p��klad <a href="http://www.csszengarden.com/zengarden-sample.html" title="Zdrojov� HTML k�d t�to str�nky, nesm�te m�nit.">html souboru</a> a <a href="http://www.csszengarden.com/zengarden-sample.css" title="Uk�zkov� CSS soubor t�to str�nky, tento soubor m��ete m�nit.">css souboru</a></span></p>
		</div>

		<div id="preamble">
			<h3><span>Cesta k osv�t�</span></h3>
			<p class="p1"><span>Na tmav� a ponur� cest� le�� poh�zen� d��v�js� poz�statky prohl�e��-specifick� tagy, nekompatibiln� <acronym title="Document Object Model - Objektov� model dokumentu">DOM</acronym>y a �patn� podpora <acronym title="Cascading Style Sheets - �ablony kask�dov�ch styl�">CSS</acronym>.</span></p>
			<p class="p2"><span>Dnes si mus�me vy�istit mysl od t�chto postup�.Webov� osv�ta byla dosa�ena d�ky ne�navn�mu �sil� lid� z <acronym title="World Wide Web Consortium">W3C</acronym>, <acronym title="Web Standards Project">WaSP</acronym> a tv�rc� hlavn�ch prohl�e��.</span></p>
			<p class="p3"><span>Css Zenov� zahrada V�s zve k odpo�inku a p�em��len� o v�znamn�ch lekc�ch mistr�. Za�n�te se d�vat jasn�. Nau�te se pou��vat �asem uznan� (teprve budou) techniky v nov�m osv�uj�c�m stylu. Sply�te s webem.</span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="explanation">
			<h3><span>Tak o �em tohle je?</span></h3>
			<p class="p1"><span>Zcela z�ejm� je pot�eba, aby bylo <acronym title="Cascading Style Sheets - �ablony kask�dov�ch styl�">CSS</acronym> br�no grafiky v�n�. Zenov� zahrada se sna�� nadchnout, inspirovat a povzbuzovat spolu��ast. Pro za��tek si prohl�dn�te n�kter� z existuj�c�ch design� ze seznamu. Kliknut�m na kter�koliv se nahraje �ablona stylu pr�v� do t�to str�nky. K�d z�stane stejn�, jedin� v�c, kter� se zm�nila je extern� .css soubor. Ano, opravdu.</span></p>
			<p class="p2"><span><acronym title="Cascading Style Sheets - �ablony kask�dov�ch styl�">CSS</acronym> dovoluje kompletn� a �plnou kontrolu nad stylem hypertextov�ho dokumentu. Jedin� zp�sob, jak to m��eme ilustrovat tak, aby to nadchlo lidi, je demonstrace, �e to tak opravdu m��e b�t, kdy� jsou oprat� v rukou lid� schopn�ch vytvo�it kr�su ze struktury. Doposud byla v�t�ina p��klad� pohledn�ch trik� a vychyt�vek p�edv�d�na strukturisty a kod�ry. Design��i o sob� mus� st�le d�vat v�d�t. Toto je pot�eba zm�nit.</span></p>
		</div>

		<div id="participation">
			<h3><span>Spolu��ast</span></h3>
			<p class="p1"><span>Pouze pro grafiky, pros�m. Abyste mohli modifikovat tuto str�nku, je nezbytn� detailn� znalost <acronym title="Cascading Style Sheets - �ablony kask�dov�ch styl�">CSS</acronym>, ale vzorov� soubory jsou dostate�n� dob�e okomentovan�, aby je i nov��ek v <acronym title="Cascading Style Sheets - �ablony kask�dov�ch styl�">CSS</acronym> mohl pou��t jako startovn� bod. Pros�m, pod�vejte se na <a href="http://www.mezzoblue.com/zengarden/resources.asp" title="Seznam zdroj� souvisej�c�ch s CSS">zdrojovou p��ru�ku <acronym title="Cascading Style Sheets - �ablony kask�dov�ch styl�">CSS</acronym></a> pro pokro�il� procvi�ov�n� a tipy pro pr�ci s <acronym title="Cascading Style Sheets - �ablony kask�dov�ch styl�">CSS</acronym>.</span></p>
			<p class="p2"><span>M��ete modifikovat �ablonu stylu, jak chcete, ale ne <acronym title="HyperText Markup Language">HTML</acronym>. Zprvu to m��e vypadat znepokojiv�, pokud jste t�mto zp�sobem dosud nepracovali. Dr�te se odkaz� v seznamu, abyste se nau�ily v�c a pou��vejte vzorov� soubory jako n�vod.</span></p>
			<p class="p3"><span>St�hn�te si uk�zkov� p��klad <a href="http://www.csszengarden.com/zengarden-sample.html" title="Zdrojov� HTML k�d t�to str�nky, nesm�te m�nit.">html souboru</a> a <a href="http://www.csszengarden.com/zengarden-sample.css" title="Uk�zkov� CSS soubor t�to str�nky, tento soubor m��ete m�nit.">css souboru</a> kv�li pr�ci s lok�ln� kopi�. Jakmile jste dokon�ili Va�e veled�lo (a pros�m, neodevzd�vejte nap�l rozpracovanou pr�ci) nahrajte V� .css soubor na webov� server pod Va�� kontrolou. <a href="http://www.mezzoblue.com/zengarden/sendfile.asp" title="Pou�ijte kontaktn� formul�� k poslan� Va�eho CSS souboru">Po�lete n�m adresu</a> k souboru a kdy� se ho rozhodneme pou��t, p�ekop�rujeme si i p�ipojen� obr�zky. Kone�n� designy budou um�st�ny na na�em serveru.</span></p>
			<p class="p4"><span>posledn�: Hled�m p�ekladatele. Pokud jste schopni mluvit plynule v angli�tin� a jin�m jazyku, toto je jin� zp�sob, jak se zapojit do projektu. Pros�m <a href="http://www.mezzoblue.com/contact/" title="Po�lete mi e-mail a zmi�te se, v kter�ch jazic�ch jste dob��.">kontaktujte m�</a> kv�li detail�m. Do �e�tiny p�elo�il <a href="mailto:vaclav.macinka@post.cz">V�clav "MaTZ" Macinka</a>.</span></p>
		</div>

		<div id="benefits">
			<h3><span>P��nos</span></h3>
			<p class="p1"><span>Pro� se ��astnit? Pro pozn�n�, inspiraci a zdroj, kam se m��eme v�ichni pod�vat, kdy� budeme d�lat design zalo�en� na <acronym title="Cascading Style Sheets - �ablony kask�dov�ch styl�">CSS</acronym>. Tohle je velice pot�eba, dokonce i dnes. V�c a v�c v�znamn�ch web� d�l� pokroky, ale st�le jich nen� dost. Jednoho dne bude tato galerie historick� kuriozita, ale ten den je�t� nenastal.</span></p>
		</div>

		<div id="requirements">
			<h3><span>Po�adavky</span></h3>
			<p class="p1"><span>R�di bychom vid�li tolik <acronym title="Cascading Style Sheets - �ablony kask�dov�ch styl�, verze 1">CSS1</acronym>, kolik je mo�n�. <acronym title="Cascading Style Sheets - �ablony kask�dov�ch styl�, verze 2">CSS2</acronym> by m�lo b�t omezeno jen na �iroce podporovan� prvky. Css Zenov� zahrada je o funk�n�ch, praktick�ch <acronym title="Cascading Style Sheets - �ablony kask�dov�ch styl�">CSS</acronym> a ne o posledn�ch strhuj�c�ch tric�ch, kter� uvid� 2% brouzdaj�c� ve�ejnosti. Jedin� skute�n� po�adavek, kter� m�me, je takov�, �e Va�e <acronym title="Cascading Style Sheets - �ablony kask�dov�ch styl�">CSS</acronym> mus� b�t uznan� platn�m.</span></p>
			<p class="p2"><span>Nane�t�st� takov�to designov�n� poukazuje na nedostatky v r�zn�ch implementac�ch <acronym title="Cascading Style Sheets - �ablony kask�dov�ch styl�">CSS</acronym>. Rozd�ln� prohl�e�e n�kdy zobrazuj� odli�n� dokonce i kompletn� uznan� <acronym title="Cascading Style Sheets - �ablony kask�dov�ch styl�">CSS</acronym> a pak se st�v� nesnesiteln�, kdy� oprava pro jeden vede k po�kozen� ve druh�m. Nahl�dn�te na <a href="http://www.mezzoblue.com/zengarden/resources.asp" title="Seznam zdroj� souvisej�c�ch s CSS">str�nky zdroj�</a> pro informace o n�kter�ch dostupn�ch �e�en�. Pln� vyhov�n� prohl�e�i je n�kdy st�le fantazie a my od V�s neo�ek�v�me, �e p�ijdete s perfektn�m na pixel p�esn�m k�dem na ka�d� platform�. Ale testujte, co nejv�c m��ete. Pokud V� design nefunguje alespo� v IE5+/Win a Mozille (pou��v� p�es 90% populace), vyhl�dka je takov�, �e ho nep�ijmeme.</span></p>
			<p class="p3"><span>��d�me od V�s, abyste odevzdali Va�e origin�ln� grafick� zpracov�n� (obr�zky). Pros�m, respektujte autorsk� pr�va. Pros�m, udr�ujte nep�ijateln� materi�l na minimu, vkusn� nahota je p��pustn�, otev�en� pornografie bude odm�tnuta.</span></p>
			<p class="p4"><span>Toto je uk�zkov� p��klad ke studiu jako�to i demonstrace. Autorsk� pr�va na Va�i grafiku V�m cel� z�stanou, ale pros�me V�s, abyste zve�ejnili Va�e <acronym title="Cascading Style Sheets - �ablony kask�dov�ch styl�">CSS</acronym> pod licenc� Creative Commons identickou s tou na <a href="http://creativecommons.org/licenses/sa/1.0/" title="Zobraz� licen�n� informace o Zenov� zahrad�.">tomto webu</a>, aby se i ostatn� mohli u�it z Va�� pr�ce.</span></p>
			<p class="p5"><span>P�ipojen� laskav� darovan� od <a href="http://www.mediatemple.net/">mediatemple</a></span></p>
		</div>

		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="Zkontrolovat platnost XHTML k�du t�to str�nky">xhtml</a> � 
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="Zkontrolovat platnost CSS k�du t�to str�nky">css</a> � 
			<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="Zobraz� detailn� licen�n� informace o Zenov� zahrad�.">cc</a> �
			<a href="http://mezzoblue.com/zengarden/faq/#s508" title="Zkontrolovat dostupnost t�to str�nky v souladu s U.S. Section 508">508</a> �
			<a href="http://www.mezzoblue.com/zengarden/faq/#aaa" title="Zkontrolovat dostupnost t�to str�nky v souladu s WAI Content Accessibility Guidelines 1">aaa</a>
		</div>

	</div>

	
	<div id="linkList">
		<div id="linkList2">
			<div id="lselect">
				<h3 class="select"><span>Vyberte design:</span></h3>
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
				<h3 class="archives"><span>Archivy:</span></h3>
				<ul>
<?php
					
					$forward = $thisPage + 1;
					$backward = $thisPage - 1;
					
					if ($listStart >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"${thisFile}?cssfile=${currentDesign}&amp;page=${forward}\" title=\"Zobraz dal�� sadu design�. Kl�vesa: l\" accesskey=\"l\">Da<span class=\"accesskey\">l</span>�� designy &raquo;</a></li>\n";
					}

					if ($thisPage >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"Zobraz p�edchoz� sadu design�. Kl�vesa: p\" accesskey=\"p\">&laquo; <span class=\"accesskey\">P</span>�edchoz� designy</a></li>\n";
					}
?>
					<li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="Zobraz v�echny designy na Zenov� zahrad�. Kl�vesa: v" accesskey="v">Uka� <span class=\"accesskey\">v</span>�echny designy</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>Zdroje:</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"${currentDesign}\" title=\"Uk�e zdrojov� soubor CSS tohoto designu. Kl�vesa: u\" accesskey=\"u\"><span class=\"accesskey\">U</span>ka� <acronym title=\"Cascading Style Sheets - �ablony kask�dov�ch styl�\">CSS</acronym> tohoto designu</a></li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources.asp" title="Odkazy na skv�l� weby s informacemi o pou�it� CSS. Kl�vesa: z" accesskey="z"><span class="accesskey">Z</span>droje <acronym title="Cascading Style Sheets - �ablony kask�dov�ch styl�">CSS</acronym></a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/faq.asp" title="Seznam �asto kladen�ch dotaz� o Zenov� zahrad�. AccessKey: q" accesskey="q"><acronym title="Frequently Asked Questions - �asto kladen� dotazy">FA<span class="accesskey">Q</span></acronym></a>�</li>
					<li><a href="http://www.mezzoblue.com/zengarden/sendfile.asp" title="Poslat m�j vlastn� CSS soubor. Kl�vesa: o" accesskey="o"><span class="accesskey">O</span>devzdat design </a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/translations/" title="Pod�vat se na p�elo�en� verze t�to str�nky. Kl�vesa: k" accesskey="k">P�e<span class="accesskey">k</span>lady</a></li>
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