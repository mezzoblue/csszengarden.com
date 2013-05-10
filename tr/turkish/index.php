<?php

include '../../includes/masterlist.php';
$letterarray = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="tr" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-9" />
	<meta name="author" content="Dave Shea" />
	<meta name="keywords" content="tasarım, css, cascading, style, sheets, xhtml, grafik tasarımı, w3c, web standartları, görsel, görüntü" />
	<meta name="description" content="CSS tabanlı tasarım ile görsel olarak neler yapılabileceğine dair bir deneme." />
	<meta name="robots" content="all" />
	<title>css Zen Bahçesi: CSS tabanlı tasarımdaki güzellik</title>

	<!-- sitedeki stil dosyası yüklenmeden önce kısa süre ekrana çirkin stilsiz içeriğin gelmesini engellemekle ilgili bir site: http://www.bluerobot.com/web/css/fouc.asp -->
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

	Bu HTML belgesi maksimum esneklik için isaretlenmistir. Bu belge gerekendenden daha fazla class ve
	tag icerir, normalde sayfa daha yalin olacaktir.

	Buna ragmen, sanirim hepimiz bu yontemle sayfayi tablolarla olusturmaktan daha iyi bir durumda
	oldugumuz konusunda bana katilacaktir.
-->

<body id="css-zen-garden">

