<?php

$loadCSS = "/001/001-zh.css";
include '../../includes/masterlist.php';
$letterarray = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Dave Shea" />
	<meta name="keywords" content="design, css, cascading, style, sheets, xhtml, graphic design, w3c, web standards, visual, display, 樣式表">
	<meta name="description" content="展示以CSS為基礎的設計方式能夠達到的視&gt;覺效果。只要選擇列表上的任一樣式表，就可以將它載入到這個頁面。">
	<meta name="robots" content="all" />
	<title>css Zen Garden: CSS設計之美</title>

		<!-- 修正會一閃而過的無樣式內容。請參考 http://www.bluerobot.com/web/css/fouc.asp -->
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


	這份 xhtml 文件是用提供設計師最大彈性的方式撰寫。
	裡面有不少沒有用到的類別跟標籤。在實際應用的時候，
	這樣往往會比較好。
	
	不過我想大家都同意，如果使用表格製作，可以達到更好
	的效果。


-->

<body id="css-zen-garden">

<div id="container">
	<div id="intro">
		<div id="pageHeader">
			<h1><span>css Zen Garden</span></h1>
			<h2><span><acronym title="Cascading Style Sheets">CSS</acronym>設計之美</span></h2>
		</div>

		<div id="quickSummary">
			<p class="p1"><span>展示以<acronym title="Cascading Style Sheets">CSS</acronym>為基礎的設計方式能夠達到的視覺效果。只要選擇列表上的任一樣式表，就可以將它載入到這個頁面。</span></p>
			<p class="p2"><span>下載<a href="http://ccca.nctu.edu.tw/%7Ehlb/trans/csszengarden/zengarden-sample.html" title="這個頁面的HTML程式碼，不該被更動。">html</a>跟<a href="http://ccca.nctu.edu.tw/%7Ehlb/trans/csszengarden/zengarden-sample.css" title="這個頁面的CSS範例檔，你可以更改它。">css</a>的範例檔案。</span></p>
		</div>

		<div id="preamble">
			<h3><span>開悟之路</span></h3>
			<p class="p1"><span>各家瀏覽器的專屬標籤、低相容度的<acronym title="Document Object Model">DOM</acronym>，或者是缺乏完整支援的<acronym title="Cascading Style Sheets">CSS</acronym>等遺跡，如今都散落在闇黑而荒涼的道路上。</span></p>
			<p class="p2"><span>今日，我們必須掃除腦海裡的過時技巧。感謝<acronym title="World Wide Web Consortium">W3C</acronym>、<acronym title="Web Standards Project">WaSP</acronym>，以及瀏覽器作者們的努力不懈，我們終於能達到網站設計技術的開悟境界。</span></p>
			<p class="p3"><span>css Zen Garden「樣式表禪意花園」邀請您放鬆身心，冥想專家們的重要課題。讓我們以清晰的心靈之眼凝視，並且用嶄新、充滿活力的方式學習這項受人尊敬的古老技術，達到天人合一的境界。</span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="explanation">
			<h3><span>這是關於什麼？</span></h3>
			<p class="p1"><span>顯然平面設計師有必要認真看待<acronym title="Cascading Style Sheets">CSS</acronym>。Zen Garden致力於推廣使用、啟發靈感和鼓勵參與。你可以從瀏覽列表裡的設計著手。只要選擇列表上的任一樣式表，就可以將它載入到這個頁面。<acronym title="HyperText Markup Language">HTML</acronym>程式碼都維持原狀，唯一改變的是使用的<acronym title="Cascading Style Sheets">CSS</acronym>檔案。沒錯，的確如此。</span></p>
			<p class="p2"><span><acronym title="Cascading Style Sheets">CSS</acronym>具備完整控制超文字文件的能力。不過唯有當你把韁繩交給能從結構中創造美感的人們，用實例展示它的功能時，才能夠鼓舞人心。截至目前為止，網站結構設計師和程式員已經介紹過許多關於良好技巧與駭客手法的範例。平面設計師則還沒有在這個領域建立名聲。是需要改變的時候了。</span></p>
		</div>

		<div id="participation">
			<h3><span>參與</span></h3>
			<p class="p1"><span>我們只邀請平面設計師參與這項計畫。你必須修改這個頁面，所以得要有良好的<acronym title="Cascading Style Sheets">CSS</acronym>技巧。不過這份範例檔案已經詳盡地加上註解，即使是<acronym title="Cascading Style Sheets">CSS</acronym>初學者也能夠以此為出發點。請參考<a href="http://www.mezzoblue.com/zengarden/resources/" title="CSS相關資源列表"><acronym title="Cascading Style Sheets">CSS</acronym>資源手冊</a>，裡面有相關的進階教學與技巧說明。</span></p>
			<p class="p2"><span>你可以用你希望的任何方式修改樣式表，但是別更動<acronym title="HyperText Markup Language">HTML</acronym>檔案。如果你從來都沒有這樣做過，也許會有點心生膽怯。不過你可以參考列表來深入地學習，並且拿範例檔案作為教學指南。</span></p>
			<p class="p3"><span>請下載<a href="http://ccca.nctu.edu.tw/%7Ehlb/trans/csszengarden/zengarden-sample.html" title="這個頁面的HTML程式碼，不該被更動。">html</a>跟<a href="http://ccca.nctu.edu.tw/%7Ehlb/trans/csszengarden/zengarden-sample.css" title="這個頁面的CSS範例檔，你可以更改它。">css</a>的範例檔案，並且在自己的電腦上修改。在你完成你的傑作後（請別拿半成品投稿），先將<acronym title="Cascading Style Sheets">CSS</acronym>檔案上傳到你的網頁伺服器，再把檔案的網址<a href="http://www.mezzoblue.com/zengarden/submit/" title="請用聯絡表單給我們你的CSS檔案">寄給我們</a>。如果我們採用你的作品，就會自行下載相關圖片。最後成品會放在我們的伺服器上。</span></p>
			<p class="p4"><span>最新消息：我正在尋找翻譯工作者。如果你擅長英語以及其他語言，這也是一種參與這項專案的方式。欲知詳情請<a href="http://www.mezzoblue.com/contact/" title="請寄給我一封電子郵件，註明你所擅長的語言。">與我連絡</a>。現有的翻譯文件都可以<a href="http://www.mezzoblue.com/zengarden/translations/">自由取得</a>。</span><br>中文翻譯：<a href="http://ccca.nctu.edu.tw/%7Ehlb/" title="連至翻譯者網站">薛良斌</a>、<a href="http://www.ilyagram.org/" title="連至翻譯者網站">李士傑</a>。<br>Traditional Chinese Translation by <a href="http://ccca.nctu.edu.tw/%7Ehlb/" title="Go to the translator's site">Liang-Bin Hsueh</a> &amp; <a href="http://www.ilyagram.org/" title="Go to the translator's site">Ilya Eric Lee</a>.</p>
		</div>

		<div id="benefits">
			<h3><span>益處</span></h3>
			<p class="p1"><span>你為什麼要參與這項計畫呢？因為可以展現你的實力、激發創作靈感，並且在設計以<acronym title="Cascading Style Sheets">CSS</acronym>為基礎的案例時，這項計畫可以當作參考用的資源。即使在今日這也是極為需要的。越來越多主流站台開始擁抱這項技術，但還是不夠。雖然現在還不成氣候，但總有一天這個展覽場地會成為歷史的寶藏。</span></p>
		</div>

		<div id="requirements">
			<h3><span>必要條件</span></h3>
			<p class="p1"><span>我們希望你盡可能地使用<acronym title="Cascading Style Sheets, version 1">CSS1</acronym>。<acronym title="Cascading Style Sheets, version 2">CSS2</acronym>則只可以使用已被廣泛支援的部分。css Zen Garden採用的是可行、實用的<acronym title="Cascading Style Sheets">CSS</acronym>語法，而不是些只能被 2% 觀眾瀏覽的超尖端技術。實際上，我們唯一的需求就只是你的<acronym title="Cascading Style Sheets">CSS</acronym>要合乎標準。</span></p>
			<p class="p2"><span>不幸的是，這樣的設計方式會強調各種<acronym title="Cascading Style Sheets">CSS</acronym>實作平台上的缺陷。即使是完全合乎標準的<acronym title="Cascading Style Sheets">CSS</acronym>語法，不同瀏覽器也會有不同的表現方式。而當你修好一邊，卻又讓另一邊出狀況的時候，那可真是讓人抓狂。請參考<a href="http://www.mezzoblue.com/zengarden/resources/" title="CSS相關資源列表">資源手冊</a>裡關於一些錯誤修正的資訊。完整的瀏覽器支援仍然是不切實際的夢想，我們也不想要你用精準地指定像素的程式碼來跨所有平台。不過還是請你盡可能地作測試。如果你的設計沒辦法在IE5+/Win與Mozilla上正常顯示（超過
