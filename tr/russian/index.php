<?php

include '../../includes/masterlist.php';
$letterarray = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=windows-1251" />
	<meta name="author" content="Dave Shea" />
	<meta name="keywords" content="design, css, cascading, style, sheets, xhtml, graphic design, w3c, web standards, visual, display" />
	<meta name="description" content="������������ ����, ��� ����� ���� ���������� ��������� ����� ������ �� ���� CSS." />
	<meta name="robots" content="all" />

	<title>��� css-����: ������� � CSS-�������</title>

	<!-- to correct the unsightly Flash of Unstyled Content. http://www.bluerobot.com/web/css/fouc.asp -->
	<script type="text/javascript"></script>
	
	<style type="text/css" title="currentStyle">
		@import "<?php echo $loadCSS; ?>";

	</style>
	<link rel="Shortcut Icon" type="image/x-icon" href="http://www.csszengarden.com/favicon.ico" />	
</head>

<!--

	���� xhtml �������� �������� ����� �������, ����� ���������� ��������� ������������ ��������.
	������������ ������ ������� � �������������� �����, ��� ����������, � � �������� ��������� ��������,
	������ �����, ���� ��� �� ������� ������.
	
	��� �� �����, � ����� ��� ��� �� ����� ����������� � ���, ��� � ��������� ��� ���� �� ��� ����.
	
-->

<body id="css-zen-garden">

