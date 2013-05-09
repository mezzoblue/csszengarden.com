<?php

include '../../includes/masterlist.php';
$letterarray = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Dave Shea" />
	<meta name="keywords" content="design, css, cascading, style, sheets, xhtml, graphic design, w3c, web standards, visual, display" />
	<meta name="description" content="A demonstration of what can be accomplished visually through CSS-based design." />
	<meta name="robots" content="all" />
	<title>css Zen Garden: The Beauty in CSS Design</title>

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
      <h1><span>Jardin Zen css</span></h1>
      <h2><span>La belleza del dise&ntilde;o <acronym title="Cascading Style Sheets">CSS</acronym> 
        </span></h2>
    </div>
    <div id="quickSummary"> 
      <p class="p1"><span>Una demostraci&oacute;n de lo que se puede lograr visualmente 
        usando diseño basado en <acronym title="Cascading Style Sheets">CSS</acronym>&#8211;. 
        Seleccione cualquier estilo de la lista para cargarlo en esta p&aacute;gina.</span></p>
      <p class="p2"><span>Baje el archivo de ejemplo <a href="/zengarden-sample.html" title="This page's source HTML code, not to be modified.">html 
        </a> y <a href="/zengarden-sample.css" title="This page's sample CSS, the file you may modify.">css 
        </a></span></p>
    </div>
    <div id="preamble"> 
      <h3><span>El camino hacia La Luz</span></h3>
      <p class="p1"><span>Ensuciando un camino oscuro y aburrido reposan las reliquias 
        pasadas de selectores espec&iacute;ficos para navegadores, <acronym title="Document Object Model">DOM</acronym>s 
        incompatibles, y soporte incierto para <acronym title="Cascading Style Sheets">CSS</acronym> 
        .</span></p>
      <p class="p2"><span>Hoy, tenemos que limpiar la mente de pr&aacute;cticas 
        pasadas. La claridad de la Web ha sido alcanzada gracias a los esfuerzos 
        infatigables de gente como <acronym title="World Wide Web Consortium">W3C</acronym>, 
        <acronym title="Web Standards Project">WaSP</acronym> y los grandes creadores 
        de los navegadores.</span></p>
      <p class="p3"><span>El Jardin Zen css invita a usted a relajarse y meditar 
        acerca de las lecciones importantes de los maestros.Comience a ver con 
        claridad. Aprenda a usar (aun por ser) tecnicas honradas por el tiempo 
        en una nueva y vigorosa forma. Conviertase en uno con la Web.</span></p>
    </div>
  </div>
  <div id="supportingText"> 
    <div id="explanation"> 
      <h3><span>Y De que se Trata Esto?</span></h3>
      <p class="p1"><span>Hay claramente una necesidad de que <acronym title="Cascading Style Sheets">CSS</acronym> 
        sea tomada seriamente por los artistas gr&aacute;ficos. El Jardin Zen 
        intenta motivar, inspirar, y animar la participacion. Para empezar, vea 
        algunos de los excitantes dise&ntilde;os de la lista. Seleccionando cualquiera 
        de ellos cargara la hoja de estilos en esta misma pagina. El codigo se 
        mantiene intacto, lo unico que cambia es el archivo externo .css. Si, 
        verdad.</span></p>
      <p class="p2"><span><acronym title="Cascading Style Sheets">CSS</acronym> 
        permite total y completo control sobre el estilo de un documento de hypertexto. 
        La &uacute;nica forma en que este punto puede ser ilustrado de manera 
        tal que la gente quede impresionada es demostrando lo que realmente se 
        puede hacer, una vez que las riendas son colocadas en las manos de aquellos 
        dispuestos a crear belleza basada en estructura.. Hasta la fecha, la mayor&iacute;a 
        de los trucos y mejoras han sido demostrados por estructuristas y codificadores. 
        Los dise&ntilde;adores tienen que todavia poner su marca. Esto necesita 
        cambiar. </span></p>
    </div>
    <div id="participation"> 
      <h3><span>Participaci&oacute;n</span></h3>
      <p class="p1"><span>Solo artistas gr&aacute;ficos por favor. Usted esta 
        modificando esta p&aacute;gina, por tanto fuertes cualidades en <acronym title="Cascading Style Sheets">CSS</acronym> 
        son necesarias, sin embargo los archivos de ejemplo estan comentados de 
        manera suficiente que aun un novato en <acronym title="Cascading Style Sheets">CSS</acronym> 
        puede usarlos como punto de inicio. Por favor vea la <a href="http://www.mezzoblue.com/zengarden/resources.asp" title="A listing of CSS-related resources"><acronym title="Cascading Style Sheets">Guia 
        de Recursos CSS</acronym></a> para encontrar tutoriales avanzados y concejos 
        pra trabajar con <acronym title="Cascading Style Sheets">CSS</acronym>.</span></p>
      <p class="p2"><span>Usted puede modificar la hoja de estilos en la manera 
        que desee, pero no el c&oacute;digo <acronym title="HyperText Markup Language">HTML</acronym>. 
        Esto puede ser desalentador al principio si es que no ha trabajado de 
        esta forma previamente, pero siguiendo los enlaces listados podr&aacute; 
        aprender m&aacute;s , tambien puede usar los archivos de ejemplo como 
        gu&iacute;a.</span></p>
      <p class="p3"><span>Baje los archivos de ejemplo <a href="/zengarden-sample.html" title="This page's source HTML code, not to be modified.">html</a> 
        y <a href="/zengarden-sample.css" title="This page's sample CSS, the file you may modify."> 
        css</a> para poder trabajar con una copia local. Una vez terminada su 
        obra maestra (y por favor, no envie trabajos a medio terminar) copie su 
        archivo .css a un servidor web bajo su control. <a href="http://www.mezzoblue.com/zengarden/sendfile.asp" title="Use the contact form to send us your CSS file">Envienos 
        un enlace</a> hacia el archivo y si decidimos usarlo nosotros bajaremos 
        las im&aacute;genes asociadas. Trabajos finales ser&aacute;n colocados 
        en nuestro servidor..</span></p>
      <p class="p4"><span>actualizaci&oacute;n : Estoy buscando traductores. Si 
        usted es fluente en Ingles y otro idioma, esta es otra forma de envolverse 
        en el proyecto. Por favor <a href="http://www.mezzoblue.com/contact/" title="Send me an e-mail mentioning which languages you are fluent in.">contacteme</a> 
        para mas detalles. Esta traduccion hecha por <a href="http://www.llajta.com/">Fernando Lopez</a>.</span></p>
    </div>
    <div id="benefits"> 
      <h3><span>Beneficios</span></h3>
      <p class="p1"><span>Por que participar? Por el reconocimiento, la inspiraci&oacute;n y por la fuente a la que todos podemos referir cuando tengamos que defender nuestra posici&oacute;n de dise&ntilde;o basado en <acronym title="Cascading Style Sheets">CSS</acronym>. Esto es altamente necesario. Mas y mas grandes lugares estan tomando el riesgo, pro no los suficientes. Un d&iacute;a esta galer&iacute;a ser&aacute; una curiosidad hist&oacute;rica, sin embargo ese dia no sera hoy.</span></p>
    </div>
    <div id="requirements"> 
      <h3><span>Requerimientos</span></h3>
      <p class="p1"><span>Nos gustar&iacute;a ver cuanto<acronym title="Cascading Style Sheets, version 1">CSS1</acronym> como sea posible. <acronym title="Cascading Style Sheets, version 2">CSS2</acronym> deber&iacute;a ser limitado a elementos altamente soportados solamente. El Jardin Zen css se concentra en <acronym title="Cascading Style Sheets">CSS</acronym> funcional y pr&aacute;ctico y no as&iacute; en los &uacute;ltimos trucos tecnol&oacute;gicos vistos solamente por un 2% de la poblaci&oacute;n navegante. El &uacute;nico requerimiento real que tenemos es que vuestro <acronym title="Cascading Style Sheets">CSS</acronym> llegue a validar.</span></p>
      <p class="p2"><span>Desgraciadamente , el dise&ntilde;ar de esta manera enfoca las fallas de las diferentes implementaciones de <acronym title="Cascading Style Sheets">CSS</acronym>. Diferentes navegadores se muestran de manera diferente, aun cuando a veces el <acronym title="Cascading Style Sheets">CSS</acronym> es completamente v&aacute;lido, y esto se convierte en un del&iacute;rio cuando un arreglo en uno conlleva una ruptura en el otro. Vea la p&aacute;gina de <a href="http://www.mezzoblue.com/zengarden/resources.asp" title="A listing of CSS-related resources">Recursos</a> para informaci&oacute;n en algunos de los arreglos disponibles. Compatibilidad total entre navegadores es aun un sue&ntilde;o, y no esperamos que termine con un c&oacute;digo creado a la perfecci&oacute;n para cada plataforma. Pero pruebe en cuantos le sea posible. Si su dise&ntilde;o no funciona en al menos IE5+/Win y Mozilla (usado por un 90% de la poblaci&oacute;n), no aceptaremos su trabajo.</span></p>
      <p class="p3"><span>Le pedimos someter arte originial. Por favor respete las leyes de derechos reservados. Por favor mantenga material objetable a un m&iacute;nimo; desnudos delicados son aceptables, completa pornograf&iacute;a ser&aacute; rechazada.</span></p>
      <p class="p4"><span>Este es un ejerc&iacute;cio de aprendizaje como tambien una demostraci&oacute;n. Usted mantiene todos los derechos sobre los gr&aacute;ficos, sin embargo le pedimos que someta su <acronym title="Cascading Style Sheets">CSS</acronym> bajo una licencia de Creatividad Comun identica a la encontrada <a href="http://creativecommons.org/licenses/sa/1.0/" title="View the Zen Garden's license information.">en este sitio</a> para que otros puedan aprender de su trabajo.</span></p>
      <p class="p5"><span>Ancho de banda donado amablemente por <a href="http://www.mediatemple.net/">mediatemple</a></span></p>
    </div>
    <div id="footer"> <a href="http://validator.w3.org/check/referer" title="Check the validity of this site&#8217;s XHTML">xhtml</a> 
      &nbsp; <a href="http://jigsaw.w3.org/css-validator/check/referer" title="Check the validity of this site&#8217;s CSS">css</a> 
      &nbsp; <a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="View details of the license of this site, courtesy of Creative Commons.">cc</a> 
      &nbsp; <a href="http://www.mezzoblue.com/zengarden/faq/#s508" title="Check the accessibility of this site according to U.S. Section 508">508</a> 
      &nbsp; <a href="http://www.mezzoblue.com/zengarden/faq/#aaa" title="Check the accessibility of this site according to WAI Content Accessibility Guidelines 1">aaa</a> 
    </div>
  </div>


	
	<div id="linkList">
		<div id="linkList2">
			<div id="lselect">
				<h3 class="select"><span>Seleccione un dise&ntilde;o:</span></h3>
				<ul>