90% 以上的人們使用），我們不可能接受它。</span></p>
			<p class="p3"><span>我們要求你提出原創作品。請遵守著作權法規。請盡可能不要使用有爭議的素材；我們可以接受高雅的裸體素材，但是拒絕不當的色情圖樣。</span></p>
			<p class="p4"><span>這是個示範，也是學習用的練習題。你可以保留圖片的完整著作權，但我們要求你用<a href="http://creativecommons.org/licenses/sa/1.0/" title="檢視Zen Garden的版權聲明。">與本網站相同</a>的Creative Commons license釋出你的<acronym title="Cascading Style Sheets">CSS</acronym>作品，讓其他人可以從中學習。</span></p>
			<p class="p5"><span>頻寬由<a href="http://www.mediatemple.net/">mediatemple</a>提供。</span> </p>
		</div>

		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="檢查網站的XHTML是否合乎標準">xhtml</a>   
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="檢查網站的CSS是否合乎標準">css</a>   
			<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="檢視本網站的版權聲明細節，由慷慨的Creative Commons提供。">cc</a>  
			<a href="http://www.mezzoblue.com/zengarden/faq/#s508" title="依據美國508條款，檢查網站的親和力">508</a>  
			<a href="http://www.mezzoblue.com/zengarden/faq/#aaa" title="依據WAI Content Accessibility Guidelines 1，檢查網站的親和力">aaa</a>

		</div>


	</div>

	
	<div id="linkList">
		<!-- 這是提供額外彈性用的 div - 你大概會花最多心思在這份列表上。 -->
		<div id="linkList2">

		<!-- 你也許會因為連結後面的 &nbsp; 感到訝異，那是為了配合 WCAG 1 Accessibility 使用的技巧。 -->
		<!-- 我也不喜歡這樣，不過這是個視覺效果的練習。需要做點折衷。 -->
			<div id="lselect">
				<h3 class="select"><span>選擇一項設計：</span></h3>
				<!-- 這是連結列表的起點，一頁裡不會超過 8 個連結。 -->
				<ul>
