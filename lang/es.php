<?php

	$lang = "es";

	$head = array(
		"title" => "SS Zen Garden: La belleza del diseño CSS",
		"description" => "Una demostración de lo que se puede lograr visualmente a través del diseño basado en CSS.",

		// if you'd like translation credit, place it somewhere in this comment
		"comment" => "

	Ver fuente es una característica, no un error. Gracias por tu curiosidad e interés por participar!

    Aquí están las pautas de presentación para el nuevo y mejorado csszengarden.com:

    - CSS3? ¡Por supuesto! Prefijo para TODOS los navegadores donde sea necesario.
    - Sitio Responsivo; prueba tu diseño en múltiples tamaños de pantalla.
    - la línea de base de navegadores: IE9 +, Chrome / Firefox / Safari recientes, y iOS / Android
    - La degradación agraciada (Graceful degradation) es aceptable y, de hecho, muy recomendable.
    - Utilizar las clases de estilo. No uses ids.
    - Las fuentes web son geniales, solo asegúrate de tener una licencia para compartir los archivos.  Servicios Alojados que se aplican a través del archivo CSS (es decir, fuentes de Google) funcionarán bien, pero
    la mayoría de los que requieren HTML personalizado no lo harán. TypeKit es compatible, vea el archivo Léame en esta página para instrucciones de uso: https://github.com/mezzoblue/csszengarden.com/

    Y algunos consejos para construir tu archivo CSS:

    - use: first-child,: last-child y: nth-child para obtener elementos no clasificados
    - use :: before y :: after para crear pseudo-elementos para un estilo extra
    - Use varias imágenes de fondo para aplicar tantas como quieras a cualquier elemento.
    - Utilice el Método Kellum para reemplazar la imagen, si aún es necesario. http://goo.gl/GXxdI
    - No confíe en los divs adicionales en la parte inferior. Usa :: before y :: after en su lugar.

      Spanish Translation: Miguel Esquirol"

		",
	);


	$intro = array(
		"h1" => "CSS Jardin ZEN",
		"h2" => 'La Belleza del Diseño <abbr title="Cascading Style Sheets">CSS</abbr>',

		"summary-p1" => 'Una demostración de lo que se puede lograr a través del diseño basado en <abbr title = "Hojas de estilo en cascada"> CSS </abbr>. Seleccione cualquier hoja de estilo de la lista para cargarla en esta página.',
		"summary-p2" => 'Descargue el ejemplo <a href="' . $zenUrls["example-html"] . '" title="Este código HTML de origen de esta página, no debe modificarse.">este archivo html</a> and <a href="' . $zenUrls["example-css"] . '" title="El CSS de muestra de esta página es el archivo que puede modificar..">archivo css</a>',

		"preamble-h3" => 'El camino a la iluminación',
		"preamble-p1" => 'Caminando por un camino oscuro y lúgubre se encuentran las reliquias pasadas de etiquetas específicas del navegador, incompatibles <abbr title = "Modelo de objeto de documento"> DOM </abbr> s, rotos <abbr title = "Hojas de estilo en cascada"> CSS </abbr> Soporte, y navegadores abandonados.',
		"preamble-p2" => 'Debemos aclarar la mente del pasado. La iluminación web se ha logrado gracias a los esfuerzos incansables de gente como <abbr title = "World Wide Web Consortium"> W3C </abbr>, <abbr title = "Web Standards Project"> WaSP </abbr>, y los principales creadores de los navegadores.',
		"preamble-p3" => 'El CSS Zen Garden lo invita a relajarse y meditar en las importantes lecciones de los maestros. Empieza a ver con claridad. Aprende a usar las técnicas tradicionales de manera nueva y estimulante. Conviértete en uno con la web.',
	);


	$main = array(
		"explanation-h3" => "Entonces, ¿qué es esto?",
		"explanation-p1" => 'Existe la necesidad continua de mostrar el poder de <abbr title = "Hojas de estilo en cascada"> CSS </abbr>. El Zen Garden tiene como objetivo emocionar, inspirar y fomentar la participación. Para comenzar, vea algunos de los diseños existentes en la lista. Al hacer clic en cualquiera, se cargará la hoja de estilo en esta misma página. El <abbr title = "HyperText Markup Language"> HTML </abbr> sigue siendo el mismo, lo único que ha cambiado es el archivo externo <abbr title = "Cascading Style Sheets"> CSS </abbr>. Sí, en serio.',
		"explanation-p2" => '<abbr title = "Hojas de estilo en cascada"> CSS </abbr> permite un control total y total sobre el estilo de un documento de hipertexto. La única forma en que esto se puede ilustrar de una manera que entusiasme a la gente es demostrando lo que realmente puede ser, una vez que las riendas se colocan en manos de aquellos que pueden crear belleza desde la estructura. Tanto los diseñadores como los programadores han contribuido a la belleza de la web; Siempre podemos empujarlo más lejos.',

		"participation-h3" => "Participación",
		"participation-p1" => 'El diseño visual fuerte ha sido siempre nuestro enfoque. Está modificando esta página, por lo que también son necesarias las habilidades de <abbr title = "Hojas de estilo en cascada"> CSS </abbr>, pero los archivos de ejemplo están tan bien comentados que incluso <abbr title = "Hojas de estilo en cascada"> CSS < / abbr> los novatos pueden usarlos como puntos de partida. Consulte la <a href="'. $zenUrls["zen-resources"] .'" title="Una lista de recursos relacionados con CSS"> <abbr title = "Hojas de estilo en cascada"> CSS </abbr> Recurso Guía </a> para tutoriales avanzados y sugerencias para trabajar con <abbr title = "Hojas de estilo en cascada"> CSS </abbr>.',
		"participation-p2" => 'Puede modificar la hoja de estilo de la forma que desee, pero no el <abbr title = "HyperText Markup Language"> HTML </abbr>. Esto puede parecer desalentador al principio si nunca ha trabajado de esta manera antes, pero siga los enlaces de la lista para obtener más información y use los archivos de muestra como guía.',
		"participation-p3" => 'Descargue el ejemplo <a href="'. $zenUrls["example-html"].'" title="Este código HTML de origen de esta página, no se modificará."> HTML </a> y <a href = "'. $ zenUrls [" example-css "].'" title = "CSS de muestra de esta página, el archivo que puede modificar."> CSS </a> para trabajar en una copia localmente. Una vez que haya completado su obra maestra (y, por favor, no envíe el trabajo a medio terminar) cargue su archivo <abbr title = "Hojas de estilo en cascada"> CSS </abbr> a un servidor web bajo su control. <a href="'. $zenUrls["zen-submit"].'" title="Utilice el formulario de contacto para enviarnos su archivo CSS"> Envíenos un enlace </a> a un archivo de ese su trabajo y todos los elementos asociados, y si decidimos utilizarlo, lo descargaremos y lo colocaremos en nuestro servidor.',

		"benefits-h3" => "Beneficios",
		"benefits-p1" => '¿Por qué participar? Para obtener reconocimiento, inspiración y un recurso, todos podemos referirnos a mostrar a las personas lo increíble que puede ser <abbr title = "Hojas de estilo en cascada"> CSS </abbr>. Este sitio sirve como una fuente de inspiración para quienes trabajan hoy en la web, una herramienta de aprendizaje para los que estarán mañana y una galería de técnicas futuras que todos podemos esperar.',

		"requirements-h3" => "Requerimientos",
		"requirements-p1" => 'Donde sea posible, nos gustaría ver principalmente <abbr title = "Hojas de estilo en cascada, niveles 1 y 2"> CSS 1 & amp; 2 </abbr> uso. <abbr title = "Hojas de estilo en cascada, niveles 3 y 4"> CSS 3 & amp; 4 </abbr> debe limitarse solo a elementos ampliamente soportados, o deben proporcionarse fuertes recaídas. El CSS Zen Garden se trata de <abbr title = "Hojas de estilo en cascada"> CSS </abbr> funcional y práctico, y no de los últimos trucos de vanguardia visibles para el 2% del público que navega. El único requisito real que tenemos es que su <abbr title = "Hojas de estilo en cascada"> CSS </abbr> se valide.',
		"requirements-p2" => 'Afortunadamente, el diseño de esta manera muestra qué tan bien han implementado varios navegadores <abbr title = "Hojas de estilo en cascada"> CSS </abbr> hasta ahora. Al seguir las pautas, debería ver resultados bastante consistentes en la mayoría de los navegadores modernos. Debido al gran número de agentes de usuario en la web en estos días & # 8212; especialmente cuando se toma en cuenta el móvil & # 8212; Es posible que los diseños de <em>"pixel perfect"</em> no sean posibles en todas las plataformas. Eso está bien, pero prueba en tantos como puedas. Su diseño debería funcionar al menos en IE9 + y los últimos navegadores Chrome, Firefox, iOS y Android (ejecutados por más del 90% de la población).',
		"requirements-p3" => 'Le pedimos que envíe ilustraciones originales. Por favor respete las leyes de derechos de autor. Mantenga el material objetable al mínimo e intente incorporar temas visuales únicos e interesantes a su trabajo. Estamos más allá del punto de necesitar otro diseño relacionado con jardínes.',
		"requirements-p4" => 'Este es un ejercicio de aprendizaje, así como una demostración. Usted conserva todos los derechos de autor en sus gráficos (con excepciones limitadas, consulte <a href="'. $zenUrls["zen-guidelines"".'"> pautas de envío </a>), pero le solicitamos que libere su <abbr title = "Hojas de estilo en cascada"> CSS </abbr> bajo una licencia de Creative Commons idéntica a la <a href = "'. $ ZenUrls [" zen-license "].'" Title = "Ver la licencia del Jardín Zen información. "> de este sitio </a> para que otros puedan aprender de su trabajo.',
		"requirements-p5" => 'Por <a href="'. $zenUrls["zen-credits-creator"].'"> Dave Shea </a>. Ancho de banda gentilmente donado por <a href="'. $zenUrls["zen-credits-hosting"◆. ""> mediatemple </a>. Ahora disponible: <a href="'. $zenUrls["zen-credits-book"].'"> Zen Garden, el libro </a>',
	);

	// if you decide to localize any of these, keep the link text <4 characters if possible
	// some older designs assume the longest one in the group was 'XHTML'
	$footer = array(
		"zen-validate-html-title" => "Check the validity of this site&#8217;s HTML",
		"zen-validate-html-text" => "HTML",
		"zen-validate-css-title" => "Check the validity of this site&#8217;s CSS",
		"zen-validate-css-text" => "CSS",
		"zen-license-title" => "View the Creative Commons license of this site: Attribution-NonCommercial-ShareAlike.",
		"zen-license-text" => "CC",
		"zen-accessibility-title" => "Read about the accessibility of this site",
		"zen-accessibility-text" => "A11y", // a-ccessibilit-y, the middle part is 11 characters. get it?
		"zen-github-title" => "Fork this site on Github",
		"zen-github-text" => "GH",<?php

	$lang = "es";

	$head = array(
		"title" => "SS Zen Garden: La belleza del diseño CSS",
		"description" => "Una demostración de lo que se puede lograr visualmente a través del diseño basado en CSS.",

		// if you'd like translation credit, place it somewhere in this comment
		"comment" => "

	Ver fuente es una característica, no un error. Gracias por tu curiosidad e interés por participar!

    Aquí están las pautas de presentación para el nuevo y mejorado csszengarden.com:

    - CSS3? ¡Por supuesto! Prefijo para TODOS los navegadores donde sea necesario.
    - Sitio Responsivo; prueba tu diseño en múltiples tamaños de pantalla.
    - la línea de base de navegadores: IE9 +, Chrome / Firefox / Safari recientes, y iOS / Android
    - La degradación agraciada (Graceful degradation) es aceptable y, de hecho, muy recomendable.
    - Utilizar las clases de estilo. No uses ids.
    - Las fuentes web son geniales, solo asegúrate de tener una licencia para compartir los archivos.  Servicios Alojados que se aplican a través del archivo CSS (es decir, fuentes de Google) funcionarán bien, pero
    la mayoría de los que requieren HTML personalizado no lo harán. TypeKit es compatible, vea el archivo Léame en esta página para instrucciones de uso: https://github.com/mezzoblue/csszengarden.com/

    Y algunos consejos para construir tu archivo CSS:

    - use: first-child,: last-child y: nth-child para obtener elementos no clasificados
    - use :: before y :: after para crear pseudo-elementos para un estilo extra
    - Use varias imágenes de fondo para aplicar tantas como quieras a cualquier elemento.
    - Utilice el Método Kellum para reemplazar la imagen, si aún es necesario. http://goo.gl/GXxdI
    - No confíe en los divs adicionales en la parte inferior. Usa :: before y :: after en su lugar.

      Spanish Translation: Miguel Esquirol"

		",
	);


	$intro = array(
		"h1" => "CSS Jardin ZEN",
		"h2" => 'La Belleza del Diseño <abbr title="Cascading Style Sheets">CSS</abbr>',

		"summary-p1" => 'Una demostración de lo que se puede lograr a través del diseño basado en <abbr title = "Hojas de estilo en cascada"> CSS </abbr>. Seleccione cualquier hoja de estilo de la lista para cargarla en esta página.',
		"summary-p2" => 'Descargue el ejemplo <a href="' . $zenUrls["example-html"] . '" title="Este código HTML de origen de esta página, no debe modificarse.">este archivo html</a> and <a href="' . $zenUrls["example-css"] . '" title="El CSS de muestra de esta página es el archivo que puede modificar..">archivo css</a>',

		"preamble-h3" => 'El camino a la iluminación',
		"preamble-p1" => 'Caminando por un camino oscuro y lúgubre se encuentran las reliquias pasadas de etiquetas específicas del navegador, incompatibles <abbr title = "Modelo de objeto de documento"> DOM </abbr> s, rotos <abbr title = "Hojas de estilo en cascada"> CSS </abbr> Soporte, y navegadores abandonados.',
		"preamble-p2" => 'Debemos aclarar la mente del pasado. La iluminación web se ha logrado gracias a los esfuerzos incansables de gente como <abbr title = "World Wide Web Consortium"> W3C </abbr>, <abbr title = "Web Standards Project"> WaSP </abbr>, y los principales creadores de los navegadores.',
		"preamble-p3" => 'El CSS Zen Garden lo invita a relajarse y meditar en las importantes lecciones de los maestros. Empieza a ver con claridad. Aprende a usar las técnicas tradicionales de manera nueva y estimulante. Conviértete en uno con la web.',
	);


	$main = array(
		"explanation-h3" => "Entonces, ¿qué es esto?",
		"explanation-p1" => 'Existe la necesidad continua de mostrar el poder de <abbr title = "Hojas de estilo en cascada"> CSS </abbr>. El Zen Garden tiene como objetivo emocionar, inspirar y fomentar la participación. Para comenzar, vea algunos de los diseños existentes en la lista. Al hacer clic en cualquiera, se cargará la hoja de estilo en esta misma página. El <abbr title = "HyperText Markup Language"> HTML </abbr> sigue siendo el mismo, lo único que ha cambiado es el archivo externo <abbr title = "Cascading Style Sheets"> CSS </abbr>. Sí, en serio.',
		"explanation-p2" => '<abbr title = "Hojas de estilo en cascada"> CSS </abbr> permite un control total y total sobre el estilo de un documento de hipertexto. La única forma en que esto se puede ilustrar de una manera que entusiasme a la gente es demostrando lo que realmente puede ser, una vez que las riendas se colocan en manos de aquellos que pueden crear belleza desde la estructura. Tanto los diseñadores como los programadores han contribuido a la belleza de la web; Siempre podemos empujarlo más lejos.',

		"participation-h3" => "Participación",
		"participation-p1" => 'El diseño visual fuerte ha sido siempre nuestro enfoque. Está modificando esta página, por lo que también son necesarias las habilidades de <abbr title = "Hojas de estilo en cascada"> CSS </abbr>, pero los archivos de ejemplo están tan bien comentados que incluso <abbr title = "Hojas de estilo en cascada"> CSS < / abbr> los novatos pueden usarlos como puntos de partida. Consulte la <a href="'. $zenUrls["zen-resources"] .'" title="Una lista de recursos relacionados con CSS"> <abbr title = "Hojas de estilo en cascada"> CSS </abbr> Recurso Guía </a> para tutoriales avanzados y sugerencias para trabajar con <abbr title = "Hojas de estilo en cascada"> CSS </abbr>.',
		"participation-p2" => 'Puede modificar la hoja de estilo de la forma que desee, pero no el <abbr title = "HyperText Markup Language"> HTML </abbr>. Esto puede parecer desalentador al principio si nunca ha trabajado de esta manera antes, pero siga los enlaces de la lista para obtener más información y use los archivos de muestra como guía.',
		"participation-p3" => 'Descargue el ejemplo <a href="'. $zenUrls["example-html"].'" title="Este código HTML de origen de esta página, no se modificará."> HTML </a> y <a href = "'. $ zenUrls [" example-css "].'" title = "CSS de muestra de esta página, el archivo que puede modificar."> CSS </a> para trabajar en una copia localmente. Una vez que haya completado su obra maestra (y, por favor, no envíe el trabajo a medio terminar) cargue su archivo <abbr title = "Hojas de estilo en cascada"> CSS </abbr> a un servidor web bajo su control. <a href="'. $zenUrls["zen-submit"].'" title="Utilice el formulario de contacto para enviarnos su archivo CSS"> Envíenos un enlace </a> a un archivo de ese su trabajo y todos los elementos asociados, y si decidimos utilizarlo, lo descargaremos y lo colocaremos en nuestro servidor.',

		"benefits-h3" => "Beneficios",
		"benefits-p1" => '¿Por qué participar? Para obtener reconocimiento, inspiración y un recurso, todos podemos referirnos a mostrar a las personas lo increíble que puede ser <abbr title = "Hojas de estilo en cascada"> CSS </abbr>. Este sitio sirve como una fuente de inspiración para quienes trabajan hoy en la web, una herramienta de aprendizaje para los que estarán mañana y una galería de técnicas futuras que todos podemos esperar.',

		"requirements-h3" => "Requerimientos",
		"requirements-p1" => 'Donde sea posible, nos gustaría ver principalmente <abbr title = "Hojas de estilo en cascada, niveles 1 y 2"> CSS 1 & amp; 2 </abbr> uso. <abbr title = "Hojas de estilo en cascada, niveles 3 y 4"> CSS 3 & amp; 4 </abbr> debe limitarse solo a elementos ampliamente soportados, o deben proporcionarse fuertes recaídas. El CSS Zen Garden se trata de <abbr title = "Hojas de estilo en cascada"> CSS </abbr> funcional y práctico, y no de los últimos trucos de vanguardia visibles para el 2% del público que navega. El único requisito real que tenemos es que su <abbr title = "Hojas de estilo en cascada"> CSS </abbr> se valide.',
		"requirements-p2" => 'Afortunadamente, el diseño de esta manera muestra qué tan bien han implementado varios navegadores <abbr title = "Hojas de estilo en cascada"> CSS </abbr> hasta ahora. Al seguir las pautas, debería ver resultados bastante consistentes en la mayoría de los navegadores modernos. Debido al gran número de agentes de usuario en la web en estos días & # 8212; especialmente cuando se toma en cuenta el móvil & # 8212; Es posible que los diseños de <em>"pixel perfect"</em> no sean posibles en todas las plataformas. Eso está bien, pero prueba en tantos como puedas. Su diseño debería funcionar al menos en IE9 + y los últimos navegadores Chrome, Firefox, iOS y Android (ejecutados por más del 90% de la población).',
		"requirements-p3" => 'Le pedimos que envíe ilustraciones originales. Por favor respete las leyes de derechos de autor. Mantenga el material objetable al mínimo e intente incorporar temas visuales únicos e interesantes a su trabajo. Estamos más allá del punto de necesitar otro diseño relacionado con jardínes.',
		"requirements-p4" => 'Este es un ejercicio de aprendizaje, así como una demostración. Usted conserva todos los derechos de autor en sus gráficos (con excepciones limitadas, consulte <a href="'. $zenUrls["zen-guidelines"".'"> pautas de envío </a>), pero le solicitamos que libere su <abbr title = "Hojas de estilo en cascada"> CSS </abbr> bajo una licencia de Creative Commons idéntica a la <a href = "'. $ ZenUrls [" zen-license "].'" Title = "Ver la licencia del Jardín Zen información. "> de este sitio </a> para que otros puedan aprender de su trabajo.',
		"requirements-p5" => 'Por <a href="'. $zenUrls["zen-credits-creator"].'"> Dave Shea </a>. Ancho de banda gentilmente donado por <a href="'. $zenUrls["zen-credits-hosting"◆. ""> mediatemple </a>. Ahora disponible: <a href="'. $zenUrls["zen-credits-book"].'"> Zen Garden, el libro </a>',
	);

	// if you decide to localize any of these, keep the link text <4 characters if possible
	// some older designs assume the longest one in the group was 'XHTML'
	$footer = array(
		"zen-validate-html-title" => "Check the validity of this site&#8217;s HTML",
		"zen-validate-html-text" => "HTML",
		"zen-validate-css-title" => "Check the validity of this site&#8217;s CSS",
		"zen-validate-css-text" => "CSS",
		"zen-license-title" => "View the Creative Commons license of this site: Attribution-NonCommercial-ShareAlike.",
		"zen-license-text" => "CC",
		"zen-accessibility-title" => "Read about the accessibility of this site",
		"zen-accessibility-text" => "A11y", // a-ccessibilit-y, the middle part is 11 characters. get it?
		"zen-github-title" => "Fork this site on Github",
		"zen-github-text" => "GH",
	);

	$sidebar = array(
		"design-selection-h3" => "Seleccione un diseño::",
		"design-selection-by" => "por",

		"design-archives-h3" => "Archivos:",
		"design-archives-next" => "Diseños Siguientes",
		"design-archives-previous" => "Diseños Anteriores",
		"design-archives-viewall-title" => "Ver sumisiones antiguas al Jardín Zen.",
		"design-archives-viewall-text" => "Ver todos los diseños",

		"design-resources-h3" => "Resources:",
		"view-css-title" => 'View the source CSS file of the currently-viewed design.',
		"view-css-text" => 'View This Design&#8217;s <abbr title="Cascading Style Sheets">CSS</abbr>',
		"css-resources-title" => 'Links to great sites with information on using CSS.',
		"css-resources-text" => '<abbr title="Cascading Style Sheets">CSS</abbr> Resources',
		"zen-faq-title" => 'A list of Frequently Asked Questions about the Zen Garden.',
		"zen-faq-text" => '<abbr title="Frequently Asked Questions">FAQ</abbr>',
		"zen-submit-title" => 'Send in your own CSS file.',
		"zen-submit-text" => 'Submit a Design',
		"zen-translations-title" => 'View translated versions of this page.',
		"zen-translations-text" => 'Translations',
	);

	$foot = array(
		"comment" => "
	Estos divs / tramos superfluos se proporcionaron originalmente como catch-alls para agregar imágenes adicionales.
	Estos días tenemos soportamos :: before y :: after, favor de usar esos en su lugar.
	Solo quedan por compatibilidad de diseño histórico. Pueden irse algún día.
		",
	);


?>
	);

	$sidebar = array(
		"design-selection-h3" => "Seleccione un diseño::",
		"design-selection-by" => "por",

		"design-archives-h3" => "Archivos:",
		"design-archives-next" => "Diseños Siguientes",
		"design-archives-previous" => "Diseños Anteriores",
		"design-archives-viewall-title" => "Ver sumisiones antiguas al Jardín Zen.",
		"design-archives-viewall-text" => "Ver todos los diseños",

		"design-resources-h3" => "Resources:",
		"view-css-title" => 'View the source CSS file of the currently-viewed design.',
		"view-css-text" => 'View This Design&#8217;s <abbr title="Cascading Style Sheets">CSS</abbr>',
		"css-resources-title" => 'Links to great sites with information on using CSS.',
		"css-resources-text" => '<abbr title="Cascading Style Sheets">CSS</abbr> Resources',
		"zen-faq-title" => 'A list of Frequently Asked Questions about the Zen Garden.',
		"zen-faq-text" => '<abbr title="Frequently Asked Questions">FAQ</abbr>',
		"zen-submit-title" => 'Send in your own CSS file.',
		"zen-submit-text" => 'Submit a Design',
		"zen-translations-title" => 'View translated versions of this page.',
		"zen-translations-text" => 'Translations',
	);

	$foot = array(
		"comment" => "
	Estos divs / tramos superfluos se proporcionaron originalmente como catch-alls para agregar imágenes adicionales.
	Estos días tenemos soportamos :: before y :: after, favor de usar esos en su lugar.
	Solo quedan por compatibilidad de diseño histórico. Pueden irse algún día.
		",
	);


?>