<?php
					$c = 0;
					for ($a = ($listStart + 1); $a <= $listEnd; $a++) {
						$b = $listEnd - $c;
						$d = $letterarray[$c];
						$tempLink = linkMe($filename[$b]);
						echo "\t\t\t\t\t";
						echo "<li><a href=\"?cssfile=/${tempLink}/${tempLink}.css&amp;page=${thisPage}\" title=\"AccessKey: ${d}\" accesskey=\"${d}\">${styleName[$b]}</a> por <a href=\"${styleURL[$b]}\" class=\"c\">${styleCreator[$b]}</a></li>";
						echo "\n";
						$c = $c + 1;
					}
?>
				</ul>
			</div>

			<div id="larchives">
				<h3 class="archives"><span>Archivos:</span></h3>
				<ul>
<?php
					
					$forward = $thisPage + 1;
					$backward = $thisPage - 1;
					
					if ($listStart >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"${thisFile}?cssfile=${currentDesign}&amp;page=${forward}\" title=\"View next set of designs. AccessKey: n\" accesskey=\"n\">dise&ntilde;os siguie<span class=\"accesskey\">n</span>tes &raquo;</a></li>\n";
					}

					if ($thisPage >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"View previous set of designs. AccessKey: p\" accesskey=\"p\">&laquo; <span class=\"accesskey\">p</span>revious designs</a></li>\n";
					}