<?php
					$c = 0;
					for ($a = ($listStart + 1); $a <= $listEnd; $a++) {
						$b = $listEnd - $c;
						$d = $letterarray[$c];
						$tempLink = linkMe($filename[$b]);
						echo "\t\t\t\t\t";
						echo "<li><a href=\"?cssfile=/${tempLink}/${tempLink}.css&amp;page=${thisPage}\" title=\"快速鍵: ${d}\" accesskey=\"${d}\">${styleName[$b]}</a> by <a href=\"${styleURL[$b]}\" class=\"c\">${styleCreator[$b]}</a></li>";
						echo "\n";
						$c = $c + 1;
					}
?>
				</ul>
			</div>

			<!--
				在彙整頁面還沒塞滿之前，這裡都不會顯示，只是未雨綢繆而已。
				如果你為「選擇一項設計」的 h3 標籤訂製了不少樣式，這裡也必須訂製好。
			<div id="lfavorites">
				<h3 class="favorites"><span>最愛：</span></h3>
				<ul>
					<li><a href="#">filename</a> by <a href="" class="c">submitter</a>&nbsp;</li>
					<li><a href="#">filename</a> by <a href="" class="c">submitter</a>&nbsp;</li>
				</ul>
			</div>
			-->
			<div id="larchives">
				<h3 class="archives"><span>資料彙整：</span></h3>
				<ul>
<?php
					
					$forward = $thisPage + 1;
					$backward = $thisPage - 1;
					
					if ($listStart >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"${thisFile}?cssfile=${currentDesign}&amp;page=${forward}\" title=\"瀏覽下一個設計。快速鍵：n\" accesskey=\"n\">下一個設計 »</a></li>\n";
					}

					if ($thisPage >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"瀏覽前一個設計。快速鍵：p\" accesskey=\"p\">« 前一個設計</a></li>\n";
					}
?>
					<li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="瀏覽Zen Garden上的所有設計。快速鍵：w" accesskey="w">瀏覽所有設計</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>資源手冊：</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"${currentDesign}\" title=\"檢視這一個設計的CSS檔案。快速鍵：v\" accesskey=\"v\">檢視這個設計的<acronym title=\"Cascading Style Sheets\">CSS</acronym></a> </li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources/" title="連結到提供CSS相關資訊的好站台。快速鍵：r" accesskey="r"><acronym title="Cascading Style Sheets">CSS</acronym>資源手冊</a> </li>
					<li><a href="http://www.mezzoblue.com/zengarden/faq/" title="關於Zen Garden的常見問答集。快速鍵：q" accesskey="q"><acronym title="Frequently Asked Questions">FA<span class="accesskey">Q</span></acronym></a> </li>
					<li><a href="http://www.mezzoblue.com/zengarden/submit/" title="傳送你自己的CSS檔案。快速鍵：s" accesskey="s">投稿</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/translations/" title="瀏覽這個頁面的翻譯版本。快速鍵：t" accesskey="t">翻譯文件</a></li>
				</ul>
			</div>
		</div>
	</div>


</div>

<!-- 這些額外的 div/span 可以為你增添想像力。 -->
<!-- 你可以幫它們加上背景圖片，並且透過 width 跟 height 控制尺寸，最後使用絕對定位來放置。 -->
<!-- 這種做法會在 Netscape 6/7 與 Mozilla v1.0 到 v1.3 造成討厭的透明 GIF 色彩偏移問題，所以請務必使用這些瀏覽器測試你的作品。 -->
<div id="extraDiv1"><span></span></div><div id="extraDiv2"><span></span></div><div id="extraDiv3"><span></span></div>
<div id="extraDiv4"><span></span></div><div id="extraDiv5"><span></span></div><div id="extraDiv6"><span></span></div>

</body>
</html>