<?php

include '../../includes/masterlist.php';
$letterarray = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=windows-1250">
	<meta name="author" content="Dave Shea" />
	<meta name="keywords" content="design, css, kaskádové, styl, styly, šablona, šablony, xhtml, grafický design, w3c, webové standarty, visuální, zobrazení">
	<meta name="description" content="Ukázka čeho se dá vizuálně dosáhnout designem založeném na CSS.">
	<meta name="robots" content="all" />
	<title>css Zenová zahrada: Krása CSS designu</title>

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
			<h1><span>css Zenová zahrada</span></h1>
			<h2><span>Krása <acronym title="Cascading Style Sheets - Šablony kaskádových stylů">CSS</acronym> designu</span></h2>
		</div>

		<div id="quickSummary">
			<p class="p1"><span>Ukázka čeho se dá vizuálně dosáhnout designem založeném na <acronym title="Cascading Style Sheets - Šablony kaskádových stylů">CSS</acronym>. Vyberte si jakoukoliv šablonu stylu ze seznamu, která se má nahrát do této stránky.</span></p>
			<p class="p2"><span>Stáhněte si ukázkový příklad <a href="http://www.csszengarden.com/zengarden-sample.html" title="Zdrojový HTML kód této stránky, nesmíte měnit.">html souboru</a> a <a href="http://www.csszengarden.com/zengarden-sample.css" title="Ukázkový CSS soubor této stránky, tento soubor můžete měnit.">css souboru</a></span></p>
		</div>

		<div id="preamble">
			<h3><span>Cesta k osvětě</span></h3>
			<p class="p1"><span>Na tmavé a ponuré cestě leží poházené dřívějsí pozůstatky prohlížečů-specifické tagy, nekompatibilní <acronym title="Document Object Model - Objektový model dokumentu">DOM</acronym>y a špatná podpora <acronym title="Cascading Style Sheets - Šablony kaskádových stylů">CSS</acronym>.</span></p>
			<p class="p2"><span>Dnes si musíme vyčistit mysl od těchto postupů.Webová osvěta byla dosažena díky neúnavnému úsilí lidí z <acronym title="World Wide Web Consortium">W3C</acronym>, <acronym title="Web Standards Project">WaSP</acronym> a tvůrců hlavních prohlížečů.</span></p>
			<p class="p3"><span>Css Zenová zahrada Vás zve k odpočinku a přemýšlení o významných lekcích mistrů. Začněte se dívat jasně. Naučte se používat časem uznané (teprve budou) techniky v novém osvěžujícím stylu. Splyňte s webem.</span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="explanation">
			<h3><span>Tak o čem tohle je?</span></h3>
			<p class="p1"><span>Zcela zřejmě je potřeba, aby bylo <acronym title="Cascading Style Sheets - Šablony kaskádových stylů">CSS</acronym> bráno grafiky vážně. Zenová zahrada se snaží nadchnout, inspirovat a povzbuzovat spoluúčast. Pro začátek si prohlédněte některé z existujících designů ze seznamu. Kliknutím na kterýkoliv se nahraje šablona stylu právě do této stránky. Kód zůstane stejný, jediná věc, která se změnila je externí .css soubor. Ano, opravdu.</span></p>
			<p class="p2"><span><acronym title="Cascading Style Sheets - Šablony kaskádových stylů">CSS</acronym> dovoluje kompletní a úplnou kontrolu nad stylem hypertextového dokumentu. Jediný způsob, jak to můžeme ilustrovat tak, aby to nadchlo lidi, je demonstrace, že to tak opravdu může být, když jsou opratě v rukou lidí schopných vytvořit krásu ze struktury. Doposud byla většina příkladů pohledných triků a vychytávek předváděna strukturisty a kodéry. Designéři o sobě musí stále dávat vědět. Toto je potřeba změnit.</span></p>
		</div>

		<div id="participation">
			<h3><span>Spoluúčast</span></h3>
			<p class="p1"><span>Pouze pro grafiky, prosím. Abyste mohli modifikovat tuto stránku, je nezbytná detailní znalost <acronym title="Cascading Style Sheets - Šablony kaskádových stylů">CSS</acronym>, ale vzorové soubory jsou dostatečně dobře okomentované, aby je i nováček v <acronym title="Cascading Style Sheets - Šablony kaskádových stylů">CSS</acronym> mohl použít jako startovní bod. Prosím, podívejte se na <a href="http://www.mezzoblue.com/zengarden/resources.asp" title="Seznam zdrojů souvisejících s CSS">zdrojovou příručku <acronym title="Cascading Style Sheets - Šablony kaskádových stylů">CSS</acronym></a> pro pokročilé procvičování a tipy pro práci s <acronym title="Cascading Style Sheets - Šablony kaskádových stylů">CSS</acronym>.</span></p>
			<p class="p2"><span>Můžete modifikovat šablonu stylu, jak chcete, ale ne <acronym title="HyperText Markup Language">HTML</acronym>. Zprvu to může vypadat znepokojivě, pokud jste tímto způsobem dosud nepracovali. Držte se odkazů v seznamu, abyste se naučily víc a používejte vzorové soubory jako návod.</span></p>
			<p class="p3"><span>Stáhněte si ukázkový příklad <a href="http://www.csszengarden.com/zengarden-sample.html" title="Zdrojový HTML kód této stránky, nesmíte měnit.">html souboru</a> a <a href="http://www.csszengarden.com/zengarden-sample.css" title="Ukázkový CSS soubor této stránky, tento soubor můžete měnit.">css souboru</a> kvůli práci s lokální kopií. Jakmile jste dokončili Vaše veledílo (a prosím, neodevzdávejte napůl rozpracovanou práci) nahrajte Váš .css soubor na webový server pod Vaší kontrolou. <a href="http://www.mezzoblue.com/zengarden/sendfile.asp" title="Použijte kontaktní formulář k poslaní Vašeho CSS souboru">Pošlete nám adresu</a> k souboru a když se ho rozhodneme použít, překopírujeme si i připojené obrázky. Konečné designy budou umístěny na našem serveru.</span></p>
			<p class="p4"><span>poslední: Hledám překladatele. Pokud jste schopni mluvit plynule v angličtině a jiném jazyku, toto je jiný způsob, jak se zapojit do projektu. Prosím <a href="http://www.mezzoblue.com/contact/" title="Pošlete mi e-mail a zmiňte se, v kterých jazicích jste dobří.">kontaktujte mě</a> kvůli detailům. Do češtiny přeložil <a href="mailto:vaclav.macinka@post.cz">Václav "MaTZ" Macinka</a>.</span></p>
		</div>

		<div id="benefits">
			<h3><span>Přínos</span></h3>
			<p class="p1"><span>Proč se účastnit? Pro poznání, inspiraci a zdroj, kam se můžeme všichni podívat, když budeme dělat design založený na <acronym title="Cascading Style Sheets - Šablony kaskádových stylů">CSS</acronym>. Tohle je velice potřeba, dokonce i dnes. Víc a víc významných webů dělá pokroky, ale stále jich není dost. Jednoho dne bude tato galerie historická kuriozita, ale ten den ještě nenastal.</span></p>
		</div>

		<div id="requirements">
			<h3><span>Požadavky</span></h3>
			<p class="p1"><span>Rádi bychom viděli tolik <acronym title="Cascading Style Sheets - Šablony kaskádových stylů, verze 1">CSS1</acronym>, kolik je možné. <acronym title="Cascading Style Sheets - Šablony kaskádových stylů, verze 2">CSS2</acronym> by mělo být omezeno jen na široce podporované prvky. Css Zenová zahrada je o funkčních, praktických <acronym title="Cascading Style Sheets - Šablony kaskádových stylů">CSS</acronym> a ne o posledních strhujících tricích, které uvidí 2% brouzdající veřejnosti. Jediný skutečný požadavek, který máme, je takový, že Vaše <acronym title="Cascading Style Sheets - Šablony kaskádových stylů">CSS</acronym> musí být uznané platným.</span></p>
			<p class="p2"><span>Naneštěstí takovéto designování poukazuje na nedostatky v různých implementacích <acronym title="Cascading Style Sheets - Šablony kaskádových stylů">CSS</acronym>. Rozdílné prohlížeče někdy zobrazují odlišně dokonce i kompletně uznané <acronym title="Cascading Style Sheets - Šablony kaskádových stylů">CSS</acronym> a pak se stává nesnesitelné, když oprava pro jeden vede k poškození ve druhém. Nahlédněte na <a href="http://www.mezzoblue.com/zengarden/resources.asp" title="Seznam zdrojů souvisejících s CSS">stránky zdrojů</a> pro informace o některých dostupných řešení. Plné vyhovění prohlížeči je někdy stále fantazie a my od Vás neočekáváme, že přijdete s perfektním na pixel přesným kódem na každé platformě. Ale testujte, co nejvíc můžete. Pokud Váš design nefunguje alespoň v IE5+/Win a Mozille (používá přes 90% populace), vyhlídka je taková, že ho nepřijmeme.</span></p>
			<p class="p3"><span>Žádáme od Vás, abyste odevzdali Vaše originální grafické zpracování (obrázky). Prosím, respektujte autorská práva. Prosím, udržujte nepřijatelný materiál na minimu, vkusná nahota je přípustná, otevřená pornografie bude odmítnuta.</span></p>
			<p class="p4"><span>Toto je ukázkový příklad ke studiu jakožto i demonstrace. Autorská práva na Vaši grafiku Vám celá zůstanou, ale prosíme Vás, abyste zveřejnili Vaše <acronym title="Cascading Style Sheets - Šablony kaskádových stylů">CSS</acronym> pod licencí Creative Commons identickou s tou na <a href="http://creativecommons.org/licenses/sa/1.0/" title="Zobrazí licenční informace o Zenové zahradě.">tomto webu</a>, aby se i ostatní mohli učit z Vaší práce.</span></p>
			<p class="p5"><span>Připojení laskavě darované od <a href="http://www.mediatemple.net/">mediatemple</a></span></p>
		</div>

		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="Zkontrolovat platnost XHTML kódu této stránky">xhtml</a>   
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="Zkontrolovat platnost CSS kódu této stránky">css</a>   
			<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="Zobrazí detailní licenční informace o Zenové zahradě.">cc</a>  
			<a href="http://mezzoblue.com/zengarden/faq/#s508" title="Zkontrolovat dostupnost této stránky v souladu s U.S. Section 508">508</a>  
			<a href="http://www.mezzoblue.com/zengarden/faq/#aaa" title="Zkontrolovat dostupnost této stránky v souladu s WAI Content Accessibility Guidelines 1">aaa</a>
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
						echo "<li><a href=\"${thisFile}?cssfile=${currentDesign}&amp;page=${forward}\" title=\"Zobraz další sadu designů. Klávesa: l\" accesskey=\"l\">Da<span class=\"accesskey\">l</span>ší designy &raquo;</a></li>\n";
					}

					if ($thisPage >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"Zobraz předchozí sadu designů. Klávesa: p\" accesskey=\"p\">&laquo; <span class=\"accesskey\">P</span>ředchozí designy</a></li>\n";
					}
