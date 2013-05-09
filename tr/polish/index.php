<?php

include '../../includes/masterlist.php';
$letterarray = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-2" />
	<meta name="author" content="Dave Shea" />
    <meta name="description" content="Prezentacja mo�liwo�ci projektowania z wykorzystaniem CSS.">
	<meta name="description" content="A demonstration of what can be accomplished visually through CSS-based design." />
	<meta name="robots" content="all" />
    <meta name="translation" content="Polish, Pawel Bober">

	<title>css Zen Garden: Pi�kno projektowania za pomoc� CSS</title>

	<!-- aby poprawi� niewidziany Flash niezdefiniowanej zawarto�ci. http://www.bluerobot.com/web/css/fouc.asp -->
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


	Ten dokument xhtml jest przepe�niony tagami aby zapewni� designerowi maksimum elastyczno�ci.
	Jest tu wi�cej klas i dodatkowych tag�w ni� potrzeba, co w rzeczywisto�ci mo�e by� bardziej 
	prawdopodobne ni� by si� mog�o wydawa�.
	
	Jednak�e my�l� �e wszyscy si� zgodzimy z tym, �e nawet tak zbudowana strona jest lepsza ni� zbudowana
	z pomoc� tabelek.


-->


<body id="css-zen-garden">

<div id="container">
	<div id="intro">
		<div id="pageHeader">
			<h1><span>css Zen Garden</span></h1>
			<h2><span>Pi�kno projektowania za pomoc� <acronym title="Cascading Style Sheets">CSS</acronym></span></h2>
		</div>

		<div id="quickSummary">
			<p class="p1"><span>Oto prezentacja mo�liwo�ci projektowania z wykorzystaniem <acronym title="Cascading Style Sheets">CSS</acronym>. Wybierz arkusz stylu z listy aby za�adowa� go do tej strony.</span></p>
			<p class="p2"><span>Pobierz przyk�adowe pliki <a href="zengarden-sample.html" title="Kod HTML strony, nie modyfikowa�.">html</a> i <a href="zengarden-sample.css" title="Przyk�adowy kod CSS, mo�na zmienia�.">css</a></span></p>
		</div>

		<div id="preamble">
			<h3><span>Droga do O�wiecenia.</span></h3>
			<p class="p1"><span>Za�miecanie ciemnej i ponurej drogi le�y w przesz�ych reliktach w�a�ciwych dla przegl�darek tag�w, niekompatybilnych <acronym title="Document Object Model">DOM</acronym>�w i niepe�nego wsparcia dla <acronym title="Cascading Style Sheets">CSS</acronym>.</span></p>
			<p class="p2"><span>Dzi� musimy oczy�ci� umys�y z tych przesz�ych praktyk. O�wiecenie sieci sta�o si� faktem dzi�ki niestrudzonym wysi�kom ludzi z ><acronym title="World Wide Web Consortium">W3C</acronym>, <acronym title="Web Standards Project">WaSP</acronym> czy tw�rcom g��wnych przegl�darek internetowych.</span></p>
			<p class="p3"><span>Ogr�d css Zen zach�ca do chwili relaksu i zadumy nad wa�nymi lekcjami mistrz�w. Patrz z jasno�ci�. Naucz si� korzysta� z og�lnie uznanych (albo ju� nied�ugo) technik w nowym i o�ywczym stylu. Zjednocz si� z sieci�</span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="explanation">
			<h3><span>O co w tym chodzi?</span></h3>
			<p class="p1"><span>Z pewno�ci� istnieje potrzeba aby <acronym title="Cascading Style Sheets">CSS</acronym> zosta�
            traktowany powa�nie przez artyst�w grafik�w. Ogr�d Zen istnieje by ekscytowa�, inspirowa� i zach�ca� do udzia�u w tym przedsi�wzi�ciu. Na pocz�tek przejrzyj istniej�ce ju� wystroje z listy na stronie. Klikaj�c za�adujesz arkusz stylu we w�a�nie t� stron�. Kod pozostanie ten sam, jedyne co si� zmieni to zewn�trzny arkusz z plikiem .css. Tak, naprawd�.</span></p>
			<p class="p2"><span><acronym title="Cascading Style Sheets">CSS</acronym> pozwala na ca�kowit� kontrol� nad stylem i dokumentem hipertekstowym. Jedynym sposobem na zilustrowanie tego tak by podekscytowa� ludzi jest demonstracja jakim <acronym title="Cascading Style Sheets">CSS</acronym> jest naprawd� , pa�eczka jest w r�kach tych - zdolnych zmieni� struktur� w prawdziwe pi�kno. Do dzi� wi�kszo�� przyk�ad�w zgrabnych trik�w i haczk�w zosta�o
            zademnonstrowane przez strukturyst�w i koder�w. Projektanci tak�e powinni zaistnie�. To si� musi wreszcie zmieni�.</span></p>
		</div>

		<div id="participation">
			<h3><span>Uczestnictwo</span></h3>
			<p class="p1"><span>Tak, ale jedynie artyst�w grafik�w. Je�eli modyfikujesz t� stron� to potrzebne ci b�d� bardzo rozwini�te umiej�tno�ci operowania <acronym title="Cascading Style Sheets">CSS</acronym> jednak przyk�adowe pliki s� opatrzone komentarzem tak �e nawet nowicjusze mog� u�ywa� ich jako punkt�w wyj�ciowych. Zajrzyj do <A title="Lista zasob�w CSS" href="http://www.mezzoblue.com/zengarden/resources/">Przewodnika po zasobach <ACRONYM title="Cascading Style Sheets">CSS</ACRONYM></A> po
            zaawansowane tutoriale i triki przydatne do pracy z <acronym title="Cascading Style Sheets">CSS</acronym>.</span></p>
			<p class="p2"><span>Mo�esz modyfikowa� arkusz styl�w jak tylko chcesz ale nie sam <acronym title="HyperText Markup Language">HTML</acronym>. Z pocz�tku mo�e si� to wydawa� zniech�caj�ce zw�aszcza je�eli wcze�niej nigdy nie pracowa�e� w ten spos�b ale zajrzyj tylko to wymienionych link�w aby nauczy� si� czego� wi�cej i wykorzystaj przyk�adowe pliki jako przewodnik.</span></p>
			<p class="p3"><span>Pobierz przyk�adowe pliki <a href="zengarden-sample.html" title="Kod HTML strony, nie modyfikowa�.">html</a> i <a href="zengarden-sample.css" title="Przyk�adowy kod CSS, mo�na zmienia�.">css</a> do pracy na lokalnym dysku. Jak tylko uko�czysz swoje dzie�o sztuki (tylko prosze nie przesy�a� nie do ko�ca sko�cznych prac) wrzu� swoj plik .css na serwer gdzie posiadasz konto. Pode�lij nam link do pliku i je�eli zgodzimy si� go wykorzysta� podepniemy powi�zane z nim grafiki. <a href="http://www.mezzoblue.com/zengarden/sendfile.asp" title="U�yj formularza kontaktowego aby przes�a� sw�j plik CSS.">Pode�lij nam link</A> do pliku i je�eli zgodzimy si� go wykorzysta� podepniemy powi�zane z nim grafiki. Propozycje fina�owe umieszczone zostan� na naszym serwerze.</span></p>
			<p class="p4"><span>uaktualnienie: Szukam t�umaczy. Je�eli jeste� bieg�y w angielskim i innym j�zyku oto inny spos�b na zaanga�owanie si� w projekt. <a href="http://www.mezzoblue.com/contact/" title="Wy�lij nam e-mail wymieniaj�c j�zyki, w kt�rych jeste� bieg�y.">Prosz� o kontakt</a> w sprawie detali.</span></p>
		</div>

		<div id="benefits">
			<h3><span>Korzy�ci</span></h3>
			<p class="p1"><span>Po co uczestniczy� w projekcie? Dla uznania, inspiracji i zasob�w do kt�rych mo�emy si� wszyscy odwo�a� projektuj�c w <ACRONYM title="Cascading Style Sheets">CSS</ACRONYM>. Co� takiego jest ogromnie potrzebne, nawet dzi�. Coraz wi�cej powa�nych witryn poprawi�o si�, niestety nie wszystkie. Kiedy� ta galeria b�dzie historyczn� osobliwo�ci�; dzie� ten jednak jeszcze nie nadszed�.</span></p>
		</div>

		<div id="requirements">
			<h3><span>Wymagania</span></h3>
			<p class="p1"><span>Chcieliby�my ogl�da� tak wiele <acronym title="Cascading Style Sheets, version 1">CSS1</acronym> jak to tylko mo�liwe. <acronym title="Cascading Style Sheets, version 2">CSS2</acronym> 
            powinien by� ograniczany jedynie do element�w og�lnie obs�ugiwanych. Ogr�d Css Zen opiera si� na funkcjonalnym, praktycznym <acronym title="Cascading Style Sheets">CSS</acronym> a nie na najnowszych trikach, dost�pnych jedynie dla 2% u�ytkownik�w internetu. Jedynym powa�nym warunkiem jest by tw�j <acronym title="Cascading Style Sheets">CSS</acronym> spe�nia� standardy.</span></p>
			<p class="p2"><span>Niestety, projektuj�c w ten spos�b ods�aniamy skazy r�nych implementacji <acronym title="Cascading Style Sheets">CSS</acronym>. R�ne przegl�darki wy�wietlaj� ten sam <acronym title="Cascading Style Sheets">CSS</acronym> nawet spe�niaj�cy standardy w r�ny spos�b, co staje si� niezno�ne gdy jaka� poprawka prowadzi do powstania innego problemu. Zajrzyj na stron� z <a href="http://www.mezzoblue.com/zengarden/resources.asp" title="Lista zasob�w CSS">zasobami</a> gdzie znajdziesz informacje na temat poprawek. Zgodno�� ze wszystkimi przegl�darkami to wci�� marzenie �ci�tej g�owy i dlatego nie oczekujemy aby� tworzy� perfekcyjny co do piksela kod na wszystkie platformy. Ale PRZETEJSTUJ go na czym tylko mo�esz. Je�eli twoja praca nie b�dzie dzia�a�a na przynajmniej IE5+/Win i Mozilli (czyli u ponad 90% u�ytkownik�w) s� szanse �e nie zaakceptujemy jej.</span></p>
			<p class="p3"><span>Prosimy przesy�a� tylko oryginalne prace. Respektujcie prawa autorskie. Prosz� ograniczy� materia� wzbudzaj�cy obiekcje do minimum; pe�na smaku golizna zostanie przyj�ta, czysta pornografia b�dzie odrzucana.</span></p>
			<p class="p4"><span>To zar�wno �wiczenie do nauki jak i demonstracja. Zachowacie prawa autorskie do swoich grafik ale prosimy o wypuszczanie swojego <ACRONYM title="Cascading Style Sheets">CSS</ACRONYM> z licencja Creative Commons identycz� <a href="http://creativecommons.org/licenses/sa/1.0/" title="Poka� informacje o licencji Zen Garden.">jak tej strony</a> tak by inni mogli uczy� si� z twojej pracy.</span></p>
			<p class="p5"><span>Szeroko�� pasma �askawie darowana przez <a href="http://www.mediatemple.net/" lang="en">mediatemple</a></span></p>
		</div>

		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="Sprawd� poprawno�� XHTML">xhtml</a> &nbsp; 
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="Sprawd� poprawno�� CSS">css</a> &nbsp; 
			<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="Poka� detale licencji tej strony - Creative Commons.">cc</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&output=Submit&gl=sec508&test=" title="Sprawd� dost�pno�� tej strony w �wietle paragrafu 508 U.S">508</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&output=Submit&gl=wcag1-aaa&test=" title="Sprawd� dost�pno�� tej strony na podstawie WAI Content Accessibility Guidelines 1">aaa</a>
		</div>

	</div>

	
	<div id="linkList">
		<!--dodatkowy div dla elastyczno�ci - ta lista b�dzie zapewne najwi�kszym trikem jakim si� zajmiecie -->
		<div id="linkList2">

		<!-- Je�eli zastanawiacie si� nad dodatkowym &nbsp; na ko�cu linku, to sztuczka by spe�ni� stadardy WCAG 1 Accessibility. -->
		<!-- Nie lubi� tego ale, to ma by� �wiczenie wizualne. To kompromis. -->
			<div id="lselect">
				<h3 class="select"><span>Wybierz projekt:</span></h3>
				<ul>
