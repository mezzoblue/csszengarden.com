<?php

include '../../includes/masterlist.php';
$letterarray = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Dave Shea" />
	<meta name="Keywords" content="design, css, fogli, stile, cascata, xhtml, grafica, w3c, web standard, visual, display" />
	<meta name="Description" content="Una dimostrazione di cosa si pu&ograve; realizzare per mezzo del design basato sui CSS." />
	<meta name="robots" content="all" />
	<title>css Zen Garden: La bellezza del design CSS</title>

	<!-- Per correggere lo sgradevole problema del cosiddetto "Flash of Unstyled Content", ovvero quando, al caricamento della pagina, essa viene inizialmente mostrata senza stili si veda: http://www.bluerobot.com/web/css/fouc.asp -->
	<script type="text/javascript"></script>
	
	<style type="text/css" title="currentStyle">
		@import "<?php echo $loadCSS; ?>";
	</style>
	<link rel="Shortcut Icon" type="image/x-icon" href="http://www.csszengarden.com/favicon.ico" />	
	<link rel="alternate" type="application/rss+xml" title="RSS" href="http://www.csszengarden.com/zengarden.xml" />
</head>

<!--

	Questo documento xhtml è strutturato per fornire ai designer il massimo della 
	flessibilità possibile. Ci sono più classi e tag di quelli necessari e, in una 
	situazione reale, è più che verosimile che risulterebbe molto più leggero.
	
	Tuttavia, penso che saremo tutti daccordo che - anche così - è pur sempre più 
	efficiente che se fosse stato realizzato con le tabelle.

-->

<body id="css-zen-garden">

