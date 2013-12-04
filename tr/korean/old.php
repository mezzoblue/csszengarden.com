<?php

include '../../includes/masterlist.php';
$letterarray = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Dave Shea" />
	<meta name="keywords" content="design, css, cascading, style, sheets, xhtml, graphic design, w3c, web standards, visual, display" />
	<meta name="description" content="A demonstration of what can be accomplished visually through CSS-based design." />
	<meta name="robots" content="all" />
	<title>css Zen Garden: CSS 디자인의 미	</title>

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
			<h1><span>css Zen Garden</span></h1>
			<h2><span>CSS 디자인의 미	</span></h2>
		</div>

		<div id="quickSummary">
			<p class="p1">CSS  를 기반으로 하는 디자인의 시각 표현입니다.
			  아래의 스타일 리스트 중 하나를 선택해서 보실 수 있읍니다. </p>
			<p class="p2"><span><a href="/zengarden-sample.html" title="This page's source HTML code, not to be modified.">html file</a> 과 <a href="/zengarden-sample.css" title="This page's sample CSS, the file you may modify.">css file </a> 을 다운로드 하십시요.</span></p>
		</div>

		<div id="preamble">
			<h3>진보의 길</h3>
			<p class="p1"><span>과거의 브라우저-특정 태그, 모순되 DOM, 고장난 SCC 서포트 -의 유물들은 어둡고 음울한 길에 놓여있다</span></p>
			<p class="p2"><span>오늘날 우리는, 과거의 것들을 정리해야 한다. 웹 진보는 W3C, WaSP 그리고 주 브라우저 창조자들의 지칠 줄 모르는 수고 덕분에 이루어
			    져 왔다. .</span></p>
			<p class="p3"><span>Css Zen Garden은 사부들의  안정과 명상속의 중요한 가르침에 당신을 초대한다. 명백히 보기 시작하라. 새롭고 활기찬 기술로 잘 알려진
			    시간활용법을 배우라. 웹과함께 하나가 되자.</span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="explanation">
			<h3><span>그러면, 과연 무엇인가?</span></h3>
			<p class="p1"><span>그래픽 디자이너들은 CSS를 심각하게 필요로 한다. Zen Garden은 재미, 영감, 그리고 참가의식을 북돋는 것을 목표로 한다. 시작함에
			    있어, 현존하는 디자인들을 리스트에 담았다. 이중 어느 한가지를 클릭하면 이 페이지 속으로 스타일 시트가
			    시작 될 것이다. 코드는 그대로이되, 외부 css 파일이 바뀔 것이다.정말로.</span></p>
			<p class="p2"><span><acronym title="Cascading Style Sheets">CSS</acronym> 는 하이퍼 텍스트 도큐먼트의스타일을 완전히 조정한다. 사람들이 흥미로울수 있도록 설명할 수 있는 오로지 한가지 길은, 무엇이 진정 될수
			    있는지를 실연하는 것이며,  이로 부터 아름다움을 창조할 수 있는 사람들에게 일단 고삐가 손에 잡히게 되는 것이다.
			    오늘날까지, 깔끔한 비법의 대부분은 스트럭쳐리스트와 코더들에의해 실연되어져 왔다. 이는 바뀔 필요가 있다.</span></p>
		</div>

		<div id="participation">
			<h3>참가자</h3>
			<p class="p1"><span>오로지 그래픽 아티스트만을 모집한다. 당신은 이 페이지를 수정할 것이므로 강한 CSS 기술이필요하다. 하지만, 예시 파일은 CSS 초심자까지도
			    시작점으로써 사용할 수 있을만큼 잘 설명되어져 있다.CSS 와 함께 일할 수 있는 진보된 지도와 팁이 <a href="http://www.mezzoblue.com/zengarden/resources.asp" title="A listing of CSS-related resources"><acronym title="Cascading Style Sheets">CSS</acronym> Resource Guide</a>에 나와 있다. </span></p>
			<p class="p2"><span>당신은 마음대로 스타일 시트를 수정할 수 있다. 그러나 HTML은 아니다.  이런식으로 일한 적이 없다면, 처음에는  어려움을 느낄지 모르나,
			    더 배우기 위해서는 아래 리스트의 링크들을 따르고 예시 파일들을 가이드로 이용하라.</span></p>
			<p class="p3"><span>샘플<a href="/zengarden-sample.html" title="This page's source HTML code, not to be modified.">html file</a> 과<a href="/zengarden-sample.css" title="This page's sample CSS, the file you may modify.">css file</a> 을 다운로드 해서 작업하라. 일단 당신의 완성작이 만들어지면 당신의.css 파일을 웹 서버에 업로드 하라. (미완성 작품은 제출 불가능)			    <a href="http://www.mezzoblue.com/zengarden/sendfile.asp" title="Use the contact form to send us your CSS file">Send us a link</a> 에 파일을 보내고 만일 우리가 사용하기로 선택하면, 관련된 이미지를 사용할 것이다. 최종 제출은 우리 서버에 배치될 것이다. </span></p>
			<p class="p4"><span>업데이트: 우리는 번역가를 찾고 있다. 만일 영어와 다른 언어에도 능숙하다면, 이또한 우리에게 참가할 수 있는 방법이다. 자세한 사항은 <a href="http://www.mezzoblue.com/contact/" title="Send me an e-mail mentioning which languages you are fluent in.">contact me</a> 로. This translation by <a href="http://www.sozoweb.com/">Sohyun Westin</a>.</span></p>
	  </div>

		<div id="benefits">
			<h3>이익</h3>
			<p class="p1"><span>왜 참가하는가? 인식을 위해, 영감을 위해, 그리고 CSS 디자인의 작업에 있어 우리모두가 참조할 수 있는 자료가 되기 위해서이다. 오늘날
			    까지도 이는 매우 필요하다. 주 메이저 사이트들이 더욱더 도약하고 있지만, 아직 충분치 않다. 오늘은 아닐지라도,
		    언젠가는 이곳 겔러리가 역사적인 곳으로 될 날이 올것이다.</span></p>
	  </div>

		<div id="requirements">
			<h3>요구사항</h3>
			<p class="p1"><span>우리는 가능한 최대한의 CSS1을 보고싶어한다. CSS2는 광범위한 원칙만으로 제한되어야 한다. Css Zen Garden
			    은 기능적인, 실용적인 CSS 그리고 최근의 골칫거리만이 결코 아닌 공공 브라우징의 2%에 의해
			    볼수 있는 날카로운 수법에 관한 것이다. 우리가 요구하는 진정한 요구사항은 당신의 CSS 유효성이다. </span></p>
			<p class="p2"><span>이런식으로 하는 것은,  안타깝게도 CSS의 다양한 수행의 결점들을 두드러지게 한다. 브라우저들의 종류가 다르면 표현도 다르게 된다.
			    심지어 완전 유효한 CSS도 때때로 그렇다. 한곳에서의 수정이 다른 망가진 하나로 이어질때 격노하게 된다. 몇몇
			    가능한 수정에 대한 정보를 위해서 <a href="http://www.mezzoblue.com/zengarden/resources.asp" title="A listing of CSS-related resources">Resources</a> 를 보라. 모든 부라우저에서의 응낙은 때로는 여전히 먼 꿈이기에, 우리는 모든 플래폼을 가로질러 완벽한 코드-픽셀과 같은 것을 기대하지
			    않는다. 그러나 될수 있는한 많은 테스트를 하라. 만일 당신의 디자인이 적어도 IE5+/Win 과 Mozilla
			    에서 나타나지 않으면, 받아지지 않을 것이다. (90% 이상의 사람들이 사용함)</span></p>
			<p class="p3"><span>우리는 당신만의 창조작업을 요구한다. 저작권을 유념하라. 이의의 여지가 있는 재료는 최소화 하라. 고상한 누드는 받아들여지나, 노골적 포르노그래프는
			    제지한다.</span></p>
			<p class="p4"><span>이는 실연임과 동시에 배우는 과정의 연습이기도 하다. 당신은 당신의 그래프에 모든 저작권을 보유할 수 있으나, 다른 이들도 당신의 작업을
			    통해 배울 수 있도록 하기 위해. <a href="http://creativecommons.org/licenses/sa/1.0/" title="View the Zen Garden's license information.">one on this site</a> 과 동일한 공동 자격하의 당신의 CSS를 개방하도록 한다.</span></p>
			<p class="p5"><span><a href="http://www.mediatemple.net/" lang="en">mediatemple</a> 제공</span></p>
	  </div>

		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="Check the validity of this site&#8217;s XHTML">xhtml</a> &nbsp; 
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="Check the validity of this site&#8217;s CSS">css</a> &nbsp; 
			<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="View details of the license of this site, courtesy of Creative Commons.">cc</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=sec508&amp;test=" title="Check the accessibility of this site according to U.S. Section 508">508</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=wcag1-aaa&amp;test=" title="Check the accessibility of this site according to WAI Content Accessibility Guidelines 1">aaa</a>
		</div>

	</div>

	
	<div id="linkList">
		<div id="linkList2">
			<div id="lselect">
				<h3 class="select"><span>디자인 선택:</span></h3>
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
				<h3 class="archives"><span>공적 기록:</span></h3>
				<ul>
