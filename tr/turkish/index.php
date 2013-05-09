<?php

include '../../includes/masterlist.php';
$letterarray = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="tr" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-9" />
	<meta name="author" content="Dave Shea" />
	<meta name="keywords" content="tasar�m, css, cascading, style, sheets, xhtml, grafik tasar�m�, w3c, web standartlar�, g�rsel, g�r�nt�" />
	<meta name="description" content="CSS tabanl� tasar�m ile g�rsel olarak neler yap�labilece�ine dair bir deneme." />
	<meta name="robots" content="all" />
	<title>css Zen Bah�esi: CSS tabanl� tasar�mdaki g�zellik</title>

	<!-- sitedeki stil dosyas� y�klenmeden �nce k�sa s�re ekrana �irkin stilsiz i�eri�in gelmesini engellemekle ilgili bir site: http://www.bluerobot.com/web/css/fouc.asp -->
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

	Bu HTML belgesi maksimum esneklik i�in isaretlenmistir. Bu belge gerekendenden daha fazla class ve
	tag icerir, normalde sayfa daha yalin olacaktir.

	Buna ragmen, sanirim hepimiz bu yontemle sayfayi tablolarla olusturmaktan daha iyi bir durumda
	oldugumuz konusunda bana katilacaktir.
-->

<body id="css-zen-garden">