<div id="container">
	<div id="intro">
		<div id="pageHeader">
			<h1><span>css Zen Garden</span></h1>
			<h2><span>La bellezza del design <acronym title="Cascading Style Sheets" xml:lang="en">CSS</acronym></span></h2>
		</div>

		<div id="quickSummary">
			<p class="p1"><span>Una dimostrazione di cosa si pu&ograve; realizzare per mezzo del design basato sui <acronym title="Cascading Style Sheets" xml:lang="en">CSS</acronym>. Seleziona un foglio di stile dall&#39;elenco per caricarlo in questa pagina.</span></p>
			<p class="p2"><span>Scarica i file di esempio <a href="/zengarden-sample.html" title="Questo &egrave; il codice sorgente HTML della pagina, non va moidficato.">html</a> e <a href="/zengarden-sample.css" title="Questo &egrave; il CSS della pagina di esempio, il file che potete modificare.">css</a></span></p>
		</div>
    
		<div id="preamble">
			<h3><span>La via per l&#39;Illuminazione</span></h3>
			<p class="p1"><span>Una strada scura e desolata si presenta ingrombra di relitti del passato costituiti da tag specifici per alcuni browser, <acronym title="Document Object Model" xml:lang="en">DOM</acronym> incompatibili e carente supporto ai <acronym title="Cascading Style Sheets" xml:lang="en">CSS</acronym>.</span></p>
			<p class="p2"><span>Al giorno d&#39;oggi, possiamo sgomberare la nostra mente dalle pratiche del passato. La promozione di una migliore cultura del web &egrave; stata conseguita grazie agli inesauribili sforzi di persone come i membri del <acronym title="World Wide Web Consortium" xml:lang="en">W3C</acronym>, del <acronym title="Web Standards Project" xml:lang="en">WaSP</acronym> e gli sviluppatori dei principali browser.</span></p>
			<p class="p3"><span>Il css Zen Garden vi invita a rilassarvi e meditare sulle importanti lezioni dei maestri. Iniziate a vedere con chiarezza. Imparate ad utilizzare tecniche (ormai) consolidate nel tempo in modo nuovo e rigenerante. Diventate tutt&#39;uno con il web.</span></p>
		</div>
	</div>
  
	<div id="supportingText">
		<div id="explanation">
			<h3><span>E allora, di che si tratta?</span></h3>
			<p class="p1"><span>&Egrave; evidente la necessit&agrave; che gli artisti delle grafica prendano in seria considerazione i <acronym title="Cascading Style Sheets" xml:lang="en">CSS</acronym>. Il Giardino Zen si prefigge di stimolare, ispirare ed incoraggiare la partecipazione. Come punto di partenza, si osservino alcuni dei progetti in elenco. Cliccando su ciascuno di essi il relativo foglio di stile verr&agrave; caricato in questa stessa pagina. Il codice &egrave; esattamente identico, l&#39;unica cosa che viene modificata &egrave; il file .css esterno. Si, e proprio cos&igrave;!</span></p>
			<p class="p2"><span>I <acronym title="Cascading Style Sheets" xml:lang="en">CSS</acronym> consentono un controllo totale e completo sullo stile di un documento ipertestuale. L&#39;unico modo per spiegarlo, in modo da stimolare l&#39;interesse nelle persone, &egrave; mostrare cosa tutto questo pu&ograve; effettivamente implicare, una volta che le redini sono messe nelle mani di coloro i quali sono in grado di creare bellezza dalla struttura. Fino ad oggi, gran parte degli esempi dei trucchi e hacks pi&ugrave; interessanti sono stati illustrati da specialisti di struttura e codice. I designer devono ancora fare la loro parte. Questo stato di cose deve cambiare.</span></p>
		</div>
    
		<div id="participation">
			<h3><span>Partecipazione</span></h3>
			<p class="p1"><span>Solo artisti della grafica, perfavore. Voi dovrete modificare questa pagina, quindi &egrave; necessaria una solida conoscenza dei <acronym title="Cascading Style Sheets" xml:lang="en">CSS</acronym>, ma i file di esempio sono cos&igrave; ben commentati che anche un principiante pu&ograve; utilizzarli come punto di partenza. Per tutorial avanzati e consigli su come lavorare con i <acronym title="Cascading Style Sheets" xml:lang="en">CSS</acronym> si consulti la <a href="http://www.mezzoblue.com/zengarden/resources/" title="Un elenco di risore relative ai CSS" hreflang="en">guida alle Risorse sui <acronym title="Cascading Style Sheets" xml:lang="en">CSS</acronym></a>.</span></p>
			<p class="p2"><span>Potete modificare il foglio di stile a vostro piacimento, ma non l&#39;<acronym title="HyperText Markup Language" xml:lang="en">HTML</acronym>. A prima vista, tutto ci&ograve; vi potr&agrave; sembrare restrittivo se non avete mai lavorato in questo modo, tuttavia seguite gli esempi dei link elencati per saperne di pi&ugrave; e, come guida, utilizzate i file di esempio.</span></p>
			<p class="p3"><span>Scaricate i file di esempio <a href="/zengarden-sample.html" title="Questo &egrave; il codice sorgente HTML della pagina, non va moidficato.">html </a>e <a href="/zengarden-sample.css" title="Questo &egrave; il CSS della pagina di esempio, il file che potete modificare.">css file</a> e lavorate su una copia nel vostro computer. Una volta completato il vostro capolavoro (e, perfavore, non caricate lavori incompleti) caricate il vostro file .css su un server web sotto il vostro controllo. <a href="http://www.mezzoblue.com/zengarden/submit/" title="Utilizzate il modulo di contatto per inviare il vostro file CSS" hreflang="en">Inviateci un link</a> al file e, se sceglieremo di utilizzarlo, indicizzeremo le immagini associate. Il risultato finale riseder&agrave; sul nostro server.</span></p>
			<p class="p4"><span>Aggiornamento: cerco traduttori. Se parlate correntemente l&#39;inglese ed un&#39;altra lingua, questo &egrave; un altro modo per essere coinvolti nel progetto. <a href="http://www.mezzoblue.com/contact/" title="Inviami una e-mail, specificando quali lingue parli correntemente." hreflang="en">Contattatemi</a> per dettagli. Traduzione in italiano di <a href="http://www.ilcreaweb.com/">Marcello Cerruti</a>.</span></p>
		</div>

		<div id="benefits">
			<h3><span>Benefici</span></h3>
			<p class="p1"><span>Perch&eacute; partecipare? Per ottenere riconoscimenti, per ispirazione e per realizzare una risorsa cui tutti possano fare riferimento quando si vuole promuovere il design basato sui <acronym title="Cascading Style Sheets" xml:lang="en">CSS</acronym>. Persino oggi, ce n&#39;&eacute; un enorme bisogno. Anche se sono sempre di pi&ugrave; i siti importanti che hanno fatto questo passo, tuttavia non sono ancora abbastanza. Un giorno questa galleria sar&agrave; una curisosit&agrave; storica; ma quel giorno non &egrave; oggi.</span></p>
		</div>
    
		<div id="requirements">
			<h3><span>Requisiti</span></h3>
			<p class="p1"><span>Ci piacerebbe vedere quanto pi&ugrave; <acronym title="Cascading Style Sheets, version 1" xml:lang="en">CSS1</acronym> possibile. I <acronym title="Cascading Style Sheets, version 2" xml:lang="en">CSS2</acronym> dovrebbero limitarsi ai soli elementi ampiamente supportati. Il Giardino Zen css &egrave; un esempio di <acronym title="Cascading Style Sheets" xml:lang="en">CSS</acronym> pratici e funzionali e non delle tecniche pi&ugrave; recenti e sofisticate visualizzabili solo dal 2% degli utenti. L&#39;unico requisito cogente che abbiamo imposto &egrave; che il vostro <acronym title="Cascading Style Sheets" xml:lang="en">CSS</acronym> possa validare.</span></p>
			<p class="p2"><span>Sfortunatamente, progettare le pagine in questo modo mette in luce i difetti nelle diverse implementazioni dei <acronym title="Cascading Style Sheets" xml:lang="en">CSS</acronym>. I browser mostrano in modo differente anche dei <acronym title="Cascading Style Sheets" xml:lang="en">CSS</acronym> assolutamente validi e tutto ci&ograve; pu&ograve; fare uscire pazzi quando una soluzione per un browser comporta gravi problemi in un altro. Consultate la pagina <a href="http://www.mezzoblue.com/zengarden/resources/" title="Un elenco di risore relative ai CSS" hreflang="en">Risorse sui CSS</a> per informazioni relative ad alcune delle soluzioni disponibili. La piena aderenza agli standard da parte dei browser, in alcuni casi &egrave; ancora una vana speranza e non ci aspettiamo che voi realizzate un codice preciso al pixel su ciascuna piattaforma. Tuttavia effettuate quanti pi&ugrave; test potete. Se il vostro design non funziona almeno su	IE5+/Win e Mozilla (utilizzati da oltre il 90% delle persone), vi sono buone possibilit&agrave; che sia respinto.</span></p>
			<p class="p3"><span>Vi chiediamo di proporre lavori originali. Rispettate le leggi sul diritto d&#39;autore. Riducete al minimo il materiale che pu&ograve; essere discutibile; il nudo gradevole &egrave; accettato, materiale decisamente pornografico sar&agrave; respinto.</span></p>
			<p class="p4"><span>Questo &egrave; un esercizio di apprendimento, ma anche una dimostrazione. Manterrete il completo diritto d&#39;autore sulla grafica, ma vi chiediamo di rilasciare il <acronym title="Cascading Style Sheets" xml:lang="en">CSS</acronym> sotto licenza Creative Commons identica a quella di <a href="http://creativecommons.org/licenses/sa/1.0/" title="Informazioni relative al tipo di licenza dello Zen Garden." hreflang="en">questo sito</a> in modo tale che altri possano imparare dal vostro lavoro.</span></p>
			<p class="p5"><span>La banda internet di queste pagine &egrave; gentile concessione di <a href="http://www.mediatemple.net/" lang="en">mediatemple</a></span></p>
		</div>
	
		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="Controlla la validit&agrave; dell&#8217; XHTML del sito" hreflang="en">xhtml</a> &nbsp; 
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="Controlla la validit&agrave; del CSS del sito" hreflang="en">css</a> &nbsp; 
			<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="Dettagli relativi alla licenza del sito, su gentile concessione di Creative Commons." hreflang="en">cc</a> &nbsp; 
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=sec508&amp;test=" title="Check the accessibility of this site according to U.S. Section 508" hreflang="en">508</a> &nbsp; 
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=wcag1-aaa&amp;test=" title="Check the accessibility of this site according to WAI Content Accessibility Guidelines 1" hreflang="en">aaa</a>
		</div>
	</div>

	
	<div id="linkList">
    <!-- div supplementare per flessibilità - questo elenco sarà probabilmente il punto più critico con cui avrete a che fare. -->
		<div id="linkList2">
		<!-- Se vi domandate il perché dei &nbsp; al termine di ogni link, è un trucco per aderire agli standard di accessibilità WCAG 1. -->
		<!-- Non mi piace doverlo utilizzare, ma questo è un esericzio di grafica. Dunque è un compromesso. -->
			<div id="lselect">
				<h3 class="select"><span>Seleziona un progetto:</span></h3>
				<ul>
