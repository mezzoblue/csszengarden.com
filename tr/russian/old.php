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
	<meta name="description" content="Демонстрация того, что может быть достигнуто визуально через дизайн на базе CSS." />
	<meta name="robots" content="all" />

	<title>Сад css-Дзен: Красота в CSS-дизайне</title>

	<!-- to correct the unsightly Flash of Unstyled Content. http://www.bluerobot.com/web/css/fouc.asp -->
	<script type="text/javascript"></script>
	
	<style type="text/css" title="currentStyle">
		@import "<?php echo $loadCSS; ?>";

	</style>
	<link rel="Shortcut Icon" type="image/x-icon" href="http://www.csszengarden.com/favicon.ico" />	
</head>

<!--

	Этот xhtml документ размечен таким образом, чтобы обеспечить дизайнеру максимальную гибкость.
	Присутствует больше классов и дополнительных тэгов, чем необходимо, и в реальной жизненной ситуации,
	скорее всего, файл был бы гораздо меньше.
	
	Тем не менее, я думаю что все мы можем согласиться с тем, что с таблицами все было бы еще хуже.
	
-->

<body id="css-zen-garden">

<div id="container">
	<div id="intro">
		<div id="pageHeader">
			<h1><span>Сад css-Дзен</span></h1>
			<h2><span>Красота <acronym title="Cascading Style Sheets">CSS</acronym> дизайна</span></h2>
		</div>

		<div id="quickSummary">
			<p class="p1"><span>Демонстрация того, что может быть достигнуто визуально посредством дизайна на основе <acronym title="Cascading Style Sheets">CSS</acronym>. Выберите любой style sheet из списка, чтобы загрузить его в эту страницу.</span></p>
			<p class="p2"><span>Скачайте пример файла с <a href="/zengarden-sample.html" title="Исходный HTML-код этой страницы, оставьте неизменным.">html</a> и с <a href="/zengarden-sample.css" title="Пример CSS для этой страницы, модифицируйте его.">css</a></span></p>
		</div>

		<div id="preamble">
			<h3><span>Дорога к Просветлению</span></h3>
			<p class="p1"><span>Вдоль тёмной и унылой дороги валяются пережитки браузер&#8211;зависимых тэгов, несовместимых <acronym title="Document Object Model">DOM</acronym>-ов, и поломанной поддержки <acronym title="Cascading Style Sheets">CSS</acronym>.</span></p>
			<p class="p2"><span>Сегодня мы должны очистить наш ум от практики прошлого. Веб-просветление уже достигнуто благодаря неустанным усилиям людей вроде <acronym title="World Wide Web Consortium">W3C</acronym>, <acronym title="Web Standards Project">WaSP</acronym> и создателей основных браузеров.</span></p>
			<p class="p3"><span>Сад css-Дзен приглашает вас расслабиться и помедитировать над важными уроками мастеров. Начните видеть. Изучите (ещё не) подтверждённые временем техники в новом бодрящем свете. Станьте едины с вебом.</span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="explanation">
			<h3><span>Так о чем это всё?</span></h3>
			<p class="p1"><span>Есть явная необходимость в том, чтобы <acronym title="Cascading Style Sheets">CSS</acronym> воспринимался серьёзно графическими дизайнерами. Сад css-Дзен намерен пробуждать, вдохновлять и поощрять участие. Для начала просмотрите существующие дизайны из списка. Клик на любом из них загрузит style sheet в эту самую страницу. Код остаётся тем же, единственная вещь, которая меняется - это внешний css-файл. Честное слово.</span></p>
			<p class="p2"><span><acronym title="Cascading Style Sheets">CSS</acronym> разрешает полный и тотальный контроль над стилем гипертекстового документа. Единственный способ, которым это можно проиллюстрировать интересным образом - это показать, что может быть достигнуто, если отдать руль в руки тем, кто способен создавать прекрасное из структурного. До сих пор, большинство примеров клёвых штучек демонстрировались структуралистами и кодерами. Дизайнерам ещё только предстоит отметиться, и это должно измениться.</span></p>
		</div>

		<div id="participation">
			<h3><span>Участие</span></h3>
			<p class="p1"><span>Пожалуйста, только графические дизайнеры. Вы правите эту страницу, так что требуются существенные навыки в <acronym title="Cascading Style Sheets">CSS</acronym>. Тем не менее, файлы примеров достаточно хорошо откомментированы, так что даже новички в <acronym title="Cascading Style Sheets">CSS</acronym> смогут использовать их в качестве отправной точки. Пожалуйста, обратите внимание на <a href="http://www.mezzoblue.com/zengarden/resources/" title="Список материалов о CSS">Путеводитель по материалам о <acronym title="Cascading Style Sheets">CSS</acronym></a> для продвинутых пособий и подсказок по работе с <acronym title="Cascading Style Sheets">CSS</acronym>.</span></p>
			<p class="p2"><span>Вы можете менять style sheet каким угодно способом, но не трогайте <acronym title="HyperText Markup Language">HTML</acronym>. Это может показаться устрашающим, поначалу, если вы никогда так раньше не работали, но пройдитесь по перечисленным выше ссылкам, чтобы узнать больше, и пользуйтесь файлами примеров.</span></p>
			<p class="p3"><span>Скачайте примеры файлов с <a href="/zengarden-sample.html" title="Исходный HTML-код этой страницы, оставьте неизменным.">html</a> и с <a href="/zengarden-sample.css" title="Пример CSS для этой страницы, модифицируйте его.">css</a>, для работы с ними локально. Когда вы закончите свой шедевр (и пожалуйста, не присылайте незаконченные работы), закачайте свой .css файл на доступный вам веб-сервер. <a href="http://www.mezzoblue.com/zengarden/submit/" title="Используйте бланк для контактов для отсылки нам вашего CSS файла">Пришлите нам ссылку</a> на файл, и если мы решим его использовать, мы выкачаем связанные с ним картинки. Финальные работы будут размещены на нашем сервере.</span></p>
			<p class="p4"><span>Дополнение: требуются переводчики. Если вы свободно говорите по-английски и на каком-то другом языке, то это ещё один способ поучаствовать в проекте. Пожалуйста, <a href="http://www.mezzoblue.com/contact/" title="Пришлите мне письмо с указанием языков, на которых вы свободно говорите..">свяжитесь со мной</a> насчёт деталей. Переведено <a href="http://mbravo.spb.ru/blog/">Михаилом Браво</a></span></p>
		</div>

		<div id="benefits">
			<h3><span>Выгоды</span></h3>
			<p class="p1"><span>Зачем участвовать? Для признания, вдохновения и создания ресурса, на который мы все можем ссылаться при продвижении идеи дизайна на основе <acronym title="Cascading Style Sheets">CSS</acronym>. Это чрезвычайно необходимо, даже сегодня. Все больше и больше крупных сайтов переходят на эту технологию, но еще недостаточное их число уже перешло. Когда-нибудь эта галерея будет историческим курьёзом - но не сегодня.</span></p>
		</div>

		<div id="requirements">
			<h3><span>Требования</span></h3>
			<p class="p1"><span>Мы хотели бы видеть максимально возможное использование <acronym title="Cascading Style Sheets, version 1">CSS1</acronym>. Использование <acronym title="Cascading Style Sheets, version 2">CSS2</acronym> должно быть ограничено только широко поддерживаемыми элементами. Сад css-Дзен представляет функциональный, практический <acronym title="Cascading Style Sheets">CSS</acronym>, а не последние свежайшие хитрости и трюки, которые может увидеть только 2% посетителей. Единственное реальное требование заключается в том, что ваш  <acronym title="Cascading Style Sheets">CSS</acronym> должен валидироваться.</span></p>
			<p class="p2"><span>К сожалению, при дизайне таким образом недостатки в различных реализациях <acronym title="Cascading Style Sheets">CSS</acronym> проявляются особенно сильно. Разные браузеры показывают по-разному, иногда даже полностью валидный <acronym title="Cascading Style Sheets">CSS</acronym>, и это приводит к безумным случаям - когда починка одного ломает другое. Обратитесь к странице <a href="http://www.mezzoblue.com/zengarden/resources/" title="Список материалов по CSS">Ресурсы</a> за информацией о некоторых возможных исправлениях. Полное соответствие браузеров всё ещё, в чём-то, просто мечта, и мы не ожидаем от вас попиксельно-безупречного кода для каждой платформы. Но протестируйте всё на наибольшем их количестве. Если ваш дизайн не работает хотя бы в IE5+/Win и Mozilla (используемых более чем 90% населения), скорее всего мы его не примем.</span></p>
			<p class="p3"><span>Мы просим, чтобы вы присылали оригинальные графические работы. Пожалуйста, уважайте копирайт. Пожалуйста, сведите сомнительные материалы к минимуму: показанная со вкусом нагота приемлема, явная порнография будет отвергнута.</span></p>
			<p class="p4"><span>Это обучающее упражнение, а также демонстрация. Вы сохраняете полный копирайт на вашу графику, но мы просим вас выпустить ваш <acronym title="Cascading Style Sheets">CSS</acronym> под лицензией Creative Commons, аналогичной <a href="http://creativecommons.org/licenses/sa/1.0/" title="Просмотреть лицензионную информацию Сада css-Дзен.">нашей на этом сайте</a>, чтобы другие могли учиться на ваших работах.</span></p>
			<p class="p5"><span>Каналы благосклонно предоставлены <a href="http://www.mediatemple.net/" lang="en">mediatemple</a></span></p>
		</div>

		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="Проверить валидность XHTML этого сайта">xhtml</a> &nbsp; 
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="Проверить валидность CSS этого сайта">css</a> &nbsp; 
			<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="Посмотреть подробности лицензирования этого сайта, благодаря Creative Commons.">cc</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=sec508&amp;test=" title="Проверить доступнсть этого сайта в соответствии с U.S. Section 508">508</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=wcag1-aaa&amp;test=" title="Проверить доступность этого сайта в соответствии с WAI Content Accessibility Guidelines 1">aaa</a>
		</div>

	</div>

	

	<div id="linkList">
		<!--лишний div для гибкости - этот список, вероятно, будет самым сложным местом для вас -->
		<div id="linkList2">

		<!-- Если вы задумались над лишним &nbsp; в конце ссылки, то это хак для соответствия требованиям WCAG 1 Accessibility. -->
		<!-- Мне не нравится это делать, но это визуальное упражнение. Это компромисс. -->
			<div id="lselect">
				<h3 class="select"><span>Выберите дизайн:</span></h3>
				<!-- Список ссылок начинается здесь. Будет не более 8 ссылок на страницу -->
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
				<h3 class="archives"><span>Архивы:</span></h3>
				<ul>