<div id="container">
	<div id="intro">
		<div id="pageHeader">
			<h1><span>��� css-����</span></h1>
			<h2><span>������� <acronym title="Cascading Style Sheets">CSS</acronym> �������</span></h2>
		</div>

		<div id="quickSummary">
			<p class="p1"><span>������������ ����, ��� ����� ���� ���������� ��������� ����������� ������� �� ������ <acronym title="Cascading Style Sheets">CSS</acronym>. �������� ����� style sheet �� ������, ����� ��������� ��� � ��� ��������.</span></p>
			<p class="p2"><span>�������� ������ ����� � <a href="/zengarden-sample.html" title="�������� HTML-��� ���� ��������, �������� ����������.">html</a> � � <a href="/zengarden-sample.css" title="������ CSS ��� ���� ��������, ������������� ���.">css</a></span></p>
		</div>

		<div id="preamble">
			<h3><span>������ � ������������</span></h3>
			<p class="p1"><span>����� ����� � ������ ������ �������� ��������� �������&#8211;��������� �����, ������������� <acronym title="Document Object Model">DOM</acronym>-��, � ���������� ��������� <acronym title="Cascading Style Sheets">CSS</acronym>.</span></p>
			<p class="p2"><span>������� �� ������ �������� ��� �� �� �������� ��������. ���-������������ ��� ���������� ��������� ���������� ������� ����� ����� <acronym title="World Wide Web Consortium">W3C</acronym>, <acronym title="Web Standards Project">WaSP</acronym> � ���������� �������� ���������.</span></p>
			<p class="p3"><span>��� css-���� ���������� ��� ������������ � �������������� ��� ������� ������� ��������. ������� ������. ������� (��� ��) ������������� �������� ������� � ����� �������� �����. ������� ����� � �����.</span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="explanation">
			<h3><span>��� � ��� ��� ��?</span></h3>
			<p class="p1"><span>���� ����� ������������� � ���, ����� <acronym title="Cascading Style Sheets">CSS</acronym> ������������� �������� ������������ �����������. ��� css-���� ������� ����������, ����������� � �������� �������. ��� ������ ����������� ������������ ������� �� ������. ���� �� ����� �� ��� �������� style sheet � ��� ����� ��������. ��� ������� ��� ��, ������������ ����, ������� �������� - ��� ������� css-����. ������� �����.</span></p>
			<p class="p2"><span><acronym title="Cascading Style Sheets">CSS</acronym> ��������� ������ � ��������� �������� ��� ������ ��������������� ���������. ������������ ������, ������� ��� ����� ����������������� ���������� ������� - ��� ��������, ��� ����� ���� ����������, ���� ������ ���� � ���� ���, ��� �������� ��������� ���������� �� ������������. �� ��� ���, ����������� �������� ����� ������ ����������������� ���������������� � ��������. ���������� ��� ������ ��������� ����������, � ��� ������ ����������.</span></p>
		</div>

		<div id="participation">
			<h3><span>�������</span></h3>
			<p class="p1"><span>����������, ������ ����������� ���������. �� ������� ��� ��������, ��� ��� ��������� ������������ ������ � <acronym title="Cascading Style Sheets">CSS</acronym>. ��� �� �����, ����� �������� ���������� ������ ����������������, ��� ��� ���� ������� � <acronym title="Cascading Style Sheets">CSS</acronym> ������ ������������ �� � �������� ��������� �����. ����������, �������� �������� �� <a href="http://www.mezzoblue.com/zengarden/resources/" title="������ ���������� � CSS">������������ �� ���������� � <acronym title="Cascading Style Sheets">CSS</acronym></a> ��� ����������� ������� � ��������� �� ������ � <acronym title="Cascading Style Sheets">CSS</acronym>.</span></p>
			<p class="p2"><span>�� ������ ������ style sheet ����� ������ ��������, �� �� �������� <acronym title="HyperText Markup Language">HTML</acronym>. ��� ����� ���������� �����������, ��������, ���� �� ������� ��� ������ �� ��������, �� ���������� �� ������������� ���� �������, ����� ������ ������, � ����������� ������� ��������.</span></p>
			<p class="p3"><span>�������� ������� ������ � <a href="/zengarden-sample.html" title="�������� HTML-��� ���� ��������, �������� ����������.">html</a> � � <a href="/zengarden-sample.css" title="������ CSS ��� ���� ��������, ������������� ���.">css</a>, ��� ������ � ���� ��������. ����� �� ��������� ���� ������ (� ����������, �� ���������� ������������� ������), ��������� ���� .css ���� �� ��������� ��� ���-������. <a href="http://www.mezzoblue.com/zengarden/submit/" title="����������� ����� ��� ��������� ��� ������� ��� ������ CSS �����">�������� ��� ������</a> �� ����, � ���� �� ����� ��� ������������, �� �������� ��������� � ��� ��������. ��������� ������ ����� ��������� �� ����� �������.</span></p>
			<p class="p4"><span>����������: ��������� �����������. ���� �� �������� �������� ��-��������� � �� �����-�� ������ �����, �� ��� ��� ���� ������ ������������� � �������. ����������, <a href="http://www.mezzoblue.com/contact/" title="�������� ��� ������ � ��������� ������, �� ������� �� �������� ��������..">��������� �� ����</a> ������ �������. ���������� <a href="http://mbravo.spb.ru/blog/">�������� �����</a></span></p>
		</div>

		<div id="benefits">
			<h3><span>������</span></h3>
			<p class="p1"><span>����� �����������? ��� ���������, ����������� � �������� �������, �� ������� �� ��� ����� ��������� ��� ����������� ���� ������� �� ������ <acronym title="Cascading Style Sheets">CSS</acronym>. ��� ����������� ����������, ���� �������. ��� ������ � ������ ������� ������ ��������� �� ��� ����������, �� ��� ������������� �� ����� ��� �������. �����-������ ��� ������� ����� ������������ �������� - �� �� �������.</span></p>
		</div>

		<div id="requirements">
			<h3><span>����������</span></h3>
			<p class="p1"><span>�� ������ �� ������ ����������� ��������� ������������� <acronym title="Cascading Style Sheets, version 1">CSS1</acronym>. ������������� <acronym title="Cascading Style Sheets, version 2">CSS2</acronym> ������ ���� ���������� ������ ������ ��������������� ����������. ��� css-���� ������������ ��������������, ������������ <acronym title="Cascading Style Sheets">CSS</acronym>, � �� ��������� ��������� �������� � �����, ������� ����� ������� ������ 2% �����������. ������������ �������� ���������� ����������� � ���, ��� ���  <acronym title="Cascading Style Sheets">CSS</acronym> ������ ��������������.</span></p>
			<p class="p2"><span>� ���������, ��� ������� ����� ������� ���������� � ��������� ����������� <acronym title="Cascading Style Sheets">CSS</acronym> ����������� �������� ������. ������ �������� ���������� ��-�������, ������ ���� ��������� �������� <acronym title="Cascading Style Sheets">CSS</acronym>, � ��� �������� � �������� ������� - ����� ������� ������ ������ ������. ���������� � �������� <a href="http://www.mezzoblue.com/zengarden/resources/" title="������ ���������� �� CSS">�������</a> �� ����������� � ��������� ��������� ������������. ������ ������������ ��������� �� ���, � ���-��, ������ �����, � �� �� ������� �� ��� �����������-������������ ���� ��� ������ ���������. �� ������������� �� �� ���������� �� ����������. ���� ��� ������ �� �������� ���� �� � IE5+/Win � Mozilla (������������ ����� ��� 90% ���������), ������ ����� �� ��� �� ������.</span></p>
			<p class="p3"><span>�� ������, ����� �� ��������� ������������ ����������� ������. ����������, �������� ��������. ����������, ������� ������������ ��������� � ��������: ���������� �� ������ ������ ���������, ����� ����������� ����� ����������.</span></p>
			<p class="p4"><span>��� ��������� ����������, � ����� ������������. �� ���������� ������ �������� �� ���� �������, �� �� ������ ��� ��������� ��� <acronym title="Cascading Style Sheets">CSS</acronym> ��� ��������� Creative Commons, ����������� <a href="http://creativecommons.org/licenses/sa/1.0/" title="����������� ������������ ���������� ���� css-����.">����� �� ���� �����</a>, ����� ������ ����� ������� �� ����� �������.</span></p>
			<p class="p5"><span>������ ������������ ������������� <a href="http://www.mediatemple.net/" lang="en">mediatemple</a></span></p>
		</div>

		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="��������� ���������� XHTML ����� �����">xhtml</a> &nbsp; 
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="��������� ���������� CSS ����� �����">css</a> &nbsp; 
			<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="���������� ����������� �������������� ����� �����, ��������� Creative Commons.">cc</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=sec508&amp;test=" title="��������� ���������� ����� ����� � ������������ � U.S. Section 508">508</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=wcag1-aaa&amp;test=" title="��������� ����������� ����� ����� � ������������ � WAI Content Accessibility Guidelines 1">aaa</a>
		</div>

	</div>

	

	<div id="linkList">
		<!--������ div ��� �������� - ���� ������, ��������, ����� ����� ������� ������ ��� ��� -->
		<div id="linkList2">

		<!-- ���� �� ���������� ��� ������ &nbsp; � ����� ������, �� ��� ��� ��� ������������ ����������� WCAG 1 Accessibility. -->
		<!-- ��� �� �������� ��� ������, �� ��� ���������� ����������. ��� ����������. -->
			<div id="lselect">
				<h3 class="select"><span>�������� ������:</span></h3>
				<!-- ������ ������ ���������� �����. ����� �� ����� 8 ������ �� �������� -->
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
				<h3 class="archives"><span>������:</span></h3>
				<ul>
