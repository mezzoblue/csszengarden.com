<?php

include '../../includes/masterlist.php';
$letterarray = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-2" />
	<meta name="author" content="Dave Shea" />
    <meta name="description" content="Prezentacja możliwości projektowania z wykorzystaniem CSS.">
	<meta name="description" content="A demonstration of what can be accomplished visually through CSS-based design." />
	<meta name="robots" content="all" />
    <meta name="translation" content="Polish, Pawel Bober">

	<title>css Zen Garden: Piękno projektowania za pomocą CSS</title>

	<!-- aby poprawić niewidziany Flash niezdefiniowanej zawartości. http://www.bluerobot.com/web/css/fouc.asp -->
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
	<link rel="Shortcut Icon" type="image/x-icon" href="https://www.csszengarden.com/favicon.ico" />	
	<link rel="alternate" type="application/rss+xml" title="RSS" href="https://www.csszengarden.com/zengarden.xml" />
</head>

<!--


	Ten dokument xhtml jest przepełniony tagami aby zapewnić designerowi maksimum elastyczności.
	Jest tu więcej klas i dodatkowych tagów niż potrzeba, co w rzeczywistości może być bardziej 
	prawdopodobne niż by się mogło wydawać.
	
	Jednakże myślę że wszyscy się zgodzimy z tym, że nawet tak zbudowana strona jest lepsza niż zbudowana
	z pomocą tabelek.


-->


<body id="css-zen-garden">

