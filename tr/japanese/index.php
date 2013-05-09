<?php

$loadCSS = "/001/001-jp.css";
include '../../includes/masterlist.php';
$letterarray = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=shift_jis" />
	<meta name="author" content="Dave Shea" />
	<meta name="keywords" content="design, css, cascading, style, sheets, xhtml, graphic design, w3c, web standards, visual, display, �f�U�C��, �X�^�C���V�[�g, �O���t�B�b�N�f�U�C��, �E�F�u�X�^���_�[�h, �r�W���A��" />
	<meta name="description" content="CSS ���g���Ď��o�I�ɂǂ�ȃf�U�C�����ł��邩�̗�" />
	<meta name="robots" content="all" />
	<title>css Zen Garden�FCSS �f�U�C���̔�</title>

	<!-- ��u�X�^�C���V�[�g�̓K�p����Ă��Ȃ� HTML �������Ă��܂��̂�h�����߁B http://www.bluerobot.com/web/css/fouc.asp -->
	<script type="text/javascript"></script>
	
	<style type="text/css" title="currentStyle">
		@import "<?php echo $loadCSS; ?>";
	</style>
	<link rel="Shortcut Icon" type="image/x-icon" href="http://www.csszengarden.com/favicon.ico" />	
	<link rel="alternate" type="application/rss+xml" title="RSS" href="http://www.csszengarden.com/zengarden.xml" />
</head>

<!--


	���� xhtml �����̓f�U�C�i�[�ɍő���̏_���^����悤�ɏ�����Ă��܂��B
	������A�K�v�ȏ�� classes �� tag���w�肵�Ă���܂��B���ۂɂ͂����ƃR���p�N�g�ȃR�[�h�ɂł���\�����������ǁA�]���ȃ^�O������ɂ������ăe�[�u�����g�����ꍇ��肸���Ƃ܂����Ă����̂͂��Ȃ����Ă��炦��񂶂�Ȃ����ȁH


-->

<body id="css-zen-garden">

<div id="container">
	<div id="intro">
		<div id="pageHeader">
			<h1><span>css Zen Garden</span></h1>
			<h2><span><acronym title="�J�X�P�[�f�B���O�E�X�^�C���V�[�g">CSS</acronym> �f�U�C���̔�</span></h2>
		</div>

		<div id="quickSummary">
			<p class="p1"><span><acronym title="�J�X�P�[�f�B���O�E�X�^�C���V�[�g">CSS</acronym> ���g�����f�U�C���Ŏ��o�I�ɂǂ�Ȃ��Ƃ��ł��邩�̗�ł��B���X�g����X�^�C���V�[�g��I�����Ă��̃y�[�W�ɓK�p���Ă݂Ă��������B</span></p>
			<p class="p2"><span><a href="/zengarden-sample.html" title="���̃y�[�W�� HTML �\�[�X�R�[�h�A���ϕs��">html����</a>��<a href="/zengarden-sample.css" title="���̃y�[�W�̃T���v�� CSS�A���ω�">�T���v��css����</a>���_�E�����[�h�B</span></p>
		</div>

		<div id="preamble">
			<h3><span>���ւ̓�</span></h3>
			<p class="p1"><span>����u���E�U����̃^�O�A�݊����̂Ȃ� <acronym title="�h�L�������g�E�I�u�W�F�N�g���f��">DOM</acronym>�A�g���Ȃ� <acronym title="�J�X�P�[�f�B���O�E�X�^�C���V�[�g">CSS</acronym> �T�|�[�g�Ƃ������ߋ��̈╨���Â��r���Ƃ����E�F�u�̏������U�炩���Ă���̂����݂̏�Ԃł��B</span></p>
			<p class="p2"><span>�����A�������͉ߋ��̂�肩���𓪂����������Ȃ���΂����܂���B�E�F�u�̌��́A<acronym title="���[���h���C�h�E�F�u�E�R���\�[�V�A��">W3C</acronym>�A<acronym title="�E�F�u�X�^���_�[�h�E�v���W�F�N�g">WaSP</acronym>�A�����đ��u���E�U���[�J�[�Ƃ������l�����̐₦�܂���w�͂̂������ŒB���Ɏ���܂����B</span></p>
			<p class="p3"><span>css Zen Garden �͒B�l�̑厖�ȋ����ɂ��Ă��������ґz���邱�Ƃ��������߂��܂��B���񂾐S�ł��̂��Ƃ����A�V�����p���t���ȁi�����́j�`���I�Z�p���w�т܂��傤�B�E�F�u�ƈ�̉�����̂ł��B</span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="explanation">
			<h3><span>���̃T�C�g���ĉ��̂��߂ɂ���́H</span></h3>
			<p class="p1"><span>�O���t�B�b�N�f�U�C�i�[�� <acronym title="�J�X�P�[�f�B���O�E�X�^�C���V�[�g">CSS</acronym> ��^���ɂƂ炦��K�v�����m���ɑ��݂��܂��BZen Garden �̑_���́A�݂�Ȃ��������A�n��ӗ~���������āA�Q�����܂����ƁB�Ƃ肠�����A���łɃ��X�g�ɂ̂��Ă���f�U�C�������Ă݂Ă��������B�N���b�N����ƁA���̃X�^�C���V�[�g�����̃y�[�W���̂��̂ɒ��ړK�p����܂��B�y�[�W���̂̃R�[�h�͂��̂܂܂ŁA�����N���ꂽ�X�^�C���V�[�g���ς�邾���B����A�z���g�ɁB</span></p>
			<p class="p2"><span><acronym title="�J�X�P�[�f�B���O�E�X�^�C���V�[�g">CSS</acronym> �̓n�C�p�[�e�L�X�g�����̊��S�Ńg�[�^���ȃR���g���[���������炵�Ă����B������������̂ɂ݂�Ȃ���������������悤�ȕ��@�Ƃ�������A���ۂ���Ă݂��邵���Ȃ��B���̃T�C�g�́A�\��������𐶂ݏo�����Ƃ̂ł���l�����̎�ɂ���������A�E�F�u�̐^�̎p���ǂ�Ȃ��̂ɂȂ蓾�邩�̃f�����X�g���[�V�����ł��B
�����܂ŁA�����������Z�Ƃ��e�N�j�b�N�̑����́A�\�����̃R�[�h���̂���ɂ���l�X�ɂ���ďЉ��Ă��Ă��܂��B�f�U�C�i�[�̏o�Ԃ͂܂��̂悤�ł��B���̎����͕ς��Ȃ��Ⴂ���܂���B
</span></p>
		</div>

		<div id="participation">
			<h3><span>�Q��</span></h3>
			<p class="p1"><span>�O���t�B�b�N�A�[�e�B�X�g�ȊO�͂��f��B 
���̃y�[�W�����������Ă���񂾂���A<acronym title="�J�X�P�[�f�B���O�E�X�^�C���V�[�g">CSS</acronym> �͎g�����Ȃ��Ȃ��ƃ_�������ǁA�f�U�C����͂킩��₷���R�����g������Ă��邩�� <acronym title="�J�X�P�[�f�B���O�E�X�^�C���V�[�g">CSS</acronym> ���S�҂ł���������n�߂���悤�ɂȂ��Ă��܂��B<acronym title="�J�X�P�[�f�B���O�E�X�^�C���V�[�g">CSS</acronym> �Ɋւ��Ă̏㋉�e�N�j�b�N�`���[�g���A���Ƃ��R�c�ɂ��Ă� <a href="http://www.mezzoblue.com/zengarden/resources/" title="CSS �֌W�̃����N�W"><acronym title="�J�X�P�[�f�B���O�E�X�^�C���V�[�g">CSS</acronym> �֘A���K�C�h</a>�����Ќ��Ă݂Ă��������B</span></p>
			<p class="p2"><span>�X�^�C���V�[�g�͂ǂꂾ���������Ă����܂�Ȃ����ǁA<acronym title="�n�C�p�[�e�L�X�g�E�}�[�N�A�b�v����">HTML</acronym> �͐G��Ȃ��ŗ~�����B������Ă�������Ƃ̂Ȃ��l�͏��߂͎苭���Ǝv����������Ȃ��B�ł��A�Љ�Ă��郊���N���Q�l�ɁA�m��Ȃ����Ƃ��ǂ�ǂ�w��ŁA�T���v���𐶂����ĐF�X�����Ă݂Ă��������B</span></p>
			<p class="p3"><span>�T���v�� <a href="zengarden-sample.html" title="���̃y�[�W�� HTML �\�[�X�R�[�h�A���ϕs��">html ����</a> �� <a href="zengarden-sample.css" title="���̃y�[�W�̃T���v�� CSS�A���ω�">css ����</a> ���_�E�����[�h���āA�R�s�[������ėV��ł݂Ă��������B���삪����������A�i���肢�F�������Ȃ��̂͒�o���Ȃ��łˁB�j.css �����������̃T�[�o�[�ɃA�b�v���[�h���܂��B���������炻�̃t�@�C���ւ�<a href="http://www.mezzoblue.com/zengarden/submit/" title="�R���^�N�g�E�t�H�[�����g���� css �����𑗂��Ă��������B">�����N�𑗂��Ă�������</a>�B�������̃f�U�C�����I�΂ꂽ��A�֘A�̉摜�Ɍ����������܂��B�ŏI�I�ɂ͎������̃T�[�o�[�֒u�����Ă��炢�܂��B</span></p>
			<p class="p4"><span>�A�b�v�f�[�g�F�|�󂵂Ă����l���W���Ă��܂��B�p��Ƃ��̑��̌���ɗ����Ȃ��Ȃ��A�|�󂷂邱�Ƃ����̃v���W�F�N�g�ɎQ������ЂƂ̕��@�ł��B�ڂ����́i�p��Łj<a href="http://www.mezzoblue.com/contact/" title="�ǂ̌���ɖ|��ł��邩�A���[���Œm�点�Ă��������B">���[������������</a> �B���{���F<a href="http://www.myudesign.com/contact/" title="�|��ҁA�������V�̃T�C�g��">�������V�i�܂䂤�j</a> Japanese Translation by <a href="http://www.myudesign.com" title="Go to the translator's site">Mayu Shimizu</a></span></p>
		</div>

		<div id="benefits">
			<h3><span>���T</span></h3>
			<p class="p1"><span>���̂��߂ɎQ�����邩�H���O�𔄂邽�߁A�������󂯂邽�߁A������ <acronym title="�J�X�P�[�f�B���O�E�X�^�C���V�[�g">CSS</acronym> ���g�����f�U�C���̑��i�̂��߁A�݂�Ȃ̏�񌹂ƂȂ�����邽�߁B
			����͍����݂ł��܂��K�v�ł��B�X�^�C���V�[�g���g�����f�U�C���ւƈڍs������Ƃ��ǂ�ǂ񑝂��Ă͂��܂����A�܂��܂����Ȃ�����B�������̃M�������[���A����Ȏ��݂����������΂�������ˁA�ƌ�������̂ɕς���������ł��傤�B�ł�����͂܂���̂��ƁB</span></p>
		</div>

		<div id="requirements">
			<h3><span>�K�v�����F</span></h3>
			<p class="p1"><span>�ł��邾�� <acronym title="�J�X�P�[�f�B���O�E�X�^�C���V�[�g�A���x��1">CSS1</acronym> �����p���Ă��������B
			<acronym title="�J�X�P�[�f�B���O�E�X�^�C���V�[�g�A���x��2">CSS2</acronym> �͍L���T�|�[�g����Ă���v�f�݂̂ɗ}���܂��傤�B
			css Zen Garden �̖ړI�͋@�\�I�Ŏ��p�I�� <acronym title="�J�X�P�[�f�B���O�E�X�^�C���V�[�g">CSS</acronym> ���g�����ƂŁA�����̓T�C�g���[�U�[��2%�������邱�Ƃ̂ł��Ȃ��Ő�[�Z�p�������邽�߂̏ꏊ�ł͂���܂���B
			�B��̎��ۂ̕K�v�����́A<acronym title="�J�X�P�[�f�B���O�E�X�^�C���V�[�g">CSS</acronym> ���X�^���_�[�h�ɏ������Ă��邱�Ƃł��B</span></p>
			<p class="p2"><span>�c�O�Ȃ��ƂɁA���̂����Ńf�U�C�����邱�Ƃ� <acronym title="�J�X�P�[�f�B���O�E�X�^�C���V�[�g">CSS</acronym> �̗l�X�ȃT�|�[�g�̌��ׂ𕂂��������邱�ƂɂȂ���܂��B������u���E�U�͈�����\�������邵�A�X�^���_�[�h�ɂ����Ə������Ă��� <acronym title="�J�X�P�[�f�B���O�E�X�^�C���V�[�g">CSS</acronym> �ł����A���ɂ̓u���E�U�ɂ���ĈقȂ����\�������܂��B�ЂƂ̉�ꂽ�����̏C�������̌̏�ɂȂ��鎞�A����͂ǂ����悤���Ȃ���ԂɂȂ�܂��B ������̂������ɂ��ẮA<a href="http://www.mezzoblue.com/zengarden/resources/" title="CSS �֘A�̎������X�g">�֘A���K�C�h</a>�y�[�W���������������B�����ȃu���E�U�����͂��܂��ɖ��̂܂����Ƃ������Ƃ����邵�A���ׂẴ}�V���ň�s�N�Z���̂�����Ȃ����S�ȃR�[�h�����҂��Ă���킯�ł�����܂���B�ł��A�ł��邾�������̃u���E�U�Ńe�X�g���ė~�����B���Ȃ��Ƃ� IE5+�E�B���h�E�Y�ł� Mozilla �i���킹�Đl����90%�ȏオ�g�p�A�j�ł��܂��\������Ȃ��f�U�C���́A�����ł͎󂯂����܂���B</span></p>
			<p class="p3"><span>�I���W�i���̍�i���o����悤���肢���܂��B���쌠�����܂��傤�B����ǂ����͍̂ŏ����ɂ������Ă��������B�Ⴆ�Ό|�p�I�ȃk�[�h�̓Z�[�t�ł����A�����炳�܂ȃ|���m�͋p������܂��B</span></p>
			<p class="p4"><span>�����͎����̏�ł���ƂƂ��Ɋw�K�̏�A���K���邽�߂̏ꏊ�ł�����܂��B
			��o���ꂽ�摜�̒��쌠�͂��ׂĂ��Ȃ��ɑ����܂����A<acronym title="�J�X�P�[�f�B���O�E�X�^�C���V�[�g">CSS</acronym> �̒��쌠�͑��̐l�����Ȃ��̍�i����w�Ԃ��Ƃ��ł���悤�ɁACreative Commons �̃��C�Z���X�̌��ɕ������邱�Ƃ����肢���Ă��܂��B
<a href="http://creativecommons.org/licenses/sa/1.0/" title="Zen Garden �̒��쌠��������B">Zen Garden �̒��쌠</a>������Ɋ�Â��Ă��܂��B </span></p>
			<p class="p5"><span>�o���h�E�B�Y�� <a href="http://www.mediatemple.net/" lang="en">mediatemple</a>���炠�肪�������������Ă��܂��B</span></p>
		</div>

		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="���̃T�C�g�� XHTML �̃X�^���_�[�h�����x���`�F�b�N">xhtml</a> &nbsp; 
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="���̃T�C�g�� CSS �̃X�^���_�[�h�����x���`�F�b�N">css</a> &nbsp; 
			<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="Creative Commons �Ɋ�Â����̃T�C�g�̒��쌠�̏ڍׂ�����">cc</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=sec508&amp;test=" title="���̃T�C�g�� U.S. �Z�N�V����508�ɏ]�����A�N�Z�V�r���e�B�x���`�F�b�N">508</a> &nbsp;
			<a href="http://www.mezzoblue.com/zengarden/faq/#aaa" title="���̃T�C�g��  WAI �R���e���g�K�C�h���C��1�ɏ]�����A�N�Z�V�r���e�B�x���`�F�b�N">aaa</a>
		</div>

	</div>

	
	<div id="linkList">
		<!-- �t���L�V�u���ɂ��邽�߂̗]���� div �c���̃��X�g�����Ԃ��Ԃ��ɂ����Ƃ�����Ȃ����� -->
		<div id="linkList2">

		<!-- �����N�̌�̗]���� &nbsp; �́A WCAG 1 �A�N�Z�V�r���e�B���N���A���邽�߂̃g���b�N�ł� -->
		<!-- ����Ȃ��Ƃ������͂Ȃ����ǁA����͎��o�I�ȗV�т̏ꂾ����A�����������Ë����d���Ȃ���� -->
			<div id="lselect">
				<h3 class="select"><span>�f�U�C����I���F</span></h3>
				<!-- �����N�̃��X�g�͂�������B��y�[�W�ɂ������N��8�ȉ� -->
				<ul>
<?php
					$c = 0;
					for ($a = ($listStart + 1); $a <= $listEnd; $a++) {
						$b = $listEnd - $c;
						$d = $letterarray[$c];
						$tempLink = linkMe($filename[$b]);
						echo "\t\t\t\t\t";
						echo "<li><a href=\"?cssfile=/${tempLink}/${tempLink}.css&amp;page=${thisPage}\" title=\"�A�N�Z�X�L�[�F ${d}\" accesskey=\"${d}\">${styleName[$b]}</a> by <a href=\"${styleURL[$b]}\" class=\"c\">${styleCreator[$b]}</a></li>";
						echo "\n";
						$c = $c + 1;
					}

?>
				</ul>
			</div>

			<div id="larchives">
				<h3 class="archives"><span>Archives:</span></h3>
				<ul>
<?php
					
					$forward = $thisPage + 1;
					$backward = $thisPage - 1;
					
					if ($listStart >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"${thisFile}?cssfile=${currentDesign}&amp;page=${forward}\" title=\"���̃f�U�C���Z�b�g������B�A�N�Z�X�L�[�Fn\" accesskey=\"n\">���̃f�U�C�������� &raquo;</a></li>\n";
					}

					if ($thisPage >= 1) {

						echo "\t\t\t\t\t";
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"View previous set of designs. AccessKey: p\" accesskey=\"p\">&laquo; <span class=\"accesskey\">p</span>revious designs</a></li>\n";
					}
?>
					<li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="Zen Garden �̍�i���ׂĂ�����B�A�N�Z�X�L�[�Fw" accesskey="w">�S�f�U�C��������</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>Resources:</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"${currentDesign}\" title=\"���I��ł���f�U�C���� CSS �\�[�X������B�A�N�Z�X�L�[�Fv\" accesskey=\"v\">���̃f�U�C���� <acronym title=\"�J�X�P�[�f�B���O�E�X�^�C���V�[�g\">CSS</acronym> ������</a></li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources/" title="CSS �Ɋւ��邨�����ߏ��T�C�g�ւ̃����N�B�A�N�Z�X�L�[�Fr" accesskey="r"><acronym title="�J�X�P�[�f�B���O�E�X�^�C���V�[�g">CSS</acronym> �֘A���K�C�h</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/faq/" title="Zen Garden �Ɋւ��Ă悭�u����鎿��W�B�A�N�Z�X�L�[�Fq" accesskey="q"><acronym title="�悭���鎿��Ɖ�">FA<span class="accesskey">Q</span></acronym></a>&nbsp;</li>
					<li><a href="http://www.mezzoblue.com/zengarden/sendfile/" title="�I���W�i�� CSS �����𑗂낤�B�A�N�Z�X�L�[�Fs" accesskey="s">�f�U�C���𑗕t</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/translations/" title="���̃y�[�W�̖|�󂳂ꂽ�o�[�W����������B�A�N�Z�X�L�[�Ft" accesskey="t">�|��</a></li>
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