<div id="container">
	<div id="intro">
		<div id="pageHeader">
			<h1><span>css Zen Bahçesi</span></h1>
			<h2><span><acronym title="Cascading Style Sheets">CSS</acronym> Tasarının Güzelliği</span></h2>
		</div>

		<div id="quickSummary">
			<p class="p1"><span><acronym title="Cascading Style Sheets">CSS</acronym> tabanlı tasarım ile görsel olarak nelerin yapılabilecegine dair bir örnek. Bu sayfanın içine yüklemek için herhangi bir CSS dosyası seçin.</span></p>
			<p class="p2"><span>Örnek <a href="zengarden-sample.html" title="Bu sayfanın HTML kodu, değiştirilmemek üzere.">html dosyasını</a> ve <a href="zengarden-sample.css" title="Bu sayfayla ilişkili, değiştirmekte serbest olduğunuz CSS dosyası">css dosyasını</a> indirin.</span></p>
		</div>

		<div id="preamble">
			<h3><span>Aydınlanmaya giden yol</span></h3>
			<p class="p1"><span>Browser'lara özgü tag'ler, uyumsuz <acronym title="Document Object Model">DOM</acronym>'lar, ve eksik <acronym title="Cascading Style Sheets">CSS</acronym> desteğinin kalıntılarının yer aldığı, karanlık ve kasvetli bir yolu sil baştan değiştirerek...</span></p>
			<p class="p2"><span>Artık eski uygulamalara dair alışkanlıklarımızı bir kenara bırakmalıyız. Web'de aydınlanma, <acronym title="World Wide Web Consortium">W3C</acronym>, <acronym title="Web Standards Project">WaSP</acronym> ve yaygın browser geliştiricilerinin yorulmaksızın gösterdikleri efor sayesinde elde edildi.</span></p>
			<p class="p3"><span>css Zen bahçesi sizi rahatlamaya ve üstadların önemli derslerine kulak vermeye çağırıyor. Etrafınızı daha berrak görerek başlayın. Yeni ve canlanan tasarımda, zamanın onurlandıracağı teknikleri kullanmayı öğrenin. Web ile, onlardan biri olun.</span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="explanation">
			<h3><span>Peki bu ne anlama geliyor?</span></h3>
			<p class="p1"><span><acronym title="Cascading Style Sheets">CSS</acronym>'nin grafik sanatçıları tarafından ciddiye alınması gerekiyor. Zen Bahçesi, heyecanlandırmayı, ilham vermeyi ve katılımı cesaretlendirmeyi amaçlıyor. Başlamak için listedeki var olan tasarımlardan birini seçin. Herhangi birine tıklamak o stil dosyasını bu sayfaya yükleyecektir. HTML kodu aynı kalıyor, değişen tek şey CSS dosyası. Evet, gerçekten.</span></p>
			<p class="p2"><span><acronym title="Cascading Style Sheets">CSS</acronym> bir HTML dökümanı üzerindeki stilin her yönüyle kontrol edilmesini sağlar. Bunu insanları heyecanlandıracak bir şekilde kanıtlamanın tek yolu, dizginleri "yapı"dan güzellik yaratabilecek insanların eline verip, gerçekten neler yapılabileceğini göstermekle olur. Günümüze kadar, zekice "numara"ların ve hack'lerin çoğu, yapı oluşturucuları ve kod yazarlarının elinden çıktı. Tasarımcılar henüz fazla bir şey ortaya koyabilmiş değiller, bu değişmeli.</span></p>
		</div>

		<div id="participation">
			<h3><span>Katılım</span></h3>
			<p class="p1"><span>Lütfen sadece grafik tasarımcıları. Düzenlediğiniz şey bu sayfa olduğu için güçlü <acronym title="Cascading Style Sheets">CSS</acronym> bilgisi gerekiyor. Buna rağmen örnek dosya <acronym title="Cascading Style Sheets">CSS</acronym> ile fazla deneyimli olmayanların anlayabileceği düzeyde açıklamalar içeriyor. Lütfen ileri düzey dersler <acronym title="Cascading Style Sheets">CSS</acronym> ile çalışırken kullanabileceğiniz metodlar için <a href="http://www.mezzoblue.com/zengarden/resources/" title="A listing of CSS-related resources"><acronym title="Cascading Style Sheets">CSS</acronym> Resource Guide</a> sayfasını inceleyin. </span></p>
			<p class="p2"><span>Stil dosyasını istediğiniz gibi değiştirebilirsiniz, fakat <acronym title="HyperText Markup Language">HTML</acronym> aynı kalacak. Bu söylenilen, bu yolla daha önce hiç çalışmadıysanız başta biraz yıldırıcı görünebilir, buna rağmen aşağıdaki bağlantıları takip edebilir, ya da örnek dosyaları bir kılavuz olarak kullanabilirsiniz.</span></p>
			<p class="p3"><span>Örnek <a href="zengarden-sample.html" title="Sayfanın HTML kaynağı, düzenlenmeyecek.">html dosyasını</a> ve <a href="zengarden-sample.css" title="Değiştirebileceğiniz CSS dosyası">css dosyasını</a> indirip yerel olarak üzerlerinde çalışabilirsiniz. Şaheserinizi bitirdikten sonra (lütfen yarım kalmış çalışmalar göndermeyin) css dosyasını kontrolünüz altında bir siteye gönderin. <a href="http://www.mezzoblue.com/zengarden/submit/" title="css dosyasını bize göndermek için bağlantı formunu kullanın">Bize bir link gönderin</a>, eğer gönderdiğiniz çalışmayı kullanmaya karar verirsek resimler de taranacak. Nihai sunuşlar sitemizde bulundurulacaktır.</span></p>
			<p class="p4"><span>güncelleme: Çevirmenler arıyorum. Eğer İngilizce ve başka bir dili akıcı olarak biliyorsanız, projeye başka yollarla katılabilirsiniz. Lütfen detaylar için <a href="http://www.mezzoblue.com/contact/" title="Bana akıcı kullandığınız dillerle ilgili bir e-posta gönderin">benimle iletişim kurun</a>. <a href="http://darius.gen.tr/">Cemre GŸngšr</a> taraf&#305;ndan evrildi.</span></p>
		</div>

		<div id="benefits">
			<h3><span>Kazanımlar</span></h3>
			<p class="p1"><span>Neden katılım? Tanıtım, ilham ve <acronym title="Cascading Style Sheets">CSS</acronym> tabanlı tasarım kullanırken öne çıkarabileceğimiz bir örnek/kaynak için. Günümüz için bile bu gerekiyor. Gittikçe daha fazla site sıçramayı gerçekleştirmesine rağmen hâlâ yeteri kadar katılım sağlanmış değil. Bir gün bu galeri tarihsel merakı giderme amacına hizmet edecektir, fakat o gün, bugün değil.</span></p>
		</div>

		<div id="requirements">
			<h3><span>Gereksinimnler</span></h3>
			<p class="p1"><span>Olabildiğince fazla <acronym title="Cascading Style Sheets, version 1">CSS1</acronym> görmek istiyoruz. <acronym title="Cascading Style Sheets, version 2">CSS2</acronym> kullanımı yaygın olarak desteklenen unsurlarla sınırlanmalı. css Zen Bahçesi sadece kullanışlı, pratik <acronym title="Cascading Style Sheets">CSS</acronym> kullanımıyla ilgilidir, interneti kullananların %2'sinin görebileceği son teknoloji uygulamaların değil. Tek istediğimiz şey <acronym title="Cascading Style Sheets">CSS</acronym> onaylarına sahip olmanız.</span></p>
			<p class="p2"><span>Ne yazık ki bu tür tasarım <acronym title="Cascading Style Sheets">CSS</acronym> hatalarını da ortaya çıkarabiliyor. Tamamiyle geçerli <acronym title="Cascading Style Sheets">CSS</acronym> bile zaman zaman farklı browserlarla  farklı görünebilir. Bu bir browser için yapılan yamanın bir diğer browserda hataya neden olması nedeniyle çıldırtıcı olabilir. <a href="http://www.mezzoblue.com/zengarden/resources/" title="A listing of CSS-related resources">Kaynaklar</a> sayfasından şu anda kullanılan yamaları inceleyebilirsiniz. Bütün browserlar ile uyumlulukm bir rüya gibi görünebilir, ve sizden her platformda mükemmel görünen bir çalışma beklemiyoruz; yine de elinizden geldiğince deneme yapın. Eğer tasarımınız en azından IE5+/Win ve Mozilla (nüfusun %90'ı tarafından kullanılıyor) altında görünmüyorsa, onu kabul etmeyebiliriz.</span></p>
			<p class="p3"><span>Sizden orijinal sanat çalışmaları göndermenizi rica ediyoruz. Lütfen telif hakkı kanunlarına saygı gösterin. Rahatsız edici içeriği asgari düzeyde tutun; leziz çıplaklık kabul edilebilir, pornografi reddedilecektir.</span></p>
			<p class="p4"><span>Bu bir gösteri olduğu kadar bir ders olarak algılanabilir. Grafikleriniz üzerinde tam telif hakkı saklı tutabilirsiniz, fakat <acronym title="Cascading Style Sheets">CSS</acronym> dosyasını <a href="http://creativecommons.org/licenses/sa/1.0/" title="Zen Bahçesi'nin lisans bilgilerini gör">Zen Bahçesi'ninki ile benzer bir "Creative Commons" lisansı</a> ile bırakmanızı rica ediyoruz, bu sayede başkaları çalışmalarınızdan faydalanabilir.</span></p>
			<p class="p5"><span>Bant genişliği <a href="http://www.mediatemple.net/" lang="en">mediatemple</a> tarafından cömertçe sağlanmaktadır.</span></p>
		</div>

		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="Bu sitenin xhtml uyumluluğunu kontrol et">xhtml</a> &nbsp; 
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="Bu sitenin CSS uyumluluğunu kontrol et">css</a> &nbsp; 
			<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="Bu sitenin "Creative Commons" lisansını görüntüle">cc</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=sec508&amp;test=" title="ABD yasası kısım 508'e göre sitenin erişilebilirliğini kontrol et">508</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=wcag1-aaa&amp;test=" title="WAI erişilebilirlik kuralları 1'e göre sitenin erişilebilirliğini kontrol et">aaa</a>
		</div>

	</div>

	
	<div id="linkList">
		<!--esneklik için fazladan "div", bu muhtemelen bal etmesi en zorlu kısım olacaktır -->
		<div id="linkList2">

		<!-- bağlantıların sonundaki nbsp WAI erişilebilirlik kurallarına uyum için eklenmiştir -->
		<!-- bunu yapmak hoşuma gitmese de, bu bir görsel idman, bir uzlaşma olarak görülebilir -->
			<div id="lselect">
				<h3 class="select"><span>Bir tasarım seçin:</span></h3>
				<!-- bir sayfada en fazla 8 olmak üzere tasarım listesi buradan itibaren çıkacak -->
				<ul>
<?php
					$c = 0;
					for ($a = ($listStart + 1); $a <= $listEnd; $a++) {
						$b = $listEnd - $c;
						$d = $letterarray[$c];
						$tempLink = linkMe($filename[$b]);
						echo "\t\t\t\t\t";
						echo "<li><a href=\"?cssfile=/${tempLink}/${tempLink}.css&amp;page=${thisPage}\" title=\"AccessKey: ${d}\" accesskey=\"${d}\">${styleName[$b]}</a> tarafından <a href=\"${styleURL[$b]}\" class=\"c\">${styleCreator[$b]}</a></li>";
						echo "\n";
						$c = $c + 1;
					}
?>
				</ul>
			</div>

			<div id="larchives">
				<h3 class="archives"><span>Arşivler:</span></h3>
				<ul>
<?php
					
					$forward = $thisPage + 1;
					$backward = $thisPage - 1;
					
					if ($listStart >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"${thisFile}?cssfile=${currentDesign}&amp;page=${forward}\" title=\"Bir sonraki tasarım grubunu izle. AccessKey: n\" accesskey=\"n\">so<span class=\"accesskey\">n</span>raki tasarımlar &raquo;</a></li>\n";
					}

					if ($thisPage >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"Bir önceki tasarım grubunu izle. AccessKey: p\" accesskey=\"p\">&laquo; önceki tasarımlar</a></li>\n";
					}
?>
					<li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="Gönderilen her tasarımı incele. AccessKey: w" accesskey="w">Bütün tasarımları görüntüle</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>Kaynaklar:</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"${currentDesign}\" title=\"Şu anda gördüğünüz CSS dosyasının kaynağını inceleyin, AccessKey: v\" accesskey=\"v\">Bu tasarım(lar)daki <acronym title=\"Cascading Style Sheets\">CSS</acronym>'yi görüntüle</a></li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources/" title="CSS kullanımıyla ilgili harika siteler. AccessKey: r" accesskey="r">CSS Kaynakları</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/faq/" title="Zen Bahçesiyle ilgili sık sorulan sorular. AccessKey: q" accesskey="q"><acronym title="Sık Sorulan Sorular">SSS</acronym></a>&nbsp;</li>
					<li><a href="http://www.mezzoblue.com/zengarden/submit/" title="Kendi CSS tasarımınızı gönderin. AccessKey: s" accesskey="s">Tasarım gönder</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/translations/" title="Bu sayfanın çevirilerini gör. AccessKey: t" accesskey="t">Çeviriler</a></li>
				</ul>
			</div>
		</div>
	</div>


</div>

<!-- Bu fazladan div/span'leri ek resimler için kullanabilirsiniz -->
<!-- Her birine arkaplan resmi ekleyin, en/boy ve kesin (absolute) yerleştirme kullanarak sayfada oluşturun. -->
<!-- Netscape 6/7 ve Mozilla v1.0'den v1.3'e kadar (düzeltildiği sürüm) şeffaf GIF'lerle ilgili bir renk
kayması sorunu var, tasarımınızı bu browserlarda denemeyi unutmayın.-->
<div id="extraDiv1"><span></span></div><div id="extraDiv2"><span></span></div><div id="extraDiv3"><span></span></div>
<div id="extraDiv4"><span></span></div><div id="extraDiv5"><span></span></div><div id="extraDiv6"><span></span></div>

</body>
</html>