<div id="container">
	<div id="intro">
		<div id="pageHeader">
			<h1><span>css Zen Garden</span></h1>
			<h2><span>Piękno projektowania za pomocą <acronym title="Cascading Style Sheets">CSS</acronym></span></h2>
		</div>

		<div id="quickSummary">
			<p class="p1"><span>Oto prezentacja możliwości projektowania z wykorzystaniem <acronym title="Cascading Style Sheets">CSS</acronym>. Wybierz arkusz stylu z listy aby załadować go do tej strony.</span></p>
			<p class="p2"><span>Pobierz przykładowe pliki <a href="zengarden-sample.html" title="Kod HTML strony, nie modyfikować.">html</a> i <a href="zengarden-sample.css" title="Przykładowy kod CSS, można zmieniać.">css</a></span></p>
		</div>

		<div id="preamble">
			<h3><span>Droga do Oświecenia.</span></h3>
			<p class="p1"><span>Zaśmiecanie ciemnej i ponurej drogi leży w przeszłych reliktach właściwych dla przeglądarek tagów, niekompatybilnych <acronym title="Document Object Model">DOM</acronym>ów i niepełnego wsparcia dla <acronym title="Cascading Style Sheets">CSS</acronym>.</span></p>
			<p class="p2"><span>Dziś musimy oczyścić umysły z tych przeszłych praktyk. Oświecenie sieci stało się faktem dzięki niestrudzonym wysiłkom ludzi z ><acronym title="World Wide Web Consortium">W3C</acronym>, <acronym title="Web Standards Project">WaSP</acronym> czy twórcom głównych przeglądarek internetowych.</span></p>
			<p class="p3"><span>Ogród css Zen zachęca do chwili relaksu i zadumy nad ważnymi lekcjami mistrzów. Patrz z jasnością. Naucz się korzystać z ogólnie uznanych (albo już niedługo) technik w nowym i ożywczym stylu. Zjednocz się z siecią</span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="explanation">
			<h3><span>O co w tym chodzi?</span></h3>
			<p class="p1"><span>Z pewnością istnieje potrzeba aby <acronym title="Cascading Style Sheets">CSS</acronym> został
            traktowany poważnie przez artystów grafików. Ogród Zen istnieje by ekscytować, inspirować i zachęcać do udziału w tym przedsięwzięciu. Na początek przejrzyj istniejące już wystroje z listy na stronie. Klikając załadujesz arkusz stylu we właśnie tą stronę. Kod pozostanie ten sam, jedyne co się zmieni to zewnętrzny arkusz z plikiem .css. Tak, naprawdę.</span></p>
			<p class="p2"><span><acronym title="Cascading Style Sheets">CSS</acronym> pozwala na całkowitą kontrolę nad stylem i dokumentem hipertekstowym. Jedynym sposobem na zilustrowanie tego tak by podekscytować ludzi jest demonstracja jakim <acronym title="Cascading Style Sheets">CSS</acronym> jest naprawdę , pałeczka jest w rękach tych - zdolnych zmienić strukturę w prawdziwe piękno. Do dziś większość przykładów zgrabnych trików i haczków zostało
            zademnonstrowane przez strukturystów i koderów. Projektanci także powinni zaistnieć. To się musi wreszcie zmienić.</span></p>
		</div>

		<div id="participation">
			<h3><span>Uczestnictwo</span></h3>
			<p class="p1"><span>Tak, ale jedynie artystów grafików. Jeżeli modyfikujesz tą stronę to potrzebne ci będą bardzo rozwinięte umiejętności operowania <acronym title="Cascading Style Sheets">CSS</acronym> jednak przykładowe pliki są opatrzone komentarzem tak że nawet nowicjusze mogą używać ich jako punktów wyjściowych. Zajrzyj do <A title="Lista zasobów CSS" href="http://www.mezzoblue.com/zengarden/resources/">Przewodnika po zasobach <ACRONYM title="Cascading Style Sheets">CSS</ACRONYM></A> po
            zaawansowane tutoriale i triki przydatne do pracy z <acronym title="Cascading Style Sheets">CSS</acronym>.</span></p>
			<p class="p2"><span>Możesz modyfikować arkusz stylów jak tylko chcesz ale nie sam <acronym title="HyperText Markup Language">HTML</acronym>. Z początku może się to wydawać zniechęcające zwłaszcza jeżeli wcześniej nigdy nie pracowałeś w ten sposób ale zajrzyj tylko to wymienionych linków aby nauczyć się czegoś więcej i wykorzystaj przykładowe pliki jako przewodnik.</span></p>
			<p class="p3"><span>Pobierz przykładowe pliki <a href="zengarden-sample.html" title="Kod HTML strony, nie modyfikować.">html</a> i <a href="zengarden-sample.css" title="Przykładowy kod CSS, można zmieniać.">css</a> do pracy na lokalnym dysku. Jak tylko ukończysz swoje dzieło sztuki (tylko prosze nie przesyłać nie do końca skończnych prac) wrzuć swoj plik .css na serwer gdzie posiadasz konto. Podeślij nam link do pliku i jeżeli zgodzimy się go wykorzystać podepniemy powiązane z nim grafiki. <a href="http://www.mezzoblue.com/zengarden/sendfile.asp" title="Użyj formularza kontaktowego aby przesłać swój plik CSS.">Podeślij nam link</A> do pliku i jeżeli zgodzimy się go wykorzystać podepniemy powiązane z nim grafiki. Propozycje finałowe umieszczone zostaną na naszym serwerze.</span></p>
			<p class="p4"><span>uaktualnienie: Szukam tłumaczy. Jeżeli jesteś biegły w angielskim i innym języku oto inny sposób na zaangażowanie się w projekt. <a href="http://www.mezzoblue.com/contact/" title="Wyślij nam e-mail wymieniając języki, w których jesteś biegły.">Proszę o kontakt</a> w sprawie detali.</span></p>
		</div>

		<div id="benefits">
			<h3><span>Korzyści</span></h3>
			<p class="p1"><span>Po co uczestniczyć w projekcie? Dla uznania, inspiracji i zasobów do których możemy się wszyscy odwołać projektując w <ACRONYM title="Cascading Style Sheets">CSS</ACRONYM>. Coś takiego jest ogromnie potrzebne, nawet dziś. Coraz więcej poważnych witryn poprawiło się, niestety nie wszystkie. Kiedyś ta galeria będzie historyczną osobliwością; dzień ten jednak jeszcze nie nadszedł.</span></p>
		</div>

		<div id="requirements">
			<h3><span>Wymagania</span></h3>
			<p class="p1"><span>Chcielibyśmy oglądać tak wiele <acronym title="Cascading Style Sheets, version 1">CSS1</acronym> jak to tylko możliwe. <acronym title="Cascading Style Sheets, version 2">CSS2</acronym> 
            powinien być ograniczany jedynie do elementów ogólnie obsługiwanych. Ogród Css Zen opiera się na funkcjonalnym, praktycznym <acronym title="Cascading Style Sheets">CSS</acronym> a nie na najnowszych trikach, dostępnych jedynie dla 2% użytkowników internetu. Jedynym poważnym warunkiem jest by twój <acronym title="Cascading Style Sheets">CSS</acronym> spełniał standardy.</span></p>
			<p class="p2"><span>Niestety, projektując w ten sposób odsłaniamy skazy różnych implementacji <acronym title="Cascading Style Sheets">CSS</acronym>. Różne przeglądarki wyświetlają ten sam <acronym title="Cascading Style Sheets">CSS</acronym> nawet spełniający standardy w różny sposób, co staje się nieznośne gdy jakaś poprawka prowadzi do powstania innego problemu. Zajrzyj na stronę z <a href="http://www.mezzoblue.com/zengarden/resources.asp" title="Lista zasobów CSS">zasobami</a> gdzie znajdziesz informacje na temat poprawek. Zgodność ze wszystkimi przeglądarkami to wciąż marzenie ściętej głowy i dlatego nie oczekujemy abyś tworzył perfekcyjny co do piksela kod na wszystkie platformy. Ale PRZETEJSTUJ go na czym tylko możesz. Jeżeli twoja praca nie będzie działała na przynajmniej IE5+/Win i Mozilli (czyli u ponad 90% użytkowników) są szanse że nie zaakceptujemy jej.</span></p>
			<p class="p3"><span>Prosimy przesyłać tylko oryginalne prace. Respektujcie prawa autorskie. Proszę ograniczyć materiał wzbudzający obiekcje do minimum; pełna smaku golizna zostanie przyjęta, czysta pornografia będzie odrzucana.</span></p>
			<p class="p4"><span>To zarówno ćwiczenie do nauki jak i demonstracja. Zachowacie prawa autorskie do swoich grafik ale prosimy o wypuszczanie swojego <ACRONYM title="Cascading Style Sheets">CSS</ACRONYM> z licencja Creative Commons identyczą <a href="http://creativecommons.org/licenses/sa/1.0/" title="Pokaż informacje o licencji Zen Garden.">jak tej strony</a> tak by inni mogli uczyć się z twojej pracy.</span></p>
			<p class="p5"><span>Szerokość pasma łaskawie darowana przez <a href="http://www.mediatemple.net/" lang="en">mediatemple</a></span></p>
		</div>

		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="Sprawdź poprawność XHTML">xhtml</a> &nbsp; 
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="Sprawdź poprawność CSS">css</a> &nbsp; 
			<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="Pokaż detale licencji tej strony - Creative Commons.">cc</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&output=Submit&gl=sec508&test=" title="Sprawdź dostępność tej strony w świetle paragrafu 508 U.S">508</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&output=Submit&gl=wcag1-aaa&test=" title="Sprawdź dostępność tej strony na podstawie WAI Content Accessibility Guidelines 1">aaa</a>
		</div>

	</div>

	
	<div id="linkList">
		<!--dodatkowy div dla elastyczności - ta lista będzie zapewne największym trikem jakim się zajmiecie -->
		<div id="linkList2">

		<!-- Jeżeli zastanawiacie się nad dodatkowym &nbsp; na końcu linku, to sztuczka by spełnić stadardy WCAG 1 Accessibility. -->
		<!-- Nie lubię tego ale, to ma być ćwiczenie wizualne. To kompromis. -->
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
				To się nie pokaże dopóki archiwa się nie zapełnią. Ale zaplanuj to. Jeżeli strasznie
				pozmieniasz sekcję 'select a design' h3, także to bedziesz musiał dostosować.
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
						echo "<li><a href=\"${thisFile}?cssfile=${currentDesign}&amp;page=${forward}\" title=\"Pokaż następny zestaw projektów. AccessKey: n\" accesskey=\"n\"><span class=\"accesskey\">n</span>astępne projekty &raquo;</a></li>\n";
					}

					if ($thisPage >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"Pokaż poprzedni zestaw projektów. AccessKey: p\" accesskey=\"p\">&laquo; <span class=\"accesskey\">p</span>oprzednie projekty</a></li>\n";
					}