<div id="container">
	<div id="intro">
		<div id="pageHeader">
			<h1><span>css Zen Bah�esi</span></h1>
			<h2><span><acronym title="Cascading Style Sheets">CSS</acronym> Tasar�n�n G�zelli�i</span></h2>
		</div>

		<div id="quickSummary">
			<p class="p1"><span><acronym title="Cascading Style Sheets">CSS</acronym> tabanl� tasar�m ile g�rsel olarak nelerin yap�labilecegine dair bir �rnek. Bu sayfan�n i�ine y�klemek i�in herhangi bir CSS dosyas� se�in.</span></p>
			<p class="p2"><span>�rnek <a href="zengarden-sample.html" title="Bu sayfan�n HTML kodu, de�i�tirilmemek �zere.">html dosyas�n�</a> ve <a href="zengarden-sample.css" title="Bu sayfayla ili�kili, de�i�tirmekte serbest oldu�unuz CSS dosyas�">css dosyas�n�</a> indirin.</span></p>
		</div>

		<div id="preamble">
			<h3><span>Ayd�nlanmaya giden yol</span></h3>
			<p class="p1"><span>Browser'lara �zg� tag'ler, uyumsuz <acronym title="Document Object Model">DOM</acronym>'lar, ve eksik <acronym title="Cascading Style Sheets">CSS</acronym> deste�inin kal�nt�lar�n�n yer ald���, karanl�k ve kasvetli bir yolu sil ba�tan de�i�tirerek...</span></p>
			<p class="p2"><span>Art�k eski uygulamalara dair al��kanl�klar�m�z� bir kenara b�rakmal�y�z. Web'de ayd�nlanma, <acronym title="World Wide Web Consortium">W3C</acronym>, <acronym title="Web Standards Project">WaSP</acronym> ve yayg�n browser geli�tiricilerinin yorulmaks�z�n g�sterdikleri efor sayesinde elde edildi.</span></p>
			<p class="p3"><span>css Zen bah�esi sizi rahatlamaya ve �stadlar�n �nemli derslerine kulak vermeye �a��r�yor. Etraf�n�z� daha berrak g�rerek ba�lay�n. Yeni ve canlanan tasar�mda, zaman�n onurland�raca�� teknikleri kullanmay� ��renin. Web ile, onlardan biri olun.</span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="explanation">
			<h3><span>Peki bu ne anlama geliyor?</span></h3>
			<p class="p1"><span><acronym title="Cascading Style Sheets">CSS</acronym>'nin grafik sanat��lar� taraf�ndan ciddiye al�nmas� gerekiyor. Zen Bah�esi, heyecanland�rmay�, ilham vermeyi ve kat�l�m� cesaretlendirmeyi ama�l�yor. Ba�lamak i�in listedeki var olan tasar�mlardan birini se�in. Herhangi birine t�klamak o stil dosyas�n� bu sayfaya y�kleyecektir. HTML kodu ayn� kal�yor, de�i�en tek �ey CSS dosyas�. Evet, ger�ekten.</span></p>
			<p class="p2"><span><acronym title="Cascading Style Sheets">CSS</acronym> bir HTML d�k�man� �zerindeki stilin her y�n�yle kontrol edilmesini sa�lar. Bunu insanlar� heyecanland�racak bir �ekilde kan�tlaman�n tek yolu, dizginleri "yap�"dan g�zellik yaratabilecek insanlar�n eline verip, ger�ekten neler yap�labilece�ini g�stermekle olur. G�n�m�ze kadar, zekice "numara"lar�n ve hack'lerin �o�u, yap� olu�turucular� ve kod yazarlar�n�n elinden ��kt�. Tasar�mc�lar hen�z fazla bir �ey ortaya koyabilmi� de�iller, bu de�i�meli.</span></p>
		</div>

		<div id="participation">
			<h3><span>Kat�l�m</span></h3>
			<p class="p1"><span>L�tfen sadece grafik tasar�mc�lar�. D�zenledi�iniz �ey bu sayfa oldu�u i�in g��l� <acronym title="Cascading Style Sheets">CSS</acronym> bilgisi gerekiyor. Buna ra�men �rnek dosya <acronym title="Cascading Style Sheets">CSS</acronym> ile fazla deneyimli olmayanlar�n anlayabilece�i d�zeyde a��klamalar i�eriyor. L�tfen ileri d�zey dersler <acronym title="Cascading Style Sheets">CSS</acronym> ile �al���rken kullanabilece�iniz metodlar i�in <a href="http://www.mezzoblue.com/zengarden/resources/" title="A listing of CSS-related resources"><acronym title="Cascading Style Sheets">CSS</acronym> Resource Guide</a> sayfas�n� inceleyin. </span></p>
			<p class="p2"><span>Stil dosyas�n� istedi�iniz gibi de�i�tirebilirsiniz, fakat <acronym title="HyperText Markup Language">HTML</acronym> ayn� kalacak. Bu s�ylenilen, bu yolla daha �nce hi� �al��mad�ysan�z ba�ta biraz y�ld�r�c� g�r�nebilir, buna ra�men a�a��daki ba�lant�lar� takip edebilir, ya da �rnek dosyalar� bir k�lavuz olarak kullanabilirsiniz.</span></p>
			<p class="p3"><span>�rnek <a href="zengarden-sample.html" title="Sayfan�n HTML kayna��, d�zenlenmeyecek.">html dosyas�n�</a> ve <a href="zengarden-sample.css" title="De�i�tirebilece�iniz CSS dosyas�">css dosyas�n�</a> indirip yerel olarak �zerlerinde �al��abilirsiniz. �aheserinizi bitirdikten sonra (l�tfen yar�m kalm�� �al��malar g�ndermeyin) css dosyas�n� kontrol�n�z alt�nda bir siteye g�nderin. <a href="http://www.mezzoblue.com/zengarden/submit/" title="css dosyas�n� bize g�ndermek i�in ba�lant� formunu kullan�n">Bize bir link g�nderin</a>, e�er g�nderdi�iniz �al��may� kullanmaya karar verirsek resimler de taranacak. Nihai sunu�lar sitemizde bulundurulacakt�r.</span></p>
			<p class="p4"><span>g�ncelleme: �evirmenler ar�yorum. E�er �ngilizce ve ba�ka bir dili ak�c� olarak biliyorsan�z, projeye ba�ka yollarla kat�labilirsiniz. L�tfen detaylar i�in <a href="http://www.mezzoblue.com/contact/" title="Bana ak�c� kulland���n�z dillerle ilgili bir e-posta g�nderin">benimle ileti�im kurun</a>. <a href="http://darius.gen.tr/">Cemre G�ng�r</a> taraf&#305;ndan �evrildi.</span></p>
		</div>

		<div id="benefits">
			<h3><span>Kazan�mlar</span></h3>
			<p class="p1"><span>Neden kat�l�m? Tan�t�m, ilham ve <acronym title="Cascading Style Sheets">CSS</acronym> tabanl� tasar�m kullan�rken �ne ��karabilece�imiz bir �rnek/kaynak i�in. G�n�m�z i�in bile bu gerekiyor. Gittik�e daha fazla site s��ramay� ger�ekle�tirmesine ra�men h�l� yeteri kadar kat�l�m sa�lanm�� de�il. Bir g�n bu galeri tarihsel merak� giderme amac�na hizmet edecektir, fakat o g�n, bug�n de�il.</span></p>
		</div>

		<div id="requirements">
			<h3><span>Gereksinimnler</span></h3>
			<p class="p1"><span>Olabildi�ince fazla <acronym title="Cascading Style Sheets, version 1">CSS1</acronym> g�rmek istiyoruz. <acronym title="Cascading Style Sheets, version 2">CSS2</acronym> kullan�m� yayg�n olarak desteklenen unsurlarla s�n�rlanmal�. css Zen Bah�esi sadece kullan��l�, pratik <acronym title="Cascading Style Sheets">CSS</acronym> kullan�m�yla ilgilidir, interneti kullananlar�n %2'sinin g�rebilece�i son teknoloji uygulamalar�n de�il. Tek istedi�imiz �ey <acronym title="Cascading Style Sheets">CSS</acronym> onaylar�na sahip olman�z.</span></p>
			<p class="p2"><span>Ne yaz�k ki bu t�r tasar�m <acronym title="Cascading Style Sheets">CSS</acronym> hatalar�n� da ortaya ��karabiliyor. Tamamiyle ge�erli <acronym title="Cascading Style Sheets">CSS</acronym> bile zaman zaman farkl� browserlarla  farkl� g�r�nebilir. Bu bir browser i�in yap�lan yaman�n bir di�er browserda hataya neden olmas� nedeniyle ��ld�rt�c� olabilir. <a href="http://www.mezzoblue.com/zengarden/resources/" title="A listing of CSS-related resources">Kaynaklar</a> sayfas�ndan �u anda kullan�lan yamalar� inceleyebilirsiniz. B�t�n browserlar ile uyumlulukm bir r�ya gibi g�r�nebilir, ve sizden her platformda m�kemmel g�r�nen bir �al��ma beklemiyoruz; yine de elinizden geldi�ince deneme yap�n. E�er tasar�m�n�z en az�ndan IE5+/Win ve Mozilla (n�fusun %90'� taraf�ndan kullan�l�yor) alt�nda g�r�nm�yorsa, onu kabul etmeyebiliriz.</span></p>
			<p class="p3"><span>Sizden orijinal sanat �al��malar� g�ndermenizi rica ediyoruz. L�tfen telif hakk� kanunlar�na sayg� g�sterin. Rahats�z edici i�eri�i asgari d�zeyde tutun; leziz ��plakl�k kabul edilebilir, pornografi reddedilecektir.</span></p>
			<p class="p4"><span>Bu bir g�steri oldu�u kadar bir ders olarak alg�lanabilir. Grafikleriniz �zerinde tam telif hakk� sakl� tutabilirsiniz, fakat <acronym title="Cascading Style Sheets">CSS</acronym> dosyas�n� <a href="http://creativecommons.org/licenses/sa/1.0/" title="Zen Bah�esi'nin lisans bilgilerini g�r">Zen Bah�esi'ninki ile benzer bir "Creative Commons" lisans�</a> ile b�rakman�z� rica ediyoruz, bu sayede ba�kalar� �al��malar�n�zdan faydalanabilir.</span></p>
			<p class="p5"><span>Bant geni�li�i <a href="http://www.mediatemple.net/" lang="en">mediatemple</a> taraf�ndan c�mert�e sa�lanmaktad�r.</span></p>
		</div>

		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="Bu sitenin xhtml uyumlulu�unu kontrol et">xhtml</a> &nbsp; 
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="Bu sitenin CSS uyumlulu�unu kontrol et">css</a> &nbsp; 
			<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="Bu sitenin "Creative Commons" lisans�n� g�r�nt�le">cc</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=sec508&amp;test=" title="ABD yasas� k�s�m 508'e g�re sitenin eri�ilebilirli�ini kontrol et">508</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=wcag1-aaa&amp;test=" title="WAI eri�ilebilirlik kurallar� 1'e g�re sitenin eri�ilebilirli�ini kontrol et">aaa</a>
		</div>

	</div>

	
	<div id="linkList">
		<!--esneklik i�in fazladan "div", bu muhtemelen bal etmesi en zorlu k�s�m olacakt�r -->
		<div id="linkList2">

		<!-- ba�lant�lar�n sonundaki nbsp WAI eri�ilebilirlik kurallar�na uyum i�in eklenmi�tir -->
		<!-- bunu yapmak ho�uma gitmese de, bu bir g�rsel idman, bir uzla�ma olarak g�r�lebilir -->
			<div id="lselect">
				<h3 class="select"><span>Bir tasar�m se�in:</span></h3>
				<!-- bir sayfada en fazla 8 olmak �zere tasar�m listesi buradan itibaren ��kacak -->
				<ul>
<?php
					$c = 0;
					for ($a = ($listStart + 1); $a <= $listEnd; $a++) {
						$b = $listEnd - $c;
						$d = $letterarray[$c];
						$tempLink = linkMe($filename[$b]);
						echo "\t\t\t\t\t";
						echo "<li><a href=\"?cssfile=/${tempLink}/${tempLink}.css&amp;page=${thisPage}\" title=\"AccessKey: ${d}\" accesskey=\"${d}\">${styleName[$b]}</a> taraf�ndan <a href=\"${styleURL[$b]}\" class=\"c\">${styleCreator[$b]}</a></li>";
						echo "\n";
						$c = $c + 1;
					}
?>
				</ul>
			</div>

			<div id="larchives">
				<h3 class="archives"><span>Ar�ivler:</span></h3>
				<ul>
<?php
					
					$forward = $thisPage + 1;
					$backward = $thisPage - 1;
					
					if ($listStart >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"${thisFile}?cssfile=${currentDesign}&amp;page=${forward}\" title=\"Bir sonraki tasar�m grubunu izle. AccessKey: n\" accesskey=\"n\">so<span class=\"accesskey\">n</span>raki tasar�mlar &raquo;</a></li>\n";
					}

					if ($thisPage >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"Bir �nceki tasar�m grubunu izle. AccessKey: p\" accesskey=\"p\">&laquo; �nceki tasar�mlar</a></li>\n";
					}
?>
					<li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="G�nderilen her tasar�m� incele. AccessKey: w" accesskey="w">B�t�n tasar�mlar� g�r�nt�le</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>Kaynaklar:</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"${currentDesign}\" title=\"�u anda g�rd���n�z CSS dosyas�n�n kayna��n� inceleyin, AccessKey: v\" accesskey=\"v\">Bu tasar�m(lar)daki <acronym title=\"Cascading Style Sheets\">CSS</acronym>'yi g�r�nt�le</a></li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources/" title="CSS kullan�m�yla ilgili harika siteler. AccessKey: r" accesskey="r">CSS Kaynaklar�</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/faq/" title="Zen Bah�esiyle ilgili s�k sorulan sorular. AccessKey: q" accesskey="q"><acronym title="S�k Sorulan Sorular">SSS</acronym></a>&nbsp;</li>
					<li><a href="http://www.mezzoblue.com/zengarden/submit/" title="Kendi CSS tasar�m�n�z� g�nderin. AccessKey: s" accesskey="s">Tasar�m g�nder</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/translations/" title="Bu sayfan�n �evirilerini g�r. AccessKey: t" accesskey="t">�eviriler</a></li>
				</ul>
			</div>
		</div>
	</div>


</div>

<!-- Bu fazladan div/span'leri ek resimler i�in kullanabilirsiniz -->
<!-- Her birine arkaplan resmi ekleyin, en/boy ve kesin (absolute) yerle�tirme kullanarak sayfada olu�turun. -->
<!-- Netscape 6/7 ve Mozilla v1.0'den v1.3'e kadar (d�zeltildi�i s�r�m) �effaf GIF'lerle ilgili bir renk
kaymas� sorunu var, tasar�m�n�z� bu browserlarda denemeyi unutmay�n.-->
<div id="extraDiv1"><span></span></div><div id="extraDiv2"><span></span></div><div id="extraDiv3"><span></span></div>
<div id="extraDiv4"><span></span></div><div id="extraDiv5"><span></span></div><div id="extraDiv6"><span></span></div>

</body>
</html>