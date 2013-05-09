<?php

include '../../includes/masterlist.php';
$letterarray = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Dave Shea" />
	<meta name="keywords" content="design, css, cascading, style, sheets, xhtml, design gráfico, w3c, padrões web, visual" />
	<meta name="description" content="Uma demonstração do que pode ser conseguido visualmente por meio de um design baseado em CSS" />
	<meta name="robots" content="all" />
	<title>css Zen Garden: A Beleza em Design CSS</title>

	<!-- para corrigir o problema visual de mostrar a página sem os estilos aplicados por alguns momentos. http://www.bluerobot.com/web/css/fouc.asp -->
	<script type="text/javascript"></script>
	
	<style type="text/css" title="currentStyle">
		@import "<?php echo $loadCSS; ?>";
	</style>
	<link rel="Shortcut Icon" type="image/x-icon" href="http://www.csszengarden.com/favicon.ico" />	
	<link rel="alternate" type="application/rss+xml" title="RSS" href="http://www.csszengarden.com/zengarden.xml" />
</head>

<!--

	Este documento xhtml foi criado de modo a permitir a maior flexibilidade possível na adaptação
	do design. Assim, há algumas classes e tags extras que não são realmente necessários. Em uma situação
	real, o documento provavelmente seria muito mais limpo.

	Ainda assim, eu acredito que todos nós podemos concordar que, mesmo com esses tags extras, o documento
	ainda fica muito melhor do que ficaria se tivesse sido construído com tabelas.


-->


<body id="css-zen-garden">