?>
					<li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="Pokaż wszystkie projekty. AccessKey: w" accesskey="w">Pokaż wszystkie projekty</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>Zasoby:</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"${currentDesign}\" title=\"Pokaż plik źródłowy CSS obecnie oglądanego projektu, AccessKey: v\" accesskey=\"v\">Pokaż <acronym title=\"Cascading Style Sheets\">CSS</acronym> tego projektu.</a></li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources.asp" title="Linki do wspaniałych stron z informacjami o CSS. AccessKey: r" accesskey="r"><acronym title="Cascading Style Sheets">CSS</acronym> <span class="accesskey"></span>Zasoby</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/faq.asp" title="Lista często zadawanych pytań (FAQ). AccessKey: q" accesskey="q"><acronym title="Frequently Asked Questions">FA<span class="accesskey">Q</span></acronym></a>&nbsp;</li>
					<li><a href="http://www.mezzoblue.com/zengarden/sendfile.asp" title="Prześlij swój CSS. AccessKey: s" accesskey="s"><span class="accesskey"></span>Prześlij projekt</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/translations/" title="Wyświetl tłumaczenia strony. AccessKey: t" accesskey="t"><span class="accesskey">T</span>łumaczenia</a></li>
				</ul>
			</div>
		</div>
	</div>


</div>

<!-- Oto dodatkowe divy/spany mogą być używane do podłączenia jakiejś symboliki (obrazków itp.). -->
<!-- Dodaj obrazek tła do każdego i użyj width i height aby kontrolować rozmiar, rozmieść za pomocą absolute positioning -->
<!-- Istnieje raczej chory bug przesunięcia koloru transparentnych GIFów w Netscape 6/7 i Mozilla v1.0 up to v1.3 (gdzie został usunięty),
		a wiec przetestuj swój kod na tych przeglądarkach. -->
<div id="extraDiv1"><span></span></div><div id="extraDiv2"><span></span></div><div id="extraDiv3"><span></span></div>
<div id="extraDiv4"><span></span></div><div id="extraDiv5"><span></span></div><div id="extraDiv6"><span></span></div>

</body>
</html>