<?php
					
					$forward = $thisPage + 1;
					$backward = $thisPage - 1;
					
					if ($listStart >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"${thisFile}?cssfile=${currentDesign}&amp;page=${forward}\" title=\"����������� ��������� ����� ��������. AccessKey: n\" accesskey=\"n\">��������� ������� &raquo;</a></li>\n";
					}

					if ($thisPage >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"���������� ���������� ����� ��������. AccessKey: p\" accesskey=\"p\">&laquo;  ���������� �������</a></li>\n";
					}
?>
					<li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="����������� �� ���������� � ��� css-����. AccessKey: w" accesskey="w">����������� ��� �������</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>�������:</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"http://www.csszengarden.com/${currentDesign}\" title=\"���������� �������� CSS-���� ��� �������� �������, AccessKey: v\" accesskey=\"v\">���������� <acronym title=\"Cascading Style Sheets\">CSS</acronym>  �� ����� �������</a></li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources/" title="������ �� �������� ����� � ����������� �� ������������� CSS. AccessKey: r" accesskey="r"><acronym title="Cascading Style Sheets">CSS</acronym>-�������</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/faq/" title="������ ����� ���������� �������� ��� ��� css-����. AccessKey: q" accesskey="q"><acronym title="����� ���������� �������">����</acronym></a>&nbsp;</li>
					<li><a href="http://www.mezzoblue.com/zengarden/submit/" title="���������� ���� CSS ����. AccessKey: s" accesskey="s">�������� ������</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/translations/" title="���������� ����������� ������ ���� ��������. AccessKey: t" accesskey="t">��������</a></li>
				</ul>
			</div>
		</div>
	</div>


</div>

<!-- ��� �������������� divs/spans ����� ���� ������������ ��� ������� �� ��������� ��� ���������� �������������� �������. -->
<!-- �������� � ������� ������� �������� � ����������� ������ � ������ ��� �������� ��������, ���������� ���������� ����������������� -->
<!-- ���� ������ ������� ��� �� ������� ������ � ���������� GIF-�� � ��������� 6/7 � ������� � 1.0 �� 1.3 (� 1.3 ��������),
		��� ��� ����������� ������������� ���� ������ � ���� ���������. -->
<div id="extraDiv1"><span></span></div><div id="extraDiv2"><span></span></div><div id="extraDiv3"><span></span></div>
<div id="extraDiv4"><span></span></div><div id="extraDiv5"><span></span></div><div id="extraDiv6"><span></span></div>




</body>
</html>