<?php
					$c = 0;
					for ($a = ($listStart + 1); $a <= $listEnd; $a++) {
						$b = $listEnd - $c;
						$d = $letterarray[$c];
						$tempLink = linkMe($filename[$b]);
						echo "\t\t\t\t\t";
						echo "<li><a href=\"?cssfile=/${tempLink}/${tempLink}.css&amp;page=${thisPage}\" title=\"AccessKey: ${d}\" accesskey=\"${d}\">${styleName[$b]}</a> di <a href=\"${styleURL[$b]}\" class=\"c\">${styleCreator[$b]}</a></li>";
						echo "\n";
						$c = $c + 1;
					}
?>
				</ul>
			</div>

<!-- Questa parte non verrà mostrata finché l'archivio non inizierà a riempirsi. Ma organizzatevi in previsione di questa eventualità. Se modificate significativamente il titolo h3 'Seleziona un progetto', anche questo va modificato.
	<div id="lfavorites">
		<h3 class="favorites"><span>Preferiti:</span></h3>
		<ul>
			<li><a href="#">filename</a> by <a href="" class="c">autore</a>&nbsp;</li>
			<li><a href="#">filename</a> by <a href="" class="c">autore</a>&nbsp;</li>
		</ul>
	</div>
-->

			<div id="larchives">
				<h3 class="archives"><span>Archivio dei progetti:</span></h3>
				<ul>
