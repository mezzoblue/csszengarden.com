<?php

include '../../includes/masterlist.php';
$letterarray = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Dave Shea" />
	<meta name="keywords" content="design, css, cascading, style, sheets, xhtml, design gr�fico, w3c, padr�es web, visual" />
	<meta name="description" content="Uma demonstra��o do que pode ser conseguido visualmente por meio de um design baseado em CSS" />
	<meta name="robots" content="all" />
	<title>css Zen Garden: A Beleza em Design CSS</title>

	<!-- para corrigir o problema visual de mostrar a p�gina sem os estilos aplicados por alguns momentos. http://www.bluerobot.com/web/css/fouc.asp -->
	<script type="text/javascript"></script>
	
	<style type="text/css" title="currentStyle">
		@import "<?php echo $loadCSS; ?>";
	</style>
	<link rel="Shortcut Icon" type="image/x-icon" href="http://www.csszengarden.com/favicon.ico" />	
	<link rel="alternate" type="application/rss+xml" title="RSS" href="http://www.csszengarden.com/zengarden.xml" />
</head>

<!--

	Este documento xhtml foi criado de modo a permitir a maior flexibilidade poss�vel na adapta��o
	do design. Assim, h� algumas classes e tags extras que n�o s�o realmente necess�rios. Em uma situa��o
	real, o documento provavelmente seria muito mais limpo.

	Ainda assim, eu acredito que todos n�s podemos concordar que, mesmo com esses tags extras, o documento
	ainda fica muito melhor do que ficaria se tivesse sido constru�do com tabelas.


-->


<body id="css-zen-garden">