<?php
					
					$forward = $thisPage + 1;
					$backward = $thisPage - 1;
					
					if ($listStart >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"${thisFile}?cssfile=${currentDesign}&amp;page=${forward}\" title=\"Просмотреть следующий набор дизайнов. AccessKey: n\" accesskey=\"n\">Следующие дизайны &raquo;</a></li>\n";
					}

					if ($thisPage >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"Посмотреть предыдущий набор дизайнов. AccessKey: p\" accesskey=\"p\">&laquo;  предыдущие дизайны</a></li>\n";
					}
?>
					<li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="Просмотреть всё присланное в Сад css-Дзен. AccessKey: w" accesskey="w">Просмотреть все дизайны</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>Ресурсы:</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"http://www.csszengarden.com/${currentDesign}\" title=\"Посмотреть исходный CSS-файл для текущего дизайна, AccessKey: v\" accesskey=\"v\">Посмотреть <acronym title=\"Cascading Style Sheets\">CSS</acronym>  от этого дизайна</a></li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources/" title="Ссылки на отличные сайты с информацией об использовании CSS. AccessKey: r" accesskey="r"><acronym title="Cascading Style Sheets">CSS</acronym>-ресурсы</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/faq/" title="Список часто задаваемых вопросов про Сад css-Дзен. AccessKey: q" accesskey="q"><acronym title="Часто Задаваемые Вопросы">ЧАВО</acronym></a>&nbsp;</li>
					<li><a href="http://www.mezzoblue.com/zengarden/submit/" title="Присылайте свой CSS файл. AccessKey: s" accesskey="s">Прислать дизайн</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/translations/" title="Посмотреть переведённые версии этой страницы. AccessKey: t" accesskey="t">Переводы</a></li>
				</ul>
			</div>
		</div>
	</div>


</div>

<!-- Эти дополнительные divs/spans могут быть использованы как ловушки по умолчанию для добавления дополнительной графики. -->
<!-- Добавьте к каждому фоновую картинку и используйте высоту и широту для контроля размеров, размещайте абсолютным позиционированием -->
<!-- Есть весьма мерзкий баг со сдвигом цветов в прозрачных GIF-ах в Нетскейпе 6/7 и Мозилле с 1.0 до 1.3 (в 1.3 починили),
		так что обязательно протестируйте свой дизайн в этих браузерах. -->
<div id="extraDiv1"><span></span></div><div id="extraDiv2"><span></span></div><div id="extraDiv3"><span></span></div>
<div id="extraDiv4"><span></span></div><div id="extraDiv5"><span></span></div><div id="extraDiv6"><span></span></div>




</body>
</html>