<?php
					
					$forward = $thisPage + 1;
					$backward = $thisPage - 1;
					
					if ($listStart >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"${thisFile}?cssfile=${currentDesign}&amp;page=${forward}\" title=\"View next set of designs. AccessKey: n\" accesskey=\"n\"><span class=\"accesskey\">n</span>ext designs &raquo;</a></li>\n";
					}

					if ($thisPage >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"View previous set of designs. AccessKey: p\" accesskey=\"p\">&laquo; <span class=\"accesskey\">p</span>revious designs</a></li>\n";
					}
?>
					<li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="View every submission to the Zen Garden. AccessKey: w" accesskey="w">Vie<span class="accesskey">w</span> All Designs</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>자료:</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"http://www.csszengarden.com/${currentDesign}\" title=\"View the source CSS file for the currently-viewed design, AccessKey: v\" accesskey=\"v\"><span class=\"accesskey\">V</span>iew This Design&#8217;s <acronym title=\"Cascading Style Sheets\">CSS</acronym></a></li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources/" title="Links to great sites with information on using CSS. AccessKey: r" accesskey="r">디자인의 CSS 보기</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/faq/" title="A list of Frequently Asked Questions about the Zen Garden. AccessKey: q" accesskey="q"><acronym title="Frequently Asked Questions">FA<span class="accesskey">Q</span></acronym></a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/submit/" title="Send in your own CSS file. AccessKey: s" accesskey="s">디자인 제출</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/translations/" title="View translated versions of this page. AccessKey: t" accesskey="t">번역</a></li>
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