<div id="container">
	<div id="intro">
		<div id="pageHeader">
			<h1><span>css Zen Garden</span></h1>
			<h2><span>A Beleza de um Design <acronym title="Cascading Style Sheets">CSS</acronym></span></h2>
		</div>

		<div id="quickSummary">
			<p class="p1"><span>Uma demonstra��o do que pode ser conseguido visualmente por meio de um design baseado em <acronym title="Cascading Style Sheets">CSS</acronym>. Escolha qualquer folha de estilo da lista para carregar um novo design nesta p�gina.</span></p>
			<p class="p2"><span>Fa�a o download dos arquivos de exemplo <a href="/zengarden-sample.html" title="O c�digo HTML desta p�gina que n�o deve ser modificado">html</a> e <a href="/zengarden-sample.css" title="Este � o arquivo CSS desta p�gina; � o c�digo que voc� deve modificar">css</a>.</span></p>
		</div>

		<div id="preamble">
			<h3><span>A Estrada para a Ilumina��o</span></h3>
			<p class="p1"><span>Entulhando uma escura e aterrorizante estrada jazem as rel�quias antigas de elementos espec�ficos a navegadores, <acronym title="Document Object Model">DOM</acronym>s incompat�veis e falta de suporte correto ao padr�o <acronym title="Cascading Style Sheets">CSS</acronym>.</span></p>
			<p class="p2"><span>Precisamos limpar as nossas mentes das pr�ticas passadas. A ilumina��o Web foi atingida gra�as aos esfor�os incans�veis de pessoas como os membros do <acronym title="World Wide Web Consortium">W3C</acronym>, <acronym title="Web Standards Project">WaSP</acronym> e dos criadores dos principais navegadores em uso atualmente.</span></p>
			<p class="p3"><span>O css Zen Garden convida voc� a relaxar e meditar nas importantes li��es do mestres. Comece a ver com clareza. Aprenda a usar as t�cnicas (que ainda ser�o) consagradas pelo tempo de maneiras novas e revigorantes.</span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="explanation">
			<h3><span>Sobre o Qu� � Este Site?</span></h3>
			<p class="p1"><span>Existe uma clara necessidade de que artistas gr�ficos levem o padr�o <acronym title="Cascading Style Sheets">CSS</acronym> mais a s�rio. O Zen Garden tem como alvo entusiasmar, inspirar e encorajar a participa��o de todos. Para come�ar, veja alguns dos designs existentes na lista. Ao clicar em qualquer um deles, a folha de estilo correspondente ser� carregada nesta p�gina. O c�digo permanece o mesmo; a �nica coisa que muda � o arquivo .css externo. S�rio!</span></p>
			<p class="p2"><span>O <acronym title="Cascading Style Sheets">CSS</acronym> permite o controle completo e total sobre o modo como um documento � renderizado. O �nico modo pelo qual esse fato pode ser demonstrado de uma maneira que entusiasme as pessoas � demonstrar qu�o verdadeira � a realidade do mesmo uma vez que as r�deas s�o colocadas nas m�os daqueles que s�o capazes de criar beleza a partir da estrutura. At� o dia de hoje, a maior parte dos exemplos e truques interessantes que podem ser feitos nesta �rea foram demonstrados por estruturadores e programadores. Artistas gr�ficos ainda n�o deixaram a sua marca nessa arena. Isto precisa mudar agora.</span></p>
		</div>

		<div id="participation">
			<h3><span>Participa��o</span></h3>
			<p class="p1"><span>Somente artistas gr�ficos podem participar. Voc� vai modificar a apresenta��o desta p�gina e, para isto, uma boa dose de habilidade com <acronym title="Cascading Style Sheets">CSS</acronym> � requerida, embora os arquivos de exemplo estejam comentados o suficiente para permitir que mesmo novatos com o padr�o possam us�-los como uma base para seus experimentos. Para dicas e tutoriais avan�ados sobre <acronym title="Cascading Style Sheets">CSS</acronym> veja o <a href="http://www.mezzoblue.com/zengarden/resources/" title="Uma lista de recursos adicionais relacionados a CSS">guia de recursos adicionais</a>.</span></p>
			<p class="p2"><span>Voc� pode modificar a folha de estilo de qualquer maneira que achar necess�ria, mas o c�digo <acronym title="HyperText Markup Language">HTML</acronym> deve ser deixado como est�. Isso pode parecer dif�cil no come�o se voc� nunca trabalhou desse modo antes, mas siga a lista de recursos para aprender mais e use os arquivos de exemplo como guias.</span></p>
			<p class="p3"><span>Fa�a o download dos arquivos de exemplo <a href="/zengarden-sample.html" title="O c�digo HTML dest� p�gina que n�o deve ser modificado">html</a> e <a href="/zengarden-sample.css" title="Este � o arquivo CSS desta p�gina; � o c�digo que voc� deve modificar">css</a> para trabalhar localmente. Assim que voc� completar a sua obra-prima (e, por favor, n�o envie trabalhos incompletos), coloque o arquivo .css resultante em um servidor web sob o seu controle. <a href="http://www.mezzoblue.com/zengarden/submit/" title="Use o formul�rio de contato para nos mandar o seu arquivo CSS">Envie-nos um link</a> para o arquivo e, se n�s nos decidirmos a us�-lo, n�s obteremos as imagens associadas atrav�s do mesmo. Submiss�es finais ser�o colocadas em nosso servidor.</span></p>
			<p class="p4"><span>Atualiza��o: Estamos procurando tradutores. Se voc� � fluente em ingl�s e outra linguagem, esta � outra maneira de se envolver com o projeto. Por favor, <a href="http://www.mezzoblue.com/contact/" title="Envie-nos um e-mail mencionando as linguagens nas quais voc� � fluente">contate-nos</a> para maiores detalhes. Algumas tradu��es j� est�o <a href="http://www.mezzoblue.com/zengarden/translations/">dispon�veis</a>. Tradu��o por <a href="http://www.reflectivesurface.com/weblog-br/">Ronaldo Ferraz</a>.</span></p>
		</div>

		<div id="benefits">
			<h3><span>Benef�cios</span></h3>
			<p class="p1"><span>Para qu� participar? Para obter reconhecimento, inspira��o, e um recurso ao qual todos n�s poderemos nos referir quanto batalharmos pelo uso de designs baseados em <acronym title="Cascading Style Sheets">CSS</acronym>. Iso ainda � muito necess�rio hoje. Muitos grandes sites est�o convertendo suas p�ginas para este tipo de design, mas a vasta maioria ainda usa c�digo ultrapassado e inv�lido. Um dia esta galeria ser� uma curiosidade hist�rica; por�m, este dia ainda n�o chegou.</span></p>
		</div>

		<div id="requirements">
			<h3><span>Requerimentos</span></h3>
			<p class="p1"><span>N�s gostar�amos de ver o m�ximo poss�vel de <acronym title="Cascading Style Sheets, vers�o 1">CSS1</acronym>. O uso de <acronym title="Cascading Style Sheets, vers�o 2">CSS2</acronym> deve ser limitado aos elementos suportados pelos navegadores em uso atualmente. O css Zen Garden existe para demonstrar o uso pr�tico e funcional do padr�o <acronym title="Cascading Style Sheets">CSS</acronym> e n�o para mostrar os truques mais avan�ados ainda somente dispon�veis para os 2% do p�blico que usa navegadores mais modernos. O �nico requerimento real, entretanto, � o seu <acronym title="Cascading Style Sheets">CSS</acronym> valide.</span></p>
			<p class="p2"><span>Infelizmente, criar o design dessa maneira colocar� em evid�ncia as falhas nas v�rias implementa��es <acronym title="Cascading Style Sheets">CSS</acronym> dispon�veis atualmente. Diferentes navegadores comportam-se de maneira distinta quanto a alguns elementos, mesmo quando o <acronym title="Cascading Style Sheets">CSS</acronym> � v�lido. Isso pode se converter em uma fonte de frustra��es, principalmente quando uma corre��o para um navegador atrapalha outro. Veja a p�gina de <a href="http://www.mezzoblue.com/zengarden/resources/" title="Uma lista de recursos adicionais relacionados a CSS">recursos</a> para algumas solu��es dispon�veis. Compatibilidade total com todos navegadores ainda � um sonho e n�s n�o esperamos que voc� consiga um design perfeitamente preciso at� o �ltimo pixel em todas as plataformas. Mesmo assim, teste em todas que conseguir. Se o seu design n�o funciona pelo menos no IE5+/Win e Mozilla (que comp�em 90% da popula��o de navegadores), as chances s�o grandes de que n�s n�o o aceitaremos.</span></p>
			<p class="p3"><span>N�s pedimos que voc� envie ilustra��es originais. Por favor, respeite as leis de copyright. Mantenha o material question�vel ao m�nimo: nudez art�stica � aceit�vel; pornografia expl�cita ser� rejeitada imediatamente.</span></p>
			<p class="p4"><span>Este � um exerc�cio de aprendizado na mesma medida em que � uma demonstra��o. Voc� manter� o copyright completo de todos os seus gr�ficos, mas pedimos que voc� libere o seu <acronym title="Cascading Style Sheets">CSS</acronym> sob uma licen�a Creative Commons id�ntica � <a href="http://creativecommons.org/licenses/sa/1.0/" title="Veja a informa��o da licen�a do css Zen Garden">deste site</a> de modo que outros possam aprender do seu trabalho.</span></p>
			<p class="p5"><span>A banda usada por este site est� sendo graciosamente doada por <a href="http://www.mediatemple.net/" lang="en">mediatemple</a>.</span>&nbsp;</p>
		</div>

		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="Verifique a validade do XHTML deste site">xhtml</a> &nbsp; 
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="Verifique a validade do CSS deste site">css</a> &nbsp; 
			<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="Veja os detalhes da licen�a deste site, cortesia de Creative Commons">cc</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=sec508&amp;test=" title="Confirma a acessibilidade deste site de acordo com os regulamentos da U.S. Section 508">508</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=wcag1-aaa&amp;test=" title="Verifique a acessibilidade deste site de acordo com as WAI Content Accessibility Guidelines 1">aaa</a>
		</div>


	</div>

	
	<div id="linkList">
		<div id="linkList2">
			<div id="lselect">
				<h3 class="select"><span>Selecione um Design:</span></h3>
				<ul>