<div id="container">
	<div id="intro">
		<div id="pageHeader">
			<h1><span>css Zen Garden</span></h1>
			<h2><span>A Beleza de um Design <acronym title="Cascading Style Sheets">CSS</acronym></span></h2>
		</div>

		<div id="quickSummary">
			<p class="p1"><span>Uma demonstração do que pode ser conseguido visualmente por meio de um design baseado em <acronym title="Cascading Style Sheets">CSS</acronym>. Escolha qualquer folha de estilo da lista para carregar um novo design nesta página.</span></p>
			<p class="p2"><span>Faça o download dos arquivos de exemplo <a href="/zengarden-sample.html" title="O código HTML desta página que não deve ser modificado">html</a> e <a href="/zengarden-sample.css" title="Este é o arquivo CSS desta página; é o código que você deve modificar">css</a>.</span></p>
		</div>

		<div id="preamble">
			<h3><span>A Estrada para a Iluminação</span></h3>
			<p class="p1"><span>Entulhando uma escura e aterrorizante estrada jazem as relíquias antigas de elementos específicos a navegadores, <acronym title="Document Object Model">DOM</acronym>s incompatíveis e falta de suporte correto ao padrão <acronym title="Cascading Style Sheets">CSS</acronym>.</span></p>
			<p class="p2"><span>Precisamos limpar as nossas mentes das práticas passadas. A iluminação Web foi atingida graças aos esforços incansáveis de pessoas como os membros do <acronym title="World Wide Web Consortium">W3C</acronym>, <acronym title="Web Standards Project">WaSP</acronym> e dos criadores dos principais navegadores em uso atualmente.</span></p>
			<p class="p3"><span>O css Zen Garden convida você a relaxar e meditar nas importantes lições do mestres. Comece a ver com clareza. Aprenda a usar as técnicas (que ainda serão) consagradas pelo tempo de maneiras novas e revigorantes.</span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="explanation">
			<h3><span>Sobre o Quê é Este Site?</span></h3>
			<p class="p1"><span>Existe uma clara necessidade de que artistas gráficos levem o padrão <acronym title="Cascading Style Sheets">CSS</acronym> mais a sério. O Zen Garden tem como alvo entusiasmar, inspirar e encorajar a participação de todos. Para começar, veja alguns dos designs existentes na lista. Ao clicar em qualquer um deles, a folha de estilo correspondente será carregada nesta página. O código permanece o mesmo; a única coisa que muda é o arquivo .css externo. Sério!</span></p>
			<p class="p2"><span>O <acronym title="Cascading Style Sheets">CSS</acronym> permite o controle completo e total sobre o modo como um documento é renderizado. O único modo pelo qual esse fato pode ser demonstrado de uma maneira que entusiasme as pessoas é demonstrar quão verdadeira é a realidade do mesmo uma vez que as rédeas são colocadas nas mãos daqueles que são capazes de criar beleza a partir da estrutura. Até o dia de hoje, a maior parte dos exemplos e truques interessantes que podem ser feitos nesta área foram demonstrados por estruturadores e programadores. Artistas gráficos ainda não deixaram a sua marca nessa arena. Isto precisa mudar agora.</span></p>
		</div>

		<div id="participation">
			<h3><span>Participação</span></h3>
			<p class="p1"><span>Somente artistas gráficos podem participar. Você vai modificar a apresentação desta página e, para isto, uma boa dose de habilidade com <acronym title="Cascading Style Sheets">CSS</acronym> é requerida, embora os arquivos de exemplo estejam comentados o suficiente para permitir que mesmo novatos com o padrão possam usá-los como uma base para seus experimentos. Para dicas e tutoriais avançados sobre <acronym title="Cascading Style Sheets">CSS</acronym> veja o <a href="http://www.mezzoblue.com/zengarden/resources/" title="Uma lista de recursos adicionais relacionados a CSS">guia de recursos adicionais</a>.</span></p>
			<p class="p2"><span>Você pode modificar a folha de estilo de qualquer maneira que achar necessária, mas o código <acronym title="HyperText Markup Language">HTML</acronym> deve ser deixado como está. Isso pode parecer difícil no começo se você nunca trabalhou desse modo antes, mas siga a lista de recursos para aprender mais e use os arquivos de exemplo como guias.</span></p>
			<p class="p3"><span>Faça o download dos arquivos de exemplo <a href="/zengarden-sample.html" title="O código HTML destá página que não deve ser modificado">html</a> e <a href="/zengarden-sample.css" title="Este é o arquivo CSS desta página; é o código que você deve modificar">css</a> para trabalhar localmente. Assim que você completar a sua obra-prima (e, por favor, não envie trabalhos incompletos), coloque o arquivo .css resultante em um servidor web sob o seu controle. <a href="http://www.mezzoblue.com/zengarden/submit/" title="Use o formulário de contato para nos mandar o seu arquivo CSS">Envie-nos um link</a> para o arquivo e, se nós nos decidirmos a usá-lo, nós obteremos as imagens associadas através do mesmo. Submissões finais serão colocadas em nosso servidor.</span></p>
			<p class="p4"><span>Atualização: Estamos procurando tradutores. Se você é fluente em inglês e outra linguagem, esta é outra maneira de se envolver com o projeto. Por favor, <a href="http://www.mezzoblue.com/contact/" title="Envie-nos um e-mail mencionando as linguagens nas quais você é fluente">contate-nos</a> para maiores detalhes. Algumas traduções já estão <a href="http://www.mezzoblue.com/zengarden/translations/">disponíveis</a>. Tradução por <a href="http://www.reflectivesurface.com/weblog-br/">Ronaldo Ferraz</a>.</span></p>
		</div>

		<div id="benefits">
			<h3><span>Benefícios</span></h3>
			<p class="p1"><span>Para quê participar? Para obter reconhecimento, inspiração, e um recurso ao qual todos nós poderemos nos referir quanto batalharmos pelo uso de designs baseados em <acronym title="Cascading Style Sheets">CSS</acronym>. Iso ainda é muito necessário hoje. Muitos grandes sites estão convertendo suas páginas para este tipo de design, mas a vasta maioria ainda usa código ultrapassado e inválido. Um dia esta galeria será uma curiosidade histórica; porém, este dia ainda não chegou.</span></p>
		</div>

		<div id="requirements">
			<h3><span>Requerimentos</span></h3>
			<p class="p1"><span>Nós gostaríamos de ver o máximo possível de <acronym title="Cascading Style Sheets, versão 1">CSS1</acronym>. O uso de <acronym title="Cascading Style Sheets, versão 2">CSS2</acronym> deve ser limitado aos elementos suportados pelos navegadores em uso atualmente. O css Zen Garden existe para demonstrar o uso prático e funcional do padrão <acronym title="Cascading Style Sheets">CSS</acronym> e não para mostrar os truques mais avançados ainda somente disponíveis para os 2% do público que usa navegadores mais modernos. O único requerimento real, entretanto, é o seu <acronym title="Cascading Style Sheets">CSS</acronym> valide.</span></p>
			<p class="p2"><span>Infelizmente, criar o design dessa maneira colocará em evidência as falhas nas várias implementações <acronym title="Cascading Style Sheets">CSS</acronym> disponíveis atualmente. Diferentes navegadores comportam-se de maneira distinta quanto a alguns elementos, mesmo quando o <acronym title="Cascading Style Sheets">CSS</acronym> é válido. Isso pode se converter em uma fonte de frustrações, principalmente quando uma correção para um navegador atrapalha outro. Veja a página de <a href="http://www.mezzoblue.com/zengarden/resources/" title="Uma lista de recursos adicionais relacionados a CSS">recursos</a> para algumas soluções disponíveis. Compatibilidade total com todos navegadores ainda é um sonho e nós não esperamos que você consiga um design perfeitamente preciso até o último pixel em todas as plataformas. Mesmo assim, teste em todas que conseguir. Se o seu design não funciona pelo menos no IE5+/Win e Mozilla (que compõem 90% da população de navegadores), as chances são grandes de que nós não o aceitaremos.</span></p>
			<p class="p3"><span>Nós pedimos que você envie ilustrações originais. Por favor, respeite as leis de copyright. Mantenha o material questionável ao mínimo: nudez artística é aceitável; pornografia explícita será rejeitada imediatamente.</span></p>
			<p class="p4"><span>Este é um exercício de aprendizado na mesma medida em que é uma demonstração. Você manterá o copyright completo de todos os seus gráficos, mas pedimos que você libere o seu <acronym title="Cascading Style Sheets">CSS</acronym> sob uma licença Creative Commons idêntica à <a href="http://creativecommons.org/licenses/sa/1.0/" title="Veja a informação da licença do css Zen Garden">deste site</a> de modo que outros possam aprender do seu trabalho.</span></p>
			<p class="p5"><span>A banda usada por este site está sendo graciosamente doada por <a href="http://www.mediatemple.net/" lang="en">mediatemple</a>.</span>&nbsp;</p>
		</div>

		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="Verifique a validade do XHTML deste site">xhtml</a> &nbsp; 
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="Verifique a validade do CSS deste site">css</a> &nbsp; 
			<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="Veja os detalhes da licença deste site, cortesia de Creative Commons">cc</a> &nbsp;
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
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"Veja o próximo conjunto de designs. Tecla de acesso: p\" accesskey=\"p\">&laquo; <span class=\"accesskey\">p</span>róximos designs</a></li>\n";
					}
?>
					<li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="veja todas as submissões feitas para o Zen Garden. Tecla de acesso: v" accesskey="v"><span class="accesskey">V</span>eja todos designs</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>Recursos:</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"${currentDesign}\" title=\"Veja o código do arquivo CSS para o design atual. Tecla de acesso: u\" accesskey=\"v\">Veja o código <acronym title=\"Cascading Style Sheets\">CSS</acronym> do design at<span class=\"accesskey\">u</span>al</a></li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources/" title="Links to great sites with information on using CSS. Tecla de acesso: r" accesskey="r"><span class="accesskey">R</span>ecursos <acronym title="Cascading Style Sheets">CSS</acronym></a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/faq/" title="Questões comuns. Tecla de acesso: q" accesskey="q"><acronym title="Frequently Asked Questions">FA<span class="accesskey">Q</span></acronym></a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/submit/" title="Envie o seu próprio arquivo CSS. Tecla de acesso: s" accesskey="s">Envie <span class="accesskey">s</span>eu design</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/translations/" title="Veja as versões traduzidas desta página. Tecla de acesso: t" accesskey="t"><span class="accesskey">T</span>raduções</a></li>
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