<?php
					$c = 0;
					for ($a = ($listStart + 1); $a <= $listEnd; $a++) {
						$b = $listEnd - $c;
						$d = $letterarray[$c];
						$tempLink = linkMe($filename[$b]);
						echo "\t\t\t\t\t";
						echo "<li><a href=\"?cssfile=/${tempLink}/${tempLink}.css&amp;page=${thisPage}\" title=\"AccessKey: ${d}\" accesskey=\"${d}\">${styleName[$b]}</a> - <a href=\"${styleURL[$b]}\" class=\"c\">${styleCreator[$b]}</a></li>";
						echo "\n";
						$c = $c + 1;
					}
?>
				</ul>
			</div>

			<!--
				To si� nie poka�e dop�ki archiwa si� nie zape�ni�. Ale zaplanuj to. Je�eli strasznie
				pozmieniasz sekcj� 'select a design' h3, tak�e to bedziesz musia� dostosowa�.
			<div id="lfavorites">
				<h3 class="favorites"><span>Favorites:</span></h3>
				<ul>
					<li><a href="#">filename</a> by <a href="" class="c">submitter</a>&nbsp;</li>
					<li><a href="#">filename</a> by <a href="" class="c">submitter</a>&nbsp;</li>
				</ul>
			</div>
			-->

			<div id="larchives">
				<h3 class="archives"><span>Archiwa:</span></h3>
				<ul>