<?php
					$c = 0;
					for ($a = ($listStart + 1); $a <= $listEnd; $a++) {
						$b = $listEnd - $c;
						$d = $letterarray[$c];
						$tempLink = linkMe($filename[$b]);
						echo "\t\t\t\t\t";
						echo "<li><a href=\"?cssfile=/${tempLink}/${tempLink}.css&amp;page=${thisPage}\" title=\"Tecla de acesso: ${d}\" accesskey=\"${d}\">${styleName[$b]}</a> por <a href=\"${styleURL[$b]}\" class=\"c\">${styleCreator[$b]}</a></li>";
						echo "\n";
						$c = $c + 1;
					}
?>
				</ul>
			</div>

			<div id="larchives">
				<h3 class="archives"><span>Arquivos:</span></h3>
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
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"Veja o pr�ximo conjunto de designs. Tecla de acesso: p\" accesskey=\"p\">&laquo; <span class=\"accesskey\">p</span>r�ximos designs</a></li>\n";
					}
?>
					<li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="veja todas as submiss�es feitas para o Zen Garden. Tecla de acesso: v" accesskey="v"><span class="accesskey">V</span>eja todos designs</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>Recursos:</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"${currentDesign}\" title=\"Veja o c�digo do arquivo CSS para o design atual. Tecla de acesso: u\" accesskey=\"v\">Veja o c�digo <acronym title=\"Cascading Style Sheets\">CSS</acronym> do design at<span class=\"accesskey\">u</span>al</a></li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources/" title="Links to great sites with information on using CSS. Tecla de acesso: r" accesskey="r"><span class="accesskey">R</span>ecursos <acronym title="Cascading Style Sheets">CSS</acronym></a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/faq/" title="Quest�es comuns. Tecla de acesso: q" accesskey="q"><acronym title="Frequently Asked Questions">FA<span class="accesskey">Q</span></acronym></a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/submit/" title="Envie o seu pr�prio arquivo CSS. Tecla de acesso: s" accesskey="s">Envie <span class="accesskey">s</span>eu design</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/translations/" title="Veja as vers�es traduzidas desta p�gina. Tecla de acesso: t" accesskey="t"><span class="accesskey">T</span>radu��es</a></li>
				</ul>
			</div>
		</div>
	</div>


</div>

<!-- Estas divs e spans extras podem ser usados para adicionar outras imagens de preenchimento -->
<div id="extraDiv1"><span></span></div><div id="extraDiv2"><span></span></div><div id="extraDiv3"><span></span></div>
<div id="extraDiv4"><span></span></div><div id="extraDiv5"><span></span></div><div id="extraDiv6"><span></span></div>

</body>
</html>