?>
					<li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="Zobraz všechny designy na Zenové zahradě. Klávesa: v" accesskey="v">Ukaž <span class=\"accesskey\">v</span>šechny designy</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>Zdroje:</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"${currentDesign}\" title=\"Ukáže zdrojový soubor CSS tohoto designu. Klávesa: u\" accesskey=\"u\"><span class=\"accesskey\">U</span>kaž <acronym title=\"Cascading Style Sheets - Šablony kaskádových stylů\">CSS</acronym> tohoto designu</a></li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources.asp" title="Odkazy na skvělé weby s informacemi o použití CSS. Klávesa: z" accesskey="z"><span class="accesskey">Z</span>droje <acronym title="Cascading Style Sheets - Šablony kaskádových stylů">CSS</acronym></a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/faq.asp" title="Seznam často kladených dotazů o Zenové zahradě. AccessKey: q" accesskey="q"><acronym title="Frequently Asked Questions - Často kladené dotazy">FA<span class="accesskey">Q</span></acronym></a> </li>
					<li><a href="http://www.mezzoblue.com/zengarden/sendfile.asp" title="Poslat můj vlastní CSS soubor. Klávesa: o" accesskey="o"><span class="accesskey">O</span>devzdat design </a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/translations/" title="Podívat se na přeložené verze této stránky. Klávesa: k" accesskey="k">Pře<span class="accesskey">k</span>lady</a></li>
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