<?php
					
					$forward = $thisPage + 1;
					$backward = $thisPage - 1;
					
					if ($listStart >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"${thisFile}?cssfile=${currentDesign}&amp;page=${forward}\" title=\"Vai al gruppo di progetti successivo. AccessKey: n\" accesskey=\"n\">successivi  &raquo;</a></li>\n";
					}

					if ($thisPage >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"Vai al gruppo di progetti precedente. AccessKey: p\" accesskey=\"p\">&laquo; <span class=\"accesskey\">p</span>recedenti</a></li>\n";
					}
?>
					<li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="Vedi tutti i progetti inviati allo Zen Garden. AccessKey: w" accesskey="w" hreflang="en">Visualizza tutti i progetti</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>Risorse:</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"${currentDesign}\" title=\"Visualizza il sorgente CSS del progetto corrente, AccessKey: v\" accesskey=\"v\"><span class=\"accesskey\">V</span>isualizza il <acronym title=\"Cascading Style Sheets\" xml:lang=\"en\">CSS</acronym> di questo progetto</a></li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources/" title="Link a siti di riferimento per informazioni sull&#8217;utilizzo dei CSS. AccessKey: r" accesskey="r" hreflang="en"><span class="accesskey">R</span>isorse sui <acronym title="Cascading Style Sheets" xml:lang="en">CSS</acronym></a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/faq/" title="Elenco delle FAQ relative allo Zen Garden. AccessKey: q" accesskey="q" hreflang="en"><acronym title="Frequently Asked Questions" xml:lang="en">FA<span class="accesskey">Q</span></acronym></a>&nbsp;</li>
					<li><a href="http://www.mezzoblue.com/zengarden/submit/" title="Invia il tuo file CSS. AccessKey: s" accesskey="s" hreflang="en">Invia un progetto</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/translations/" title="Traduzioni di questa pagina. AccessKey: t" accesskey="t" hreflang="en"><span class="accesskey">T</span>raduzioni</a></li>
				</ul>
			</div>
		</div>
	</div>


</div>

<!-- Questi div/span supplementari possono essere utilizati come jolly per aggiungere ulteriori immagini. -->
<!-- Inserite un'immagine di sfondo in ognuno, utilizzate width (larghezza)e height (altezza) per controllarne le dimensioni 
     e posizionateli con absolute positioning (il posizionamento assoluto). -->
<!-- Un bug abbastanza fastidioso, relativo al cambiamento dei colori nelle GIF trasparenti, si verifica con Netscape 6/7
     (inferiore a 7.1) e con Mozilla dalla versione 1.0 fino alla versione 1.3 (nella quale è stato risolto),
	 dunque assicuratevi di testare i vostri lavori su questi browser. -->
<div id="extraDiv1"><span></span></div><div id="extraDiv2"><span></span></div><div id="extraDiv3"><span></span></div>
<div id="extraDiv4"><span></span></div><div id="extraDiv5"><span></span></div><div id="extraDiv6"><span></span></div>

</body>
</html>