?>
					<li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="View every submission to the Zen Garden. AccessKey: w" accesskey="w">Vea todos los dise&ntilde;os</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>Recursos:</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"${currentDesign}\" title=\"View the source CSS file for the currently-viewed design, AccessKey: v\" accesskey=\"v\"><span class=\"accesskey\">V</span>ea el <acronym title=\"Cascading Style Sheets\">CSS</acronym> CSS de este dise&ntilde;o</a></li>";
?>
			        <li><a href="http://www.mezzoblue.com/zengarden/resources.asp" title="Links to great sites with information on using CSS. AccessKey: r" accesskey="r"><acronym title="Cascading Style Sheets">Re<span class="accesskey">c</span>ursos CSS</acronym></a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/faq.asp" title="A list of Frequently Asked Questions about the Zen Garden. AccessKey: q" accesskey="q"><acronym title="Frequently Asked Questions">FA<span class="accesskey">Q</span></acronym></a>&nbsp;</li>
					<li><a href="http://www.mezzoblue.com/zengarden/sendfile.asp" title="Send in your own CSS file. AccessKey: s" accesskey="s"><span class="accesskey">S</span>ometa un Dise&ntilde;o</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/translations/" title="View translated versions of this page. AccessKey: t" accesskey="t"><span class="accesskey">T</span>raducciones</a></li>
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