<?php
					
					$forward = $thisPage + 1;
					$backward = $thisPage - 1;
					
					if ($listStart >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"${thisFile}?cssfile=${currentDesign}&amp;page=${forward}\" title=\"Poka� nast�pny zestaw projekt�w. AccessKey: n\" accesskey=\"n\"><span class=\"accesskey\">n</span>ast�pne projekty &raquo;</a></li>\n";
					}

					if ($thisPage >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"Poka� poprzedni zestaw projekt�w. AccessKey: p\" accesskey=\"p\">&laquo; <span class=\"accesskey\">p</span>oprzednie projekty</a></li>\n";
					}
?>
					<li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="Poka� wszystkie projekty. AccessKey: w" accesskey="w">Poka� wszystkie projekty</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>Zasoby:</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"${currentDesign}\" title=\"Poka� plik �r�d�owy CSS obecnie ogl�danego projektu, AccessKey: v\" accesskey=\"v\">Poka� <acronym title=\"Cascading Style Sheets\">CSS</acronym> tego projektu.</a></li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources.asp" title="Linki do wspania�ych stron z informacjami o CSS. AccessKey: r" accesskey="r"><acronym title="Cascading Style Sheets">CSS</acronym> <span class="accesskey"></span>Zasoby</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/faq.asp" title="Lista cz�sto zadawanych pyta� (FAQ). AccessKey: q" accesskey="q"><acronym title="Frequently Asked Questions">FA<span class="accesskey">Q</span></acronym></a>&nbsp;</li>
					<li><a href="http://www.mezzoblue.com/zengarden/sendfile.asp" title="Prze�lij sw�j CSS. AccessKey: s" accesskey="s"><span class="accesskey"></span>Prze�lij projekt</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/translations/" title="Wy�wietl t�umaczenia strony. AccessKey: t" accesskey="t"><span class="accesskey">T</span>�umaczenia</a></li>
				</ul>
			</div>
		</div>
	</div>


</div>

<!-- Oto dodatkowe divy/spany mog� by� u�ywane do pod��czenia jakiej� symboliki (obrazk�w itp.). -->
<!-- Dodaj obrazek t�a do ka�dego i u�yj width i height aby kontrolowa� rozmiar, rozmie�� za pomoc� absolute positioning -->
<!-- Istnieje raczej chory bug przesuni�cia koloru transparentnych GIF�w w Netscape 6/7 i Mozilla v1.0 up to v1.3 (gdzie zosta� usuni�ty),
		a wiec przetestuj sw�j kod na tych przegl�darkach. -->
<div id="extraDiv1"><span></span></div><div id="extraDiv2"><span></span></div><div id="extraDiv3"><span></span></div>
<div id="extraDiv4"><span></span></div><div id="extraDiv5"><span></span></div><div id="extraDiv6"><span></